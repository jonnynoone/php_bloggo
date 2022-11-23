<?php
include 'includes/header.php';

// Create DB Object
$db = new Database();

// Check URL for Category
if (isset($_GET['category'])) {
	$category = $_GET['category'];
	// Get Posts for Category
	$query = "SELECT * FROM posts WHERE category = " . $category;
} else {
	// Get ALL Posts
	$query = "SELECT * FROM posts";
}
// Run Query
$posts = $db->select($query);

// CATEGORIES
// Create Query
$query = "SELECT * FROM categories";
// Run Query
$categories = $db->select($query);
?>          

<?php if ($posts): ?>
	<?php while($row = $posts->fetch_assoc()): ?>
<div class="blog-post">
	<h2 class="blog-post-title"><?=$row['title']?></h2>
	<p class="blog-post-meta"><?= formatDate($row['date']) ?> by <a href="#"><?=$row['author']?></a></p>

	<?= shortenText($row['body'], 520) ?>

	<a href="post.php?id=<?= urlencode($row['id']) ?>" class="readmore">Read More</a>
</div><!-- /.blog-post -->
	<?php endwhile; ?>
<?php else: ?>
	<p>There are no posts yet.
<?php endif; ?>

<?php include 'includes/footer.php'; ?>
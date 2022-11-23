<?php
include 'includes/header.php';

// Create DB Object
$db = new Database();
$id = $_GET['id'];

// POSTS
// Create Query
$query = "SELECT * FROM posts WHERE id = " . $id;
// Run Query
$result = $db->select($query);
$post = $result->fetch_assoc();

// CATEGORIES
// Create Query
$query = "SELECT * FROM categories";
// Run Query
$categories = $db->select($query);
?>               
					
<div class="blog-post">
	<h2 class="blog-post-title"><?=$post['title']?></h2>
	
	<p class="blog-post-meta"><?= formatDate($post['title']) ?> by <a href="#"><?=$post['author']?></a></p>

	<?=$post['body']?>
</div><!-- /.blog-post -->

<?php include 'includes/footer.php'; ?>
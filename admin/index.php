<?php 
include 'includes/header.php';

// Create DB Object
$db = new Database;
// Create Query
$query = "SELECT posts.*, categories.name FROM posts
          INNER JOIN categories
          ON posts.category = categories.id";
// Run Query
$posts = $db->select($query);

// Create Query
$query = "SELECT * FROM categories";
// Run Query
$categories = $db->select($query);
?>

<table class="table table-striped">
    <tr>
        <th>Post ID#</th>
        <th>Post Title</th>
        <th>Category</th>
        <th>Author</th>
        <th>Date</th>
    </tr>

    <?php while($row = $posts->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><a href="edit_post.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['author'] ?></td>
        <td><?= formatDate($row['date']) ?></td>
    </tr>
    <?php endwhile; ?>
</table>

<table class="table table-striped">
    <tr>
        <th>Category ID#</th>
        <th>Category Name</th>
    </tr>

    <?php while($row = $categories->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><a href="edit_category.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></td>
    </tr>
    <?php endwhile; ?>
</table>

<?php include 'includes/footer.php'; ?>
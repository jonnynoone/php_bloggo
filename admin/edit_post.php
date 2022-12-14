<?php include 'includes/header.php'; 

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

<form role="form" method="post" action="edit_post.php">
    <div class="form-group">
        <label>Post Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?= $post['title'] ?>">
    </div>

    <div class="form-group">
        <label>Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body">
        <?= $post['body'] ?>
        </textarea>
    </div>

    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <?php while($row = $categories->fetch_assoc()): ?>
                <option <?= !($row['id'] === $post['category']) ?: 'selected' ?>>
                    <?= $row['name'] ?>
                </option>
            <?php endwhile; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter Author Name" value="<?= $post['author'] ?>">
    </div>

    <div class="form-group">
        <label>Tags</label>
        <input type="tags" name="tags" class="form-control" placeholder="Enter Tags" value="<?= $post['tags'] ?>">
    </div>

    <div>
        <input name="submit" type="submit" class="btn btn-default" value="Submit">
        <a href="index.php" class="btn btn-default">Cancel</a>
        <input name="delete" type="submit" class="btn btn-danger" value="Delete">
    </div>

    <br>
</form>

<?php include 'includes/footer.php'; ?>

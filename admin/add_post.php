<?php include 'includes/header.php';

$db = new Database;

$query = "SELECT * FROM categories";
$categories = $db->select($query);
?>

<form role="form" method="post" action="add_post.php">
    <div class="form-group">
        <label>Post Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter Title">
    </div>

    <div class="form-group">
        <label>Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
    </div>

    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <?php while($row = $categories->fetch_assoc()): ?>
            <option><?= $row['name'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>

    <div class="form-group">
        <label>Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
    </div>

    <div class="form-group">
        <label>Tags</label>
        <input type="tags" name="author" class="form-control" placeholder="Enter Tags">
    </div>

    <div>
        <button name="submit" type="submit" class="btn btn-default">Submit</button>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>

    <br>
</form>

<?php include 'includes/footer.php'; ?>

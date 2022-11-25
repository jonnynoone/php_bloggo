<?php include 'includes/header.php'; ?>

<form role="form" method="post" action="edit_post.php">
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
            <option>News</option>
            <option>Events</option>
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
        <input name="submit" type="submit" class="btn btn-default" value="Submit">
        <a href="index.php" class="btn btn-default">Cancel</a>
        <input name="delete" type="submit" class="btn btn-danger" value="Delete">
    </div>

    <br>
</form>

<?php include 'includes/footer.php'; ?>


				</div><!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p><?= $site_description ?></p>
	</div>
	<div class="sidebar-module">
		<h4>Categories</h4>
		<?php if ($categories): ?>
		<ol class="list-unstyled">
			<?php while($row = $categories->fetch_assoc()): ?>
			<li><a href="posts.php?category=<?=$row['id']?>"><?=$row['name']?></a></li>
			<?php endwhile; ?>
		</ol>
		<?php else: ?>
			<p>There are no categories yet.</p>
		<?php endif; ?>
	</div>
	
</div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<footer class="blog-footer">
<p>Bloggo &copy; 2022</p>
<p>
<a href="#">Back to top</a>
</p>
</footer>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
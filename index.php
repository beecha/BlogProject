<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

	<title>Blog | Home</title>
</head>

<body>

	<!-- ////////// Start Container \\\\\\\\\\ -->
	<div class="container">

		<!-- ========== Navigation Bar ========== -->
		<?php include( ROOT_PATH . '/includes/navbar.php') ?>
		<!-- ========== END Navigation Bar ========= -->

		<!-- ########## Banner ########## -->
		<?php include( ROOT_PATH . '/includes/banner.php') ?>

		<!-- __________ Page Content __________ -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- Add more Contents Here -->
			<?php foreach ($posts as $post): ?>
				<div class="post" style="margin-left: 0px;">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
					
					<?php if (isset($post['topic']['name'])): ?>
						<a
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post]'topic']['id'] ?>"
							class="btn category">
							<?php echo $post['topic']['name'] ?>
						</a>
					<?php endif ?>

					<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
				<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
		</div>
		<!-- __________ END Page Content __________ -->

		<!-- .......... Page Footer .......... -->
		<?php include( ROOT_PATH . '/includes/footer.php')	?>
		<!-- .......... END Page Footer .......... -->

	</div>
	<!-- ////////// END Container \\\\\\\\\\ -->

</body>
</html>
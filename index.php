<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . 'includes/head_section.php') ?>

	<title>Blog | Home</title>
</head>

<body>

	<!-- ////////// Start Container \\\\\\\\\\ -->
	<div class="container">

		<!-- ========== Navigation Bar ========== -->
		<?php include( ROOT_PATH . 'includes/navbar.php') ?>
		<!-- ========== END Navigation Bar ========= -->

		<!-- ########## Banner ########## -->
		<?php include( ROOT_PATH . 'includes/banner.php') ?>

		<!-- __________ Page Content __________ -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- Add more Contents Here -->
		</div>
		<!-- __________ END Page Content __________ -->

		<!-- .......... Page Footer .......... -->
		<?php include( ROOT_PATH . 'includes/footer.php')	?>
		<!-- .......... END Page Footer .......... -->

	</div>
	<!-- ////////// END Container \\\\\\\\\\ -->

</body>
</html>
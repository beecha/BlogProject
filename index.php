<!DOCTYPE html>
<html>
<head>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Noto+Serif|Tangerine" rel="stylesheet">

	<!-- Style for Public Area -->
	<link rel="stylesheet" href="static/css/public_styling.css">
	<meta charset="UTF-8">
	<title>Blog | Home</title>
</head>

<body>
	<!-- ////////// Start Container \\\\\\\\\\ -->
	<div class="container">

		<!-- ========== Navigation Bar ========== -->
		<div class="navbar">
			<div class="logo_div">
				<a href="index.php"><h1>Blog</h1></a>
			</div>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="#news">News</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="#about">About</a></li>
			</ul>
		</div>
		<!-- ========== END Navigation Bar ========= -->

		<!-- __________ Page Content __________ -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- Add more Contents Here -->
		</div>
		<!-- __________ END Page Content __________ -->

		<!-- .......... Page Footer .......... -->
		<div class="footer">
			<p>MyViewers &copy; <?php echo date('Y'); ?></p>
		</div>
		<!-- .......... END Page Footer .......... -->

	</div>
	<!-- ////////// END Container \\\\\\\\\\ -->

</body>
</html>
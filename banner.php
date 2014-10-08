<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="src/css/guide.css">
</head>
<body>
<?php include('assets/side.php'); ?>
<article>
	<div class="styleguide-style">
		<h1>bannerモジュール</h1>
	</div>
	<!-- ******************************************************************* -->
	<div class="preview"><div>
		<ul class="module__banner">
			<li class="colum2">
				<a href="#"><span><i>NEW</i><img src="http://placehold.it/290x100" alt=""></span></a>
				<a href="#"><span><img src="http://placehold.it/290x100" alt=""></span></a>
			</li>
			<li><a href="#"><span><i>NEW</i><img src="http://placehold.it/600x200" alt=""></span></a></li>
			<li><a href="#"><span><img src="http://placehold.it/600x200" alt=""></span></a></li>
		</ul>
	</div></div>
	<pre class="code"><code>
		<ul class="module__banner">
			<li class="colum2">
				<a href="#"><span><i>NEW</i><img src="http://placehold.it/290x100" alt=""></span></a>
				<a href="#"><span><img src="http://placehold.it/290x100" alt=""></span></a>
			</li>
			<li><a href="#"><span><i>NEW</i><img src="http://placehold.it/600x200" alt=""></span></a></li>
			<li><a href="#"><span><img src="http://placehold.it/600x200" alt=""></span></a></li>
		</ul>
	</code></pre>
</article>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="assets/jquery.htmlview.js"></script>
<script>
	$('code').htmlview();
</script>
</body>
</html>
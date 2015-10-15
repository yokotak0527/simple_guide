<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<meta charset="<?php echo $charset; ?>">
<title><?php echo ($page_title ? $page_title.' | ' : '').$guide_title; ?></title>
<link rel="stylesheet" href="<?php echo $root_path; ?>src/css/<?php echo $theme; ?>/format.css">
<link rel="stylesheet" href="<?php echo $root_path; ?>src/lib/js/highlight/styles/<?php echo $highlight_style; ?>.css">
<link rel="stylesheet" href="<?php echo $root_path; ?>src/css/<?php echo $theme; ?>/style.css">
<?php echo $add_header; ?>
</head>
<body>
	<nav>
		<h1><?php echo $guide_title_html; ?></h1>
		<?php include($root_path.'assets/side.php'); ?>
	</nav>
<article>

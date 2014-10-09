<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
<meta charset="<?php echo $charset; ?>">
<title><?php echo ($page_title ? $page_title.' | ' : '').$guide_title; ?></title>
<link rel="stylesheet" href="<?php echo $root_path; ?>src/css/format.css">
<link rel="stylesheet" href="<?php echo $root_path; ?>src/js/lib/highlight/styles/<?php echo $highlight_style; ?>.css">
<link rel="stylesheet" href="<?php echo $root_path; ?>src/css/guide.css">
<?php echo $add_header; ?>
</head>
<body>
<?php include($root_path.'assets/side.php'); ?>
<article>
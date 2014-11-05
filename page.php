<?php
	// page setting
	$root_path     = './';
	$markdown      = true;
	$previewHeader = '
		<!DOCTYPE html>
		<html lang="jp">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
		</head>
		<body>';
	$previewFooter = '
		</body>
		</html>';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

# set01

{{preview}}
abc
{{/preview}}

{{code}}
<h1>hogegegege</h1>
{{/code}}

{{/set}}




{{set}}

# set02

{{preview}}
123
{{/preview}}

{{/set}}

--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
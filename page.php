<?php
	// page setting
	$root_path     = './';
	$markdown      = true;
	$previewHeader = '
		<body>';
	$previewFooter = '
		</body>';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

# set01

{{preview}}
<iframe frameborder="0" src="style_template/sample2.html"></iframe>
{{/preview}}

{{code}}
<div>
	<h1>asdfsdd</h1>
</div>
{{/code}}

{{code}}
<?php
	echo "hoge";
?>
{{/code}}

{{/set}}




{{set}}

# set02

{{preview}}
<iframe frameborder="0" src="style_template/sample.html"></iframe>
{{/preview}}

{{/set}}

--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
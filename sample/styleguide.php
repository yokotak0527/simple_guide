<?php
	// page setting
	$root_path     = '../';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

# styleguide sample

{{preview}}
<iframe frameborder="0" src="style_template/sample1.html"></iframe>
{{/preview}}
{{code}}
<input type="button" class="button" value="sample">
{{/code}}
{{preview}}
<iframe frameborder="0" src="style_template/sample2.html"></iframe>
{{/preview}}

{{/set}}

--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
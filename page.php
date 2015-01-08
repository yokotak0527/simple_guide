<?php
	// page setting
	$root_path = './';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

| thead th | thead th | thead th |
|:---------|---------:|:--------:|
| tbody td | tbody td | tbody td |
| tbody td | tbody td | tbody td |

unde omnis iste natus error sit voluptatem accusantium  
unde omnis iste natus error sit voluptatem accusantium

- - - - - - - - - - - - - -

unde omnis iste natus error sit voluptatem accusantium  
unde omnis iste natus error sit voluptatem accusantium

- - - - - - - - - - - - - -

| thead th | thead th | thead th |
|:---------|---------:|:--------:|
| tbody td | tbody td | tbody td |

- - - - - - - - - - - - - -

## おけ
よこたけんじ  
けんじ
{{preview}}
<iframe src="style_template/sample1.html"></iframe>
{{/preview}}
{{code}}
<input type="button" class="button" value="sample">
{{/code}}

{{/set}}

{{set}}
ごへ  
asfasd  
あえおいあせふぁせふぁせ
{{/set}}
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
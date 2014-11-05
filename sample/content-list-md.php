<?php
	// page setting
	$root_path = '../';
	$markdown  = true;
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

# content list
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam

## content list
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam

### content list

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam

- - - - - - - - - - - - - -

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae

vitae dicta sunt explicabo. Nemo enim ipsamvoluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est

- - - - - - - - - - - - - -

Sed ut perspiciatis unde *omnis iste natus error sit voluptatem accusantium doloremque* laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. [Nemo enim ipsam voluptatem quia voluptas](http://example.com/) sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,

- - - - - - - - - - - - - -

☆
: Setunde omnis iste natus error sit voluptatem accusantium

■
: unde omnis iste natus error sit voluptatem accusantium

01
: unde omnis iste natus error sit voluptatem accusantium

02
: unde omnis iste natus error sit voluptatem accusantium

- - - - - - - - - - - - - -

| thead th | thead th | thead th |
|:---------|---------:|:--------:|
| tbody td | tbody td | tbody td |

- - - - - - - - - - - - - -

* eaque ipsa quae ab illo inventore veritatis et quasi architecto
* eaque ipsa quae ab illo inventore veritatis et quasi architecto
* eaque ipsa quae ab illo inventore veritatis et quasi architecto

- - - - - - - - - - - - - -

1. eaque ipsa quae ab illo inventore veritatis et quasi architecto
2. eaque ipsa quae ab illo inventore veritatis et quasi architecto
3. eaque ipsa quae ab illo inventore veritatis et quasi architecto

- - - - - - - - - - - - - -

![](http://placehold.it/800x300)

- - - - - - - - - - - - - -

{{video vimeo='//player.vimeo.com/video/51430433'}}

- - - - - - - - - - - - - -

{{video youtube="//www.youtube.com/embed/_PjBHyfo_T0"}}

- - - - - - - - - - - - - -

{{video niconico="http://ext.nicovideo.jp/thumb_watch/sm24655539?w=490&h=307"}}

{{/set}}
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
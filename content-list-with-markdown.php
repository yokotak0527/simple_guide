<?php
	// page setting
	$root_path = './';
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

<table>
	<thead>
		<tr>
			<th>thead th</th>
			<td>thead td</td>
			<td>thead td</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>tbody th</th>
			<td>tbody td</td>
			<td>tbody td</td>
		</tr>
	</tbody>
</table>

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

	<div class="preview"><div>
	http://yokotakenji.me/test/simple_guide_sample/
	</div></div>
	<hr>
	<div class="code">
		<pre><code>
class myClass
	constructor : (@a,@b)->
		@c = @a + @b
		return
		</code></pre>
	</div>
	<hr>
	<div class="video"><div>
		<iframe src="//player.vimeo.com/video/51430433" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div></div>
	<hr>
	<div class="video"><div>
		<iframe width="560" height="315" src="//www.youtube.com/embed/_PjBHyfo_T0" allowfullscreen></iframe>
	</div></div>
	<hr>
	<div class="video"><div>
		<script type="text/javascript" src="http://ext.nicovideo.jp/thumb_watch/sm24655539?w=490&h=307"></script><noscript><a href="http://www.nicovideo.jp/watch/sm24655539">【ニコニコ動画】【サイコパス２】OP中毒になる動画【PSYCHO-PASS2】</a></noscript>
	</div></div>
{{/set}}
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
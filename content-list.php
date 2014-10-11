<?php
	// page setting
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
<guide-style>
	<h1>content list</h1>
	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
	<h2>content list</h2>
	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
	<h3>content list</h3>
	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
	<hr>
	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>
	<p>vitae dicta sunt explicabo. Nemo enim ipsamvoluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
	<hr>
	<p>Sed ut perspiciatis unde <em>omnis iste natus error sit voluptatem accusantium doloremque</em> laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. <a href="#">Nemo enim ipsam voluptatem quia voluptas</a> sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
	<hr>
	<dl>
		<dt>☆</dt><dd>Setunde omnis iste natus error sit voluptatem accusantium</dd>
		<dt>■</dt><dd>unde omnis iste natus error sit voluptatem accusantium</dd>
		<dt>01</dt><dd>unde omnis iste natus error sit voluptatem accusantium</dd>
		<dt>02</dt><dd>unde omnis iste natus error sit voluptatem accusantium</dd>
	</dl>
	<hr>
	<p>あおいあせふぁｓ</p>
	<ul>
		<li>あいうえおeaque ipsa quae ab illo inventore veritatis et quasi architecto</li>
		<li>eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>
		<li>eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>
	</ul>
	<ol>
		<li>eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>
		<li>eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>
		<li>eaque ipsa quae ab illo inventore veritatis et quasi architecto</li>
	</ol>
	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
	<img src="http://placehold.it/800x300">
	<hr>
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
	<hr>
	<div class="code">
		<pre><code>
class myClass
	constructor : (@a,@b)->
		@c = @a + @b
		return
		</code></pre>
	</div>
	<p>Sed ut perspiciatis unde omnis iste natus error<img src="http://placehold.it/800x300">accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beat</p>
	<img src="http://placehold.it/800x300">
	<hr>
	<div class="video"><div>
		<iframe src="//player.vimeo.com/video/51430433" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div></div>
	<hr>
	<div class="video"><div>
		<iframe width="560" height="315" src="//www.youtube.com/embed/_PjBHyfo_T0" frameborder="0" allowfullscreen></iframe>
	</div></div>
	<hr>
	<div class="video"><div>
		<script type="text/javascript" src="http://ext.nicovideo.jp/thumb_watch/sm24655539?w=490&h=307"></script><noscript><a href="http://www.nicovideo.jp/watch/sm24655539">【ニコニコ動画】【サイコパス２】OP中毒になる動画【PSYCHO-PASS2】</a></noscript>
	</div></div>
</guide-style>
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
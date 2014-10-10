<?php
	// page setting
	$root_path  = './';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
<guide-style>
	<h1>動作環境</h1>
	<p>利用するだけえあれば、以下の環境を用意するだけで実行可能です。</p>
	<table>
		<tbody>
			<tr>
				<th>PHP</th>
				<td>5.3~</td>
			</tr>
			<tr>
				<th>ブラウザ</th>
				<td>chrome、safari、firefox</td>
			</tr>
		</tbody>
	</table>
	<p>もし機能のカスタマイズやスタイルの変更がしたいのであれば、以下の環境が必要です。</p>
	<table>
		<tbody>
			<tr>
				<th>Grunt</th>
				<td></td>
			</tr>
			<tr>
				<th>Sass</th>
				<td></td>
			</tr>
			<tr>
				<th>Compass</th>
				<td></td>
			</tr>
			<tr>
				<th>CoffeeScript</th>
				<td></td>
			</tr>
		</tbody>
	</table>
	<p>
		利用するには以下の環境が必要です。
	</p>
	<h2>p-tag</h2>
	<p>Used the sentences.</p>
	<h2>dl-tag</h2>
	<p>Used the list that like ul-tag.</p>
	<dl>
		<dt>■</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
		<dt>■</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
		<dt>★</dt>
		<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
	</dl>
	<h2>table-tag</h2>
	<p>asdfasdfa</p>
	<h2>em-tag</h2>
	<p>asfasdaf</p>
	<h2>div[class="code"]-tag</h2>
	<p>This tag are used to</p>
	<h2>div[class="preview"]-tag</h2>

	<table>
		<tbody>
			<tr>
				<th></th>
				<td></td>
			</tr><tr>
				<th>&lt;p&gt;</th>
				<td></td>
			</tr>
		</tbody>
	</table>
	<div class="code"><pre><code class="html">
<p>asdfasd</p>
	</code></pre></div>

</guide-style>





<guide-style>

	<table>
		<thead>
			<tr>
				<th>A</th>
				<th>B</th>
				<td>C</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>タイトル</th>
				<td><a href="asdfa">ああああsふぁ</a>sふぁsふぁsdf<br>ああああsふぁsふぁsふぁsdf</td>
				<td>いいい</td>
			</tr>
		</tbody>
	</table>
	<table>
		<thead>
			<tr>
				<th>A</th>
				<th>B</th>
				<td>C</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>タイトル</th>
				<td>ああああsふぁsふぁsふぁsdf<br>ああああsふぁsふぁsふぁsdf</td>
				<td>いいい</td>
			</tr>
		</tbody>
	</table>
	<dl>
		<dt>■</dt><dd>text text text text text text text</dd>
		<dt>■</dt><dd>text text <br>text text<br>text text text</dd>
		<dt>■</dt><dd>SIMPLE GUIDE is a simple tools of making guide.</dd>
		<dt>01</dt><dd>You can make products guide, styleguide and so on.</dd>
		<dt>02</dt><dd>SIMPLE GUIDE is a simple tools of making guide.</dd>
		<dt>03</dt><dd>You can make products guide, styleguide and so on.</dd>
	</dl>
	<p>
		SIMPLE GUIDE is a simple tools of making guide.<br>
		You can make products guide, styleguide and so on.
	</p>
	<table>
		<thead>
			<tr>
				<th>A</th>
				<th>B</th>
				<td>C</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>タイトル</th>
				<td>ああああsふぁsふぁsふぁsdf<br>ああああsふぁsふぁsふぁsdf</td>
				<td>いいい</td>
			</tr>
		</tbody>
	</table>
	<div class="preview"><div>
	</div></div>
	<div class="code"><pre><code>
# よこたけんじ
$ cd src
$ npm i
	</code></pre></div>
	<p>
		SIMPLE GUIDE is a simple tools of making guide.<br>
		You can make products guide, styleguide and so on.
	</p>
</guide-style>
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
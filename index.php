<?php
	// page setting
	$root_path  = './';
?>
<?php
	include($root_path.'assets/config.php');
	include($root_path.'assets/header.php');
?>
<div class="guide-style">
	<h1>SIMPLE GUIDE version 0.1</h1>
	<p>
		SIMPLE GUIDE is a simple tools of making guide.<br>
		You can make products guide, styleguide and so on.<br>
		To work SIMPLE GUIDE, PHP are required.
	</p>
</div>
<div class="guide-style">
	<h1>How to edit the content</h1>
	<p>
		To add a new page, add a PHP file in the root directory of SIMPLE GUIDE.<br>
		( The easist way, It to copy page.php and rename. )<br>
		and open a assets/
		You can use this HTML tags
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

</div>





<div class="guide-style">

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
</div>
<?php include($root_path.'assets/footer.php'); ?>
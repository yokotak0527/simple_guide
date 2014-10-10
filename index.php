<?php
	// page setting
	$root_path  = './';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
<guide-style>
	<h1>SIMPLE GUIDE version 0.1</h1>
	<p>
		SIMPLE GUIDEは簡易なガイドを作るためのツールです。<br>
		例えばサイトの運営手順やCSSのスタイルガイドなどが作成できます。<br>
		普段利用しているような環境で動作しますし、ページの作成もコピペしてコンテンツを入力するだけです。<br>
		ページはHTMLで編集しますが、Markdown記法でより簡単に書くことも出来ます。
	</p>
</guide-style>
<guide-style>
	<h1>動作環境</h1>
	<p>利用するだけえあれば以下の環境を用意するだけで実行可能です。</p>
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
	<p>機能のカスタマイズやスタイルの変更がしたい場合は以下の環境が必要です。</p>
	<table>
		<tbody>
			<tr>
				<th>Grunt</th>
			</tr>
			<tr>
				<th>Sass</th>
			</tr>
			<tr>
				<th>Compass</th>
			</tr>
			<tr>
				<th>CoffeeScript</th>
			</tr>
		</tbody>
	</table>
</guide-style>
<guide-style>
	<h1>使い方</h1>
</guide-style>
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
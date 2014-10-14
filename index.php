<?php
	// page setting
	$root_path  = './';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}
	<h1>SIMPLE GUIDE version 0.1</h1>
	<p>
		SIMPLE GUIDE is tools for making simple guide.<br>
		Operating environment is only PHP5.3~ and browser that chrome, safari, or firefox.<br>
		You can edit the page with the use of HTML-tags, but write with Markdown conventions more easily.
	</p>
{{/set}}
{{set}}
	<h2>Operating environment</h2>
	<p>Without customization, can only be used to prepare the following environment, as is possible.</p>
	<table>
		<tbody>
			<tr>
				<th>PHP</th>
				<td>5.3~</td>
			</tr>
			<tr>
				<th>browser</th>
				<td>chrome, safari, or firefox</td>
			</tr>
		</tbody>
	</table>
	<p>The following environment is required if you want to customize.</p>
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
{{/set}}
{{set}}
	<h1>SIMPLE GUIDE version 0.1</h1>
	<p>
		SIMPLE GUIDEは簡易なガイドを作るためのツールです。<br>
		動作に必要な環境はPHPの5.3以上とchromeやsafariといったブラウザのみです。<br>
		ページはHTMLで編集しますが、Markdown記法でより簡単に書くことも出来ます。
	</p>
{{/set}}
{{set}}
	<h2>動作環境</h2>
	<p>カスタマイズせず使用するだけえあれば、以下の環境を用意するだけで実行可能です。</p>
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
	<p>カスタマイズがしたい場合は以下の環境が必要です。</p>
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
{{/set}}
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
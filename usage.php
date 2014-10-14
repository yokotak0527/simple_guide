<?php
	// page setting
	$markdown  = true;
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

使い方
========================================
SIMPLE GUIDEはPHPで動きます。
</guide-style>
<guide-style>
ページの追加方法
========================================

ページを追加するには以下のことを行います。

 - - - - - - - - - - - - -

■
:  追加するページの作成

■
:  サイドメニューにリンクを追加

 - - - - - - - - - - - - -

ページの作成はphpファイルを新規に作成しても良いですが、最も簡単な方法は  
SIMPLE GUIDEをダウンロードした時に入っていたpage-template.phpを複製しリネームする方法です。

サイドメニューにリンクを追加するにはassets/side.phpを編集する必要があります。  
といっても、リンクを追加するだけですので書くのは1行のみです。  
ここでは、このpage-template.phpを複製しリネームするやり方を使ったページの作成方法を説明します。

ページの作成
----------------------------------------
page-template.phpを複製し、リネームします。


{{/set}}
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
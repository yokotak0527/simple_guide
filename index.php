<?php
	// page setting
	$root_path  = './';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

# SIMPLE GUIDE version 0.1.6

SIMPLE GUIDEは簡易なガイドを作るためのツールです。  
動作に必要な環境はPHPの5.3以上とchromeやsafariといったブラウザのみです。  
ページはHTMLで編集しますが、Markdown記法でより簡単に書くことも出来ます。

| 表示出来るコンテンツ |                                                |
|:---------------------|-----------------------------------------------:|
| テキストや画像       | テーブルやリストも表示出来ます。               |
| HTML                 | 外部HTMLを表示します。                         |
| ソースコード         |                                                |
| 動画                 | youtube、vimeo、ニコニコ動画に対応しています。 |

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

また、テーマ機能があるのでCSSを使い、見栄えを変更することも可能です。

{{/set}}
{{set}}

# 動作環境

テーマの変更や機能追加などのカスタマイズをしないのであれば  
以下の環境を用意するだけで実行可能です。

| 動作環境 |                             |
|:---------|----------------------------:|
| PHP      | 5.3~                        |
| browser  | chrome、safariまたはfirefox |

{{/set}}

{{set}}

# 導入方法
{{code}}
$ git clone git@github.com:yokotak0527/simple_guide.git
$ cd simple_guide
$ git submodule init
$ git submodule update
{{/code}}
{{/set}}

{{set}}

# クレジット

| 作者         |                                                 |
|:-------------|------------------------------------------------:|
| twitter      | [@yokotak0527](https://twitter.com/yokotak0527) |
| blog         | [log](http://yokotakenji.me/log/)               |

{{/set}}

--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
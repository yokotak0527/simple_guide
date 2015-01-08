<?php
	// page setting
	$root_path = '../';
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<EOD
--------------------------------------------------------------------------------
{{set}}

# 使い方

ここでは 「**SIMPLE GUIDE**」の基本的な使い方を説明します。

{{/set}}

{{set}}

# 導入方法

{{code}}
$ git clone git@github.com:yokotak0527/simple_guide.git
$ cd simple_guide
$ git submodule init
$ git submodule update
{{/code}}

Gitが使えない方は・・・

{{/set}}

{{set}}

# SIMPLE GUIDE 設定

SIMPLE GUIDEの設定をするには「**assets/config.php**」の値を変更します。

| 変数名             | 説明                                                               |
|:-------------------|-------------------------------------------------------------------:|
| \$lang             | ページ言語です。日本語の場合は「ja」を指定してください。           |
| \$charset          | ページのエンコードの指定です。基本的に変更する必要はありません。   |
| \$guide_title      | スタイルガイドの名前です。ブラウザのタブに表示されます。           |
| \$guide_title_html | こちらはページ左上に表示されます。htmlコードが使えます。           |
| \$page_title       | ページタイトルです。 //tbr                                         |
                       不使用時は「false」使用時は「'ページタイトル'」にしてください。    |
| \$add_header       | コンテンツが始まる前に追加でコンテンツを追加したい //tbr           | 
                       (例えば外部ファイルを読み込みたい等) //tbr                         |
                       の場合はこの変数に入れてください。                                 |
| \$add_footer       | フッターにコンテンツを追加したい場合はこの変数に入れてください。   |
| \$highlight_style  | シンタックスハイライトのスタイルを指定します。 //tbr               |
                       スタイルはこちらをご覧ください。 //tbr                             |
                       [highlightjs：左メニュー「Styles」](https://highlightjs.org/static/demo/) |
| \$root_path        | ページの階層を指定します。 //tbr                                   |
                       基本的にページごとに設定するので、ここで設定する必要はありません。 |
| \$markdown         | マークダウンを利用するかを指定します。                             |
| \$contents_line    |                                                                    |
| \$theme            | テーマを指定します。テーマのカスタマイズは別ページで紹介します。   |

{{/set}}

--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>
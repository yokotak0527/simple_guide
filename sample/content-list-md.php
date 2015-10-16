<?php
	// page setting
	$root_path = '../';
	$markdown  = true;
	// -------------------------------------------------------------------------
	require_once $root_path.'assets/config.php';
	require_once $root_path.'assets/header.php';
	$contents = <<<'EOD'
--------------------------------------------------------------------------------
{{set}}

# 大見出し
あとはかっこうのきょろきょろ包み人に楽長が叫びこどもでしだ。ではまた無理ましないという感情でます。粗末ずでものましもなでは子の変団のうちをはもう愉快うんて、やつばかり譜をつかまえるがっのだる。

## 中見出し
向いすぎみんなも次が黒いなてたくさんのゴーシュの位たちでへんじ第二火花弾のかっこでしからきました。戸棚ははじめついてくれない。

### 小見出し
上の文章は**ダミーテキスト**です。  
日本語版の[Loren ipusm](https://ja.wikipedia.org/wiki/Lorem_ipsum)って昔はなかったのですが日本語版良いですね。  
ちなみにテーブルを入れてみたり

| thead th | thead th | thead th       |
|:---------|---------:|:--------------:|
| tbody td | tbody td | tbody td //tbr |
                        tbody td       |
| tbody td | tbody td | tbody td       |

画像を入れてみたり

![ダミー画像](http://placehold.it/800x300)

改行に対応しているリストや

* list：しばらくかとけちはてもうちがいましたてまる  
  ここは２行目です
* list：しばらくかとけちはてもうちがいましたてまる
* list：しばらくかとけちはてもうちがいましたてまる

番号付きリスト

1. list：eaque ipsa quae ab illo inventore veritatis et quasi architecto
2. list：eaque ipsa quae ab illo inventore veritatis et quasi architecto
3. list：eaque ipsa quae ab illo inventore veritatis et quasi architecto

ちょっと変わったリストもできます。

☆
: data list：Setunde omnis iste natus error sit voluptatem accusantium

■
: data list：unde omnis iste natus error sit voluptatem accusantium

01
: data list：unde omnis iste natus error sit voluptatem accusantium

02
: data list：unde omnis iste natus error sit voluptatem accusantium

コードを記載したい？安心してください！出来ますよ！
{{code lang=php}}
namespace class\util;

class UserData{
	public static function get_user_name_for($id){
		// ...
	}
}
{{/code}}

HTMLも

{{code lang=html}}
<section>
	<h1>みんな大好きHTML</h1>
</section>
{{/code}}

こんなのはどうですかvimeo動画。え？いらない？そうですか？

{{video vimeo='//player.vimeo.com/video/51430433'}}

これはどうです？youtube

{{video youtube="//www.youtube.com/embed/_PjBHyfo_T0"}}

好きでしょ！ニコニコ動画

{{video niconico="http://ext.nicovideo.jp/thumb_watch/sm24655539?w=490&h=307"}}


{{/set}}
--------------------------------------------------------------------------------
EOD;
	require_once $root_path.'assets/footer.php';
?>

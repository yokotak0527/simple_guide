<?php

namespace contents;

function replace($_cnt,$config){
	global $previewCnt;
	$contents_line = $config['contents_line'];
	$markdown      = $config['markdown'];
	$cnt           = $_cnt;
	$previewCount  = 0;
	$temp          = null;
	// -------------------------------------------------------------------------
	$cnt           = preg_replace('/-{'.$contents_line.'}\n?/','',$cnt);
	// -------------------------------------------------------------------------
	if($markdown) $cnt = htmlspecialchars($cnt);
	// ショートタグの置換
	$cnt = preg_replace_callback(
		array(
			'/{{set}}|{{\/set}}/',
			'/{{preview}}|{{\/preview}}/',
			'/{{code}}|{{\/code}}/'
		),
		function($m){
			global $markdown;
			// set
			if($m[0] == '{{set}}'){
				return $markdown ? '<div class="guide-style" markdown="1">' : '<div class="guide-style">';
			}
			else if($m[0] == '{{/set}}'){
				return '</div>';
			}
			// プレビュー
			if($m[0] == '{{preview}}'){
				return '<div class="preview"><div>';
			}
			else if($m[0] == '{{/preview}}'){
				return '</div></div>';
			}
			// コード
			if($m[0] == '{{code}}'){
				return '<div class="code"><pre><code>';
			}
			else if($m[0] == '{{/code}}'){
				return '</code></pre></div>';
			}
		},
		$cnt
	);
	// -------------------------------------------------------------------------
	// マークダウン時
	if($markdown){
		// プレビューショートカット
		$cnt = preg_replace_callback(
			'/&lt;iframe[\sA-Za-z0-9&quot;="\'_\-\/\.]*/s',
			function($m){
				preg_match('/src=&quot;([0-9a-z_\-\/\.]*)/i',$m[0],$src);
				$src = $src[1];
				return '<iframe frameborder="0" src="'.$src.'"></iframe>';
			},
			$cnt
		);
		$cnt = preg_replace('/\/\/tbr[\|\s]*/s','<br>',$cnt);
	}
	// -------------------------------------------------------------------------
	$videRegExp = $markdown ? '/{{video\s(youtube|vimeo|niconico)=(&quot;|'.preg_quote("'").')(.*)(&quot;|'.preg_quote("'").')}}/' : '/{{video\s(youtube|vimeo|niconico)=(\"|\')(\S*)(\"|\')}}/';
	$cnt = preg_replace_callback($videRegExp,function($m){
		$type       = $m[1];
		$url        = $m[3];
		$video_cnt  = '';
		$video_cnt .= '<div class="video"><div>';
		switch($type){
			case 'youtube' : 
				$video_cnt .= '<iframe src="'.$url.'" allowfullscreen></iframe>';
			break;
			case 'vimeo' : 
				$video_cnt .= '<iframe src="'.$url.'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
			break;
			case 'niconico' : 
				preg_match('/.*\/(sm.*)(\?.*)/',$url,$id);
				$id = $id[1];
				$video_cnt .= '<script type="text/javascript" src="http://ext.nicovideo.jp/thumb_watch/'.$id.'"></script><noscript><a href="http://www.nicovideo.jp/watch/'.$id.'"></a></noscript>';
			break;
		}
		$video_cnt .= '</div></div>';
		return $video_cnt;
	},$cnt);
	return $cnt;
}

?>
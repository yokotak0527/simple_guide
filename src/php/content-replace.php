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
	$cnt = preg_replace_callback('/{{video\s(youtube|vimeo|niconico)=(\"|\')(\S*)(\"|\')}}/',function($m){
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
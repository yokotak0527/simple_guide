<?php

namespace contents;

function replace($_cnt,$config){
	$contents_line = $config['contents_line'];
	$markdown      = $config['markdown'];
	$cnt           = $_cnt;
	$previewCount  = 0;
	$temp          = null;
	$cnt           = preg_replace(
		array(
			'/-{'.$contents_line.'}\n?/',
			'/{{set}}/',
			'/{{\/set}}/'
		),
		array(
			'',
			$markdown ? '<div class="guide-style" markdown="1">' : '<div class="guide-style">',
			'</div>'
		),
		$cnt
	);
	// -------------------------------------------------------------------------
	// コードタグの置換
	$cnt = preg_replace_callback(
		array('/{{code}}([^({{\/code}}).]*){{\/code}}/s'),
		function($m){
			var_dump("adsfsdd");
			$temp = '<div class="code"><pre><code>'.$m[1].'</code></pre></div>';
			return $temp;
		},
		$cnt
	);
	//$cnt = preg_replace_callback(
	//	array('/{{code}}([^({{\/code}}).]*){{\/code}}/s'),
	//	function($m){
	//		var_dump("adsfsdd");
	//		$temp = '<div class="code"><pre><code>'.$m[1].'</code></pre></div>';
	//		return $temp;
	//	},
	//	$cnt
	//);
	// -------------------------------------------------------------------------
	// プレビュータグの置換
	$cnt = preg_replace_callback(
		array('/{{preview}}([^({{\/preview}}).]*){{\/preview}}/s'),
		function($m){
			global $previewCount;
			$temp = '<div class="preview"><div id="preview'.$previewCount.'">'.$m[1].'</div></div>';
			$previewCount++;
			return $temp;
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
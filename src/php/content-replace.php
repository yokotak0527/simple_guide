<?php

namespace contents;

function replace($_cnt,$config){
	$contents_line = $config['contents_line'];
	$markdown      = $config['markdown'];
	$cnt           = $_cnt;
	$cnt           = preg_replace(
		array(
			'/-{'.$contents_line.'}\n?/',
			'/{{set}}/',
			'/{{\/set}}/',
			'/{{code}}/',
			'/{{\/code}}/',
			'/{{preview}}/',
			'/{{\/preview}}/'
		),
		array(
			'',
			$markdown ? '<div class="guide-style" markdown="1">' : '<div class="guide-style">',
			'</div>',
			'<div class="code"><pre><code>',
			'</code></pre></div>',
			'<div class="preview"><div>',
			'</div></div>'
		),
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
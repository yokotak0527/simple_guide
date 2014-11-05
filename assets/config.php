<?php
	$lang             = isset($lang)             ? $lang             : 'en';
	$charset          = isset($charset)          ? $charset          : 'UTF-8';
	$guide_title      = isset($guide_title)      ? $guide_title      : 'SIMPLE GUIDE';
	$guide_title_html = isset($guide_title_html) ? $guide_title_html : 'SIMPLE<br>GUIDE';
	$page_title       = isset($page_title)       ? $page_title       : false;
	$add_header       = isset($add_header)       ? $add_header       : '';
	$add_footer       = isset($add_footer)       ? $add_footer       : '';
	$highlight_style  = isset($highlight_style)  ? $highlight_style  : 'tomorrow-night-bright';
	$root_path        = isset($root_path)        ? $root_path        : './';
	$markdown         = isset($markdown)         ? $markdown         : false;
	$contents_line    = isset($contents_line)    ? $contents_line    : 80;
	$theme            = isset($theme)            ? $theme            : 'default_theme';
	// =========================================================================
	// developer
	// =========================================================================
	// $previewCnt = array();
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	// =========================================================================
	$php_lib_path = dirname(__FILE__).'/../src/php/';
	set_include_path(get_include_path().PATH_SEPARATOR.$php_lib_path);
	require_once 'content-replace.php';
	require_once 'php-markdown/Michelf/MarkdownInterface.php';
	require_once 'php-markdown/Michelf/Markdown.php';
	require_once 'php-markdown/Michelf/MarkdownExtra.php';
	// =========================================================================
	if($markdown){
		$md = new Michelf\MarkdownExtra;
	}
?>
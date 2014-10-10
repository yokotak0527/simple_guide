<?php
	$lang            = $lang            ? $lang            : 'en';
	$charset         = $charset         ? $charset         : 'UTF-8';
	$guide_title     = $guide_title     ? $guide_title     : 'SIMPLE GUIDE';
	$page_title      = $page_title      ? $page_title      : false;
	$add_header      = $add_header      ? $add_header      : '';
	$add_footer      = $add_footer      ? $add_footer      : '';
	$highlight_style = $highlight_style ? $highlight_style : 'tomorrow-night-bright';
	$root_path       = $root_path       ? $root_path       : './';
	$markdown        = $markdown        ? $markdown        : false;
	// =========================================================================
	// developer
	// =========================================================================
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	// =========================================================================
	$php_lib_path = dirname(__FILE__).'/../src/php/';
	set_include_path(get_include_path().PATH_SEPARATOR.$php_lib_path);
	require_once 'php-markdown/Michelf/MarkdownInterface.php';
	require_once 'php-markdown/Michelf/Markdown.php';
?>
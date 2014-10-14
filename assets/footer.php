<?php
	$contents = contents\replace($contents,array(
		'contents_line' => $contents_line,
		'markdown'      => $markdown
	),$preview_cnts);
	if($markdown) $contents = $md->transform($contents);
	echo $contents;
?>
</article>
<script src="<?php echo $root_path; ?>src/js/lib/jquery-2.1.1.min.js"></script>
<script src="<?php echo $root_path; ?>src/js/lib/highlight/highlight.pack.js"></script>
<script>
(function(){
	var i,l;
	var iframe;
	var previewCntWrap;
	var idoc;
	previewCnt = <?php echo $preview_cnts; ?>;
	i = 0;
	l = previewCnt.length;
	for(; i<l; i++){
		previewCntWrap = $('#preview'+i);
		previewCntWrap.html('<iframe scrolling="no" frameborder="0">');
		idoc = $('iframe',previewCntWrap)[0].contentWindow.document;
		idoc.write(previewCnt[i]);
	}

	var $codes = $('.code pre code');
	var $code  = null;
	i = 0;
	l = $codes.length;
	for(; i<l; i++){
		$code = $($codes[i]);
		$code.html($code.html().trim());
	}
	hljs.configure({
	});
	hljs.initHighlighting();
})()
</script>
<?php echo $add_footer; ?>
</body>
</html>
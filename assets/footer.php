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
<script src="<?php echo $root_path; ?>src/js/script.js"></script>
<script>
(function(){
	var i,l;
	previewCnt = <?php echo $preview_cnts; ?>;
	i = 0;
	l = previewCnt.length;
	for(; i<l; i++){
		var $previewCntWrap;
		var $iframe;
		var idoc;
		var idocWindow;
		$previewCntWrap = $('#preview'+i);
		$previewCntWrap.html('<iframe frameborder="0">');
		$iframe    = $('iframe',$previewCntWrap);
		idoc       = $('iframe',$previewCntWrap)[0].contentWindow.document;
		idoc.write(previewCnt[i]);
		$iframe.css('height',$(idoc).height()+'px');
	}
})()
</script>
<?php echo $add_footer; ?>
</body>
</html>
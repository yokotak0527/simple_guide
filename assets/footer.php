</article>
<script src="<?php echo $root_path; ?>src/js/lib/jquery-2.1.1.min.js"></script>
<script src="<?php echo $root_path; ?>src/js/lib/highlight/highlight.pack.js"></script>
<script>
(function(){
	var $codes = $('.code pre code');
	var $code  = null;
	var i      = 0;
	var l      = $codes.length;
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
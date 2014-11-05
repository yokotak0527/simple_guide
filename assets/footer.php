<?php
	$contents = contents\replace($contents,array(
		'contents_line' => $contents_line,
		'markdown'      => $markdown
	));
	if($markdown) $contents = $md->transform($contents);
	echo $contents;
?>
</article>
<script src="<?php echo $root_path; ?>src/js/lib/jquery-2.1.1.min.js"></script>
<script src="<?php echo $root_path; ?>src/js/lib/highlight/highlight.pack.js"></script>
<script src="<?php echo $root_path; ?>src/js/script.js"></script>
<?php echo $add_footer; ?>
</body>
</html>
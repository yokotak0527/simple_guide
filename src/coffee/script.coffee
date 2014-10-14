$codes = $('.code pre code')

for $code in $codes
	$code = $($code)
	$code.html($code.html().trim())

hljs.configure({
})
hljs.initHighlighting()
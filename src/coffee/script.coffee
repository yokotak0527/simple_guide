# ==============================================================================
# preview
# ==============================================================================
$(->
	$iframes = $('.preview > div > iframe')
	$.each($iframes,(i,obj)->
		win     = obj.contentWindow
		_loaded = null
		if(win.onload) then _loaded = win.onload
		win.onload = ->
			$iframe = $(obj)
			$iframe.css('height',$(win).height())
			setTimeout(((_$iframe,_$win)->
				return ->
					_$iframe.css('height',_$win.height())
					return
			)($iframe,$(win)),2000)
			return
		return
	)
	return
)

# ==============================================================================
# code
# ==============================================================================
$codes = $('.code pre code')

for $code in $codes
	$code = $($code)
	$code.html($code.html().trim())

hljs.configure({
})
hljs.initHighlighting()
# ==============================================================================
# preview
# ==============================================================================
$(->
	$iframes = $('.preview > div > iframe')
	heightChanged = (_win,_obj,_loaded)->
		return ->
			$html   = $('html',_win.document)
			$iframe = $(_obj)
			$iframe.css('height',$html.height())
			if(_loaded) then _loaded()
			return

	$.each($iframes,(i,obj)->
		win     = obj.contentWindow
		_loaded = null
		if(win.onload) then _loaded = win.onload

		win.onload = heightChanged(win,obj,_loaded)
		setTimeout(((_win,_obj,_loaded)->
			return->
				heightChanged(_win,_obj,_loaded)()
				return
		)(win,obj,_loaded),1000)

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

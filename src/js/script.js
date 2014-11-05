(function() {
  var $code, $codes, _i, _len;

  $(function() {
    var $iframes;
    $iframes = $('.preview > div > iframe');
    $.each($iframes, function(i, obj) {
      var win, _loaded;
      win = obj.contentWindow;
      _loaded = null;
      if (win.onload) {
        _loaded = win.onload;
      }
      win.onload = (function(_win, _obj, _loaded) {
        return function() {
          var $html, $iframe;
          $html = $('html', _win.document);
          $iframe = $(_obj);
          $iframe.css('height', $html.height());
          console.log($html.height());
          if (_loaded) {
            _loaded();
          }
        };
      })(win, obj, _loaded);
    });
  });

  $codes = $('.code pre code');

  for (_i = 0, _len = $codes.length; _i < _len; _i++) {
    $code = $codes[_i];
    $code = $($code);
    $code.html($code.html().trim());
  }

  hljs.configure({});

  hljs.initHighlighting();

}).call(this);

//# sourceMappingURL=script.js.map

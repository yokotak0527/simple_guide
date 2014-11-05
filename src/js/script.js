(function() {
  var $code, $codes, _i, _len;

  $(function() {
    var $iframes, heightChanged;
    $iframes = $('.preview > div > iframe');
    heightChanged = function(_win, _obj, _loaded) {
      return function() {
        var $html, $iframe;
        $html = $('html', _win.document);
        $iframe = $(_obj);
        $iframe.css('height', $html.height());
        if (_loaded) {
          _loaded();
        }
      };
    };
    $.each($iframes, function(i, obj) {
      var win, _loaded;
      win = obj.contentWindow;
      _loaded = null;
      if (win.onload) {
        _loaded = win.onload;
      }
      win.onload = heightChanged(win, obj, _loaded);
      setTimeout((function(_win, _obj, _loaded) {
        return function() {
          heightChanged(_win, _obj, _loaded)();
        };
      })(win, obj, _loaded), 1000);
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

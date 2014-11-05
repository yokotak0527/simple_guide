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
      win.onload = function() {
        var $iframe;
        $iframe = $(obj);
        $iframe.css('height', $(win).height());
        setTimeout((function(_$iframe, _$win) {
          return function() {
            _$iframe.css('height', _$win.height());
          };
        })($iframe, $(win)), 2000);
      };
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

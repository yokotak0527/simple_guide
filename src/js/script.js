(function() {
  var $code, $codes, _i, _len;

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

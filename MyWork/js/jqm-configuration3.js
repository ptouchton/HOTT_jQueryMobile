$(document).on('mobileinit',function(){
  $.extend($.mobile.loader.prototype.options,{
    text:'Loading Page... Please Wait',
    textVisible:true,
    theme:'b'
  });
  $.extend($.mobile,{
    pageLoadErrorMessage:'Sorry, we couldn\'t find your page.',
    pageLoadErrorMessageTheme:'b'
  });
});

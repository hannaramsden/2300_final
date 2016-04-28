$('.open').click(function(){
  $('#lightbox').fadeTo(1000, 1);
  $("#wrapper").css({'text-shadow': '0px 0px 10px #000'});
});

$('.close').click(function(){
  $('#lightbox').hide();
  $("#wrapper").css({'text-shadow': '0px 0px 0px #000'});
});
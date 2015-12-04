
$(function(){
  // Bind the resize event. When any .photo-4 img element's size changes, update its
  // corresponding info div.
  $('.photo-4 img').resize(function(){
    var elem = $(this);
    $('.newsletter-form').css('max-height', elem.height());
  });

  // Update all info divs immediately.
  $('.photo-4').resize();
});

$(document).ready(function(){
  var elementHeight = $('.photo-4 img').height();
  $('.newsletter-form').css('max-height', elementHeight);
});


/* ==========================
  Smooth Scroll
  ========================== */
$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();

  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});



$( ".portfolio--item__inner" ).hover(
    function() {
      $( this ).addClass( "no-filter" );
      $(this).find('.portfolio--title').css({"opacity": "0"});
    }, function() {
      $( this ).removeClass( "no-filter" );
      $('.portfolio--title').css({"opacity": "1"});
    }
);
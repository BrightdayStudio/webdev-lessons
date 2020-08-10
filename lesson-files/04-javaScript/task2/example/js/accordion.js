
$( document ).ready( function() {

  $(".accordion").on("click", ".title", function() {
   $(this).next().slideToggle();
  });


});

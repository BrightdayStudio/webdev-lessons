$( document ).ready( function() {

  var $trigger = $("#trigger");
  var $toggle = $(".topnav");

  $($trigger).click( function() {
    console.log("toggle");
    $toggle.toggleClass('show');
  });

});

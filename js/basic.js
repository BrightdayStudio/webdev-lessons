//vanilla

// function myFunction() {
//   var x = document.getElementById("topnav");
//   if (x.style.display === "none") {
//     x.style.display = "block";
//   } else {
//     x.style.display = "none";
//   }
// }
//


$( document ).ready( function() {


  var $trigger = $("#trigger");
  var $toggle = $(".topnav");
  var $nav = $("header nav");

  $($trigger).click( function() {
    console.log("toggle");
    $toggle.toggleClass('show');
  });


$('.text span').hide();

$('.text a').click( function() {
  $('.text span').show();
  $('.text a').hide();
});






$(".open").on("click", function(){
  $(".overlay, .modal").addClass("active");
});

$(".close, .overlay").on("click", function(){
   $(".overlay, .modal").removeClass("active");
});

$(document).keyup(function(e) {
  if (e.keyCode === 27) {
    $(".overlay, .modal").removeClass("active");
  }
});



});

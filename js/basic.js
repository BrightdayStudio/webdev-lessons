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
  console.log("ready");

  var $trigger = $("#trigger");
  var $toggle = $("#topnav");
  var $nav = $("header nav");

  $($trigger).click( function() {
    console.log("toggle");
    $toggle.toggleClass('show');
    $nav.toggleClass('navbg');
  });


});

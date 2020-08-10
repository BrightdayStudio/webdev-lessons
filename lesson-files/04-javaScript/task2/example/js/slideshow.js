$( document ).ready( function() {


$(".slides > div").slice(1).hide(); // hide everything except 1st image

setInterval(function() {
	$('.slides > div:first-child') //get first image
		.fadeOut(1000)
		.next()
		.fadeIn(1000)
		.end() //go back to 'slides'
		.appendTo('.slides'); // add the first slide (which faded out) to the end
}, 3000);



});

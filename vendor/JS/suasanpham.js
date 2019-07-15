$(document).ready(function() {
	$('.nav.child_menu').slideUp(400);
	$('.clickxo').click(function(event) {
		/* Act on the event */
		// var b = $(this).children('ul');
		// if (b[0].style.display === "block") {
  //           b[0].style.display = "none";
  //       } else {
  //           b[0].style.display = "block";
  //       }
  		$(this).children('.nav.child_menu').slideToggle(500);

        $(this).children('a').children('.fa-chevron-down').toggleClass('vaora');
	});;

	$('.admin').click(function(event) {
		/* Act on the event */
		$(this).next().toggleClass('hienra');
	});;

	// $('body,html').click(function(event) {
	// 	$('.user').removeClass('hienra');
	// });;
});
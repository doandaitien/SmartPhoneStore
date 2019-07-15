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
	// 
	// Danh sách sản phẩm
	$('.tt').slideUp();
	var trangthai = 1;
	$('.chitiet').click(function(event) {
		
		if(trangthai == 1){
			$('.tt').slideUp();
			$('._1spadmin').css({
				height: '173px'
			});;
			$('._1spadmin').removeClass('ronghon');
			$(this).next().next().next().next('.tt').slideToggle();
			$(this).parents().parents('._1spadmin').toggleClass('ronghon');
			trangthai = 2;
		}
		else if(trangthai == 2) {
			var kiot = $('._1spadmin');
			$(this).next().next().next().next('.tt').slideUp();
			$(this).parents().parents('._1spadmin').removeClass('ronghon');
			trangthai = 1;
		}
		
		// $('.tt').slideUp();

	});;
});
$(document).ready(function() {
	$('.thtt').click(function(event) {
        console.log("aaa");
		$('.thanhtoan').addClass('hienthira');
		$('.nenxam').addClass('ra');
	});
	$('.nenxam').click(function(event) {
		$('.thanhtoan').removeClass('hienthira');
		$('.nenxam').removeClass('ra');
	});

	$('.nutclick').click(function(event) {
		$('nav').toggleClass('tangchieucaonav');
	});
	$('.sp').hover(function() {
		$('.smartphone').css({
			opacity: 1,
			visibility: 'visible'
		});
	}, function() {
		$('.smartphone').css({
			opacity: 0,
			visibility: 'hidden'
		})
	});
	var trangthai="menumaudoduoi100";
	var menu = document.querySelector('.navbar');
	
	// javascript
	// 
	window.addEventListener("scroll",function(){
        var chieucao = pageYOffset;
        if(chieucao > 100){
            if(trangthai=="menumaudoduoi100")
            {
                menu.classList.add('menufix');
                trangthai="menumaudentren100";
                $('.giohangchitiet').addClass('ghfix');
            }
        }
        else{
            if(trangthai=="menumaudentren100")
            {
 
                menu.classList.remove('menufix');
                $('.giohangchitiet').removeClass('ghfix');
                trangthai="menumaudoduoi100";
            }
        }
    })
    // sử lý nút đi lên hiện ra
    var tt = "nhohon500";
    window.addEventListener("scroll",function(){
        var cc = pageYOffset;
        if(cc > 500)
    	{
    		if (tt == "nhohon500") 
    		{
    			$('.nutdilen').addClass('hiennut');
    			tt = "lonhon500";
    		}
    	}
    	else
    	{
    		if(tt = "lonhon500")
    		{
    			$('.nutdilen').removeClass('hiennut');
    			tt = "nhohon500";
    		}
    	}
    })
    $('.nutdilen').click(function(event) {
    	$('body,html').animate({scrollTop:0}, 900);
    });;
    // end nút đi lên
    //end js
    $('._1khoi').hover(function() {
    	
    	$(this).children('.card').children('.imgProduct').css({
    		transform: 'translateY(-15px)'
    	});
    	$(this).children('.card').children('.card-block').children('.nameProduct').css({
    		color: 'blue'
    	});

    }, function() {
    	
    	$(this).children('.card').children('.imgProduct').css({
    		transform: 'translateY(0px)'
    	});
    	$(this).children('.card').children('.card-block').children('.nameProduct').css({
    		color: 'black'
    	});
    });

    // var heightProduct = $('.product').offset().top - 146;
    var heightContact = $('#contact').offset().top - 146;
    // console.log(heightProduct);
    // $('.smp').click(function(event) {
    // 	event.preventDefault();
    // 	$('body,html').animate({scrollTop: heightProduct}, 900);
    // });

    $('.ct').click(function(event) {
    	event.preventDefault();
    	$('body,html').animate({scrollTop: heightContact}, 900);
    });

    // xử lý hiện đăng ký
    $('.chuyensangdk').click(function(event) {
    	event.preventDefault();
    	$('.dangnhap').addClass('divao');
    	$('.dangky').addClass('dira');
    });;

    $('.thongtinnguoidung').hover(function() {
        $('.tttk').addClass('tttkra');
    }, function() {
        $('.tttk').removeClass('tttkra');
    });;
    $('.tttk').hover(function() {
        $('.tttk').addClass('tttkra');
    }, function() {
        $('.tttk').removeClass('tttkra');
    });;

    // di chuột giỏ hàng
    $('.giohang').hover(function() {
        /* Stuff to do when the mouse enters the element */
        $('.giohangchitiet').addClass('giohangra');
    }, function() {
        /* Stuff to do when the mouse leaves the element */
        $('.giohangchitiet').removeClass('giohangra');
    });;

    $('.giohangchitiet').hover(function() {
        /* Stuff to do when the mouse enters the element */
        $('.giohangchitiet').addClass('giohangra');
    }, function() {
        /* Stuff to do when the mouse leaves the element */
        $('.giohangchitiet').removeClass('giohangra');
    });;

    $('.them').click(function(event) {
        /* Act on the event */
        setTimeout(hienradi, 700);
        setTimeout(toradi,1000);
    });

    var hienradi = function(){
        $('.thanhcong').addClass('hienradi');
        
        setTimeout(function(){
            $('.thanhcong').removeClass('hienradi');
            $('.giohang').removeClass('giohangtora');
        }, 700);
    };

    var toradi = function () {
        $('.giohang').addClass('giohangtora');
        setTimeout(function(){
            $('.giohang').removeClass('giohangtora');
        }, 1000);
    }


});
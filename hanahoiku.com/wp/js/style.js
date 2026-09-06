/* ===============================================
# header
=============================================== */


$(function() {
  var $win = $(window),
      $header = $('.header');

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > 200 ) {
      $('.header').addClass('on');
    } else {
      $('.header').removeClass('on');
    }
  });
});



/* ===============================================
# footer
=============================================== */

$(function() {
  //$('.subimg02 .block').css("opacity", "1");
  $(window).scroll(function() {
    $(".kengaku").each(function() {
      var imgPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight / 100) {
        $(".footer-btn").addClass("on");
      } else {
        $(".footer-btn").removeClass("on");
      }
    });
  });
});


/* ===============================================
# 要素高さ統一
=============================================== */

$(function() {
  $('.item').matchHeight();
});


/* ===============================================
# スライドメニュー
=============================================== */

var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		menuTop = document.getElementById( 'cbp-spmenu-s3' ),
		menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
		showLeft = document.getElementById( 'showLeft' ),
		showRight = document.getElementById( 'showRight' ),
		body = document.body;

showLeft.onclick = function() {
	classie.toggle( this, 'active' );
	classie.toggle( menuLeft, 'cbp-spmenu-open' );
	disableOther( 'showLeft' );
};
showRight.onclick = function() {
	classie.toggle( this, 'active' );
	classie.toggle( menuRight, 'cbp-spmenu-open' );
	disableOther( 'showRight' );
};

function disableOther( button ) {
	if( button !== 'showLeft' ) {
		classie.toggle( showLeft, 'disabled' );
	}
	if( button !== 'showRight' ) {
		classie.toggle( showRight, 'disabled' );
	}
}


$(function() {
  $(".header_school_nav dt").on("click", function() {
    $(this).next().slideToggle();
    $(this).toggleClass("active");
  });
  $("#acMenu dt").on("click", function() {
    $(this).next().slideToggle();
  });
  $("#tabMenu li a").on("click", function() {
    $("#tabBoxes div").hide();
    $($(this).attr("href")).fadeToggle();
    return false;
  });
});

/* ===============================================
# フェードアップ
=============================================== */

$(window).on('load',function(){

	// fade-up
    $(window).scroll(function (){
        $('.fade-up').each(function(){
            var POS = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();

            if (scroll > POS - windowHeight){
                $(this).css({
                        'opacity':'1',
                        'transform':'translateY(0)',
                        '-webkit-transform':'translateY(0)',
                        '-moz-transform':'translateY(0)',
                        '-ms-transform':'translateY(0)'
                });
            } else {
                $(this).css({
                        'opacity':'0',
                        'transform':'translateY(70px)',
                        '-webkit-transform':'translateY(70px)',
                        '-moz-transform':'translateY(70px)',
                        '-ms-transform':'translateY(70px)'
                });
            }
        });
    });
});


/* ===============================================
# faq
=============================================== */


$(function(){//HTMLを読み込んで、
$(".faq .block h4").click(function() {
$(this).next().toggle(500);
});
});



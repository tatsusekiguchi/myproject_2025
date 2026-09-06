/* Javascript */

/* 切り替え幅 */
var replaceWidth = 1025;


//pc、sp判定
function reseHeaderMenu(){

    if(parseInt($(window).width()) >= replaceWidth) {

        $("body").removeClass("sp");
        $("body").addClass("pc");
        $("nav").attr("style","");

    } else {

        $("body").removeClass("pc");
        $("body").addClass("sp");

    }

}

//幅変更時pc、sp判定
$(window).resize(function(){reseHeaderMenu();});

//リサイズもしくはロードされた時にReLayout呼び出し
$(window).on("load resize", ReLayout);

function ReLayout() {
    var _width = $(window).width(); //画面サイズ取得
     
    if(_width >= 1025) {
        //幅に応じて読み込む画像を変更する
        changeImg('.switch');
    }
     
    else {
        changeImg('.switch');
    }

}

$(document).ready(function(){

    //pc、sp判定
    reseHeaderMenu();

    //スクロール位置に応じてナビ固定
    setHeaderFixed();

    if($("#top").length > 0) {

        //キービジュアルのスライダー設定
        keyvSlider();
    
    }

    //スマートフォンメニューモーダル
    menuBtnToggle();

    //telリンクをスマートフォン端末以外では無効にする
    setTelLink();

    //ファイルアップロードの設定
    setFileUpload();

    //ページネーション表示制御
    setPagenationDisp();
    
});

//======================================================================================================
// changeImg( )
// 機能  ：幅に応じて読み込む画像を変更する
// 引数  ：target→image
// 戻り値：なし
//======================================================================================================
function changeImg(target) {

    var $setElem = $(target),
    pcName = '_pc',
    spName = '_sp',
    replaceWidth = 1025;

    $setElem.each(function(){
        var $this = $(this);
        function imgSize(){
            var windowWidth = parseInt($(window).width());
            if(windowWidth >= replaceWidth) {
                $this.attr('src',$this.attr('src').replace(spName,pcName));
            } else if(windowWidth < replaceWidth) {
               $this.attr('src',$this.attr('src').replace(pcName,spName));
            }
        }
        $(window).resize(function(){imgSize();});
        imgSize();
    });
}

//======================================================================================================
// setHeaderFixed( )
// 機能  ：ページスクロール時の処理。ナビ固定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setHeaderFixed() {
    var scroll,
        winTop;
        
    $(window).on('load resize',function(){

        //スクロールするたびに実行
        $(window).scroll(function () {
            scroll = $('header').offset().top + $('header').outerHeight();
            winTop = $(this).scrollTop();
            //スクロール位置がnavの位置より下だったらクラスfixedを追加
            if (winTop > scroll) {
                $('nav').addClass('fixed');
            }
            else if (winTop < scroll) {
                $('nav').removeClass('fixed');
            }
        });
    
    });
    
}

//======================================================================================================
// keyvSlider( )
// 機能  ：キービジュアルのスライダー設定
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function keyvSlider(){

    if($("#top #topKv").length){

        var HEADER_ELEM = $('#topKv');
        var FADE_SPEED = 1500;
        var SWITCH_DELAY = 5000;

        // 要素作成
        if(!HEADER_ELEM.children().hasClass('kvBox')){
            var keyBoxElem = '';
            keyBoxElem += '<div class="kvBox">';
            keyBoxElem += '<div class="kvBg kv01"></div>';
            keyBoxElem += '<div class="kvBg kv02"></div>';
            keyBoxElem += '<div class="kvBg kv03"></div>';
            keyBoxElem += '</div>';
            HEADER_ELEM.append(keyBoxElem);
        }

        var keyBox = '.kvBox';
        $(keyBox + ' .kvBg').css({opacity:'0'});
        $(keyBox + ' .kvBg:first').stop().animate({opacity: '1'}, FADE_SPEED);
        setInterval(function(){
            $(keyBox + ' .kvBg:first').animate({opacity: '0'}, FADE_SPEED).nextAll('.kvBg:first').animate({opacity: '1'}, FADE_SPEED).end().appendTo(keyBox);
        }, SWITCH_DELAY);
    
    }
    else {

        var HEADER_ELEM = $('#topKv');

        // 要素作成
        if(!HEADER_ELEM.children().hasClass('kvBox')){
            var keyBoxElem = '';
            keyBoxElem += '<div class="kvBox">';
            keyBoxElem += '<div class="kvBg kv01"></div>';
            keyBoxElem += '</div>';
            HEADER_ELEM.append(keyBoxElem);
        }

    }
}

//======================================================================================================
// spModal( )
// 機能  ：スマートフォンメニューモーダル
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function menuBtnToggle() {

    $('#menuBtn').click(function() {
        $(this).toggleClass('active');
        $('nav').toggleClass('active');
        $('nav').fadeToggle('middle');
        return false;
    });

    $(window).resize(function() {
        var windowWidth = parseInt(window.innerWidth);
        if (windowWidth >= replaceWidth) {
            $('#menuBtn').removeClass('active');
            $('nav').removeClass('active');
            $('nav').removeAttr('style');
        }
    });

}



//======================================================================================================
// setTelLink( )
// 機能  ：telリンクをスマートフォン端末以外では無効にする
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setTelLink() {
    var ua = navigator.userAgent.toLowerCase();
    var isMobile = /iphone/.test(ua)||/android(.+)?mobile/.test(ua);

    if (!isMobile) {
        $('a[href^="tel:"]').on('click', function(e) {
            e.preventDefault();
        });
    }
}

//======================================================================================================
// setFileUpload( )
// 機能  ：ファイルアップロードボタン変更時、擬似タグに選択した値を反映させる。
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setFileUpload() {

    //ファイルアップロード
    $('.inputFile input[type=file]').on('change', function() {
        var file = $(this).prop('files')[0];
        $(this).parents('.upBox').find('.filename').addClass('changed');
        $(this).parents('.upBox').find('.filetxt').html(file.name);
    });
    $('.filename .delete').on('click', function() {
        $(this).parents('.upBox').find('input[type=file]').val('');
        //file.value = "";
        $(this).parent().find('.filetxt').html('ファイルが選択されていません。');
        $(this).parent().removeClass('changed');
    });

}


//======================================================================================================
// setPagenationDisp( )
// 機能  ：ページネーション表示制御
// 引数  ：なし
// 戻り値：なし
//======================================================================================================
function setPagenationDisp() {

    var index = $('.pagination li').index($('.current'));  
   
    if(index == 2){
         
         $('.pagination li:nth-child(-n+2)').hide();

    }

}

function reductionHeader(){
    $('header').addClass('scroll_header').removeClass('origin_header').addClass('reduc_header');
    $('#logo').addClass('reduc_logo');
    $('header>h1').addClass('reduc_h1');
    $('header>p').addClass('reduc_p');
   /* $('header>nav a').addClass('reduc_nav');
    $('#menu_icon').addClass('reduc_nav');*/
    $('#menu_ul').addClass('reduc_show');
}

function aggrHeader(){
    $('header').addClass('origin_header').removeClass('scroll_header').removeClass('reduc_header');
    $('#logo').removeClass('reduc_logo');
    $('header>h1').removeClass('reduc_h1');
    $('header>p').removeClass('reduc_p');
    /*$('header>nav a').removeClass('reduc_nav');
    $('#menu_icon').removeClass('reduc_nav');*/
    $('#menu_ul').removeClass('reduc_show')
}

//si on scroll on affiche le header reduc
$(window).on('scroll',function(){
    stop = Math.round($(window).scrollTop());

    if (stop > 0) {
        reductionHeader();
    } else {
        if($('#menu_ul').hasClass('show')){
            reductionHeader();
        } else{
            aggrHeader();
        }
    }
});

// menu mobile
$('#menu_icon').click(function(){
    if ($('#menu_ul').attr('data') === 'on'){
        $('#menu_icon i').removeClass('fa-times').addClass('fa-bars');
        $('#menu_ul').fadeToggle("slow", function(){
            $('#menu_ul').attr('data', 'off');
            $('#menu_ul').toggleClass('show');
            reductionHeader();
        });
    } else{
        $('#menu_icon i').removeClass('fa-bars').addClass('fa-times');
        $('#menu_ul').toggleClass('show');
        reductionHeader();
        $('#menu_ul').fadeToggle("slow", function(){
            $('#menu_ul').attr('data', 'on');
        });
    }
});

// si on a déjà scrollé et qu'on actualise on affiche le header reduc
scroll_val = Math.round($(window).scrollTop());
if(scroll_val !== 0){
    reductionHeader();
}

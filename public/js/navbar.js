// si on a déjà scrollé et qu'on actualise on affiche le header reduc
scroll_val = Math.round($(window).scrollTop());
if(scroll_val !== 0){
    $('header').addClass('scroll_header').removeClass('origin_header').addClass('reduc_header');
    $('#logo').addClass('reduc_logo');
    $('header>h1').addClass('reduc_h1');
    $('header>p').addClass('reduc_p');
    $('header>nav a').addClass('reduc_nav');
    $('#menu_icon').addClass('reduc_nav');
    $('#menu_ul').addClass('reduc_show');
}

//si on scroll on affiche le header reduc
$(window).on('scroll',function(e){

    stop = Math.round($(window).scrollTop());

    if (stop > 0) {
        $('header').addClass('scroll_header').removeClass('origin_header').addClass('reduc_header');
        $('#logo').addClass('reduc_logo');
        $('header>h1').addClass('reduc_h1');
        $('header>p').addClass('reduc_p');
        $('header>nav a').addClass('reduc_nav');
        $('#menu_icon').addClass('reduc_nav');
        $('#menu_ul').addClass('reduc_show');
    } else {
        $('header').addClass('origin_header').removeClass('scroll_header').removeClass('reduc_header');
        $('#logo').removeClass('reduc_logo');
        $('header>h1').removeClass('reduc_h1');
        $('header>p').removeClass('reduc_p');
        $('header>nav a').removeClass('reduc_nav');
        $('#menu_icon').removeClass('reduc_nav');
        $('#menu_ul').removeClass('reduc_show')
    }
});

// menu mobile
$('#menu_icon').click(function(){
    console.log('test');
    $('#menu_ul a').toggleClass('menu_mobile');
    $('#menu_ul').toggleClass('show');
});

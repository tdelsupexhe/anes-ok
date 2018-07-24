// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var mainbottom = $('.content').offset().top;

// on scroll,
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if (stop > mainbottom) {
        $('header').addClass('scroll_header').removeClass('origin_header').addClass('reduc_header');
        $('#logo').addClass('reduc_logo');
        $('header>h1').addClass('reduc_h1');
        $('header>p').addClass('reduc_p');
        $('header>nav a').addClass('reduc_nav');
    } else {
        $('header').addClass('origin_header').removeClass('scroll_header').removeClass('reduc_header');
        $('#logo').removeClass('reduc_logo');
        $('header>h1').removeClass('reduc_h1');
        $('header>p').removeClass('reduc_p');
        $('header>nav a').removeClass('reduc_nav');
    }

});
$( document ).ready(function() {

    // ***************** HOME PAGE *****************

    // ***************** image des 3 anes
    $('#image_decouvrir').hover(function(){
        $('#anes_decouvrir').animate({
            width: "0%"
        }, 1500).animate({
            width: "100%"
        }, 1500);
        console.log('test');
    });

    // ***************** photos des proprios
    $("#thierry").flip({
        trigger: 'hover'
    });

    $("#mth").flip({
        axis: 'x',
        trigger: 'hover'
    });

    // ***************** social logo
    $("#facebook_logo").flip({
        axis: 'x',
        trigger: 'hover'
    });

    $("#twitter_logo").flip({
        axis: 'x',
        trigger: 'hover'
    });

    $("#instagram_logo").flip({
        axis: 'x',
        trigger: 'hover'
    });

    // ************* effect sur les prix
    // noinspection JSJQueryEfficiency
    $('#prix01').hover(function () {
        console.log('test');
        $(this).effect("bounce", { times:5 }, 800);
    });

    $('#prix02').hover(function () {
        console.log('test');
        $(this).effect("bounce", { times:5 }, 800);
    });

    $('#prix03').hover(function () {
        console.log('test');
        $(this).effect("bounce", { times:5 }, 800);
    });
});


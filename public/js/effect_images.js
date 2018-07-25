$( document ).ready(function() {

    // ***************** HOME PAGE *****************

    // ***************** image des 3 anes
    $('#image_decouvrir').hover(function () {
        $('#anes_decouvrir').effect("bounce", { direction:'up', times:5 }, 800);
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
    $('#prix01').hover(function () {
        $(this).effect("bounce", { times:5 }, 800);
    });

    $('#prix02').hover(function () {
        $(this).effect("bounce", { times:5 }, 800);
    });

    $('#prix03').hover(function () {
        $(this).effect("bounce", { times:5 }, 800);
    });

    // ************* thumbnail
    $('[id^=thumbnails_]').on('click','img', function(e){
        var num_id = ($(this).attr("data-id"));
        $('#large_image_' + num_id).attr('src',$(this).attr('src').replace('thumb','large'));
    });
});


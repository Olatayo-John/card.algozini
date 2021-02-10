$(document).ready(function () {
    $('.starone').mouseover(function () {
        $(".startwo,.starthree,.starfour,.starfive").removeClass('fas').addClass('far').css('color', 'black');
        $(".starone").removeClass('far').addClass('fas').css('color', 'gold');
        $(".star_value").val("1");
    });

    $('.startwo').mouseover(function () {
        $(".starthree,.starfour,.starfive").removeClass('fas').addClass('far').css('color', 'black');
        $(".starone,.startwo").removeClass('far').addClass('fas').css('color', 'gold');
        $(".star_value").val("2");
    });

    $('.starthree').mouseover(function () {
        $(".starfour,.starfive").removeClass('fas').addClass('far').css('color', 'black');
        $(".starone,.startwo,.starthree").removeClass('far').addClass('fas').css('color', 'gold');
        $(".star_value").val("3");
    });

    $('.starfour').mouseover(function () {
        $(".starfive").removeClass('fas').addClass('far').css('color', 'black');
        $(".starone,.startwo,.starthree,.starfour").removeClass('far').addClass('fas').css('color', 'gold');
        $(".star_value").val("4");
    });

    $('.starfive').mouseover(function () {
        $(".starone,.startwo,.starthree,.starfour,.starfive").removeClass('far').addClass('fas').css('color', 'gold');
        $(".star_value").val("5");
    });

    $(document).on('click', '.closemodalbtn', function () {
        $('.e_mobile').hide();
        $('.msgmodal').modal('hide');
    });

});
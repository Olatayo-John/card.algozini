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

    $(document).on('click', '.fedbk_btn', function () {
        var star_value = $(".star_value").val();

        if (star_value == "" || star_value == null) {
            $(".feedback_star").css("border", "1px solid red");
            return false;
        } else {
            $(".feedback_star").css("border", "1px solid #ced4da");
        }
    });

    $(document).on('click', '.closemodalbtn', function () {
        $('.e_mobile').hide();
        $('.msgmodal').modal('hide');
    });

});
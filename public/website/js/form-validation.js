$(function () {
    $('#modalsignup').on('submit', function (e) {
        e.preventDefault();
        var a = $('#otp').val();
        var b = $('#otpacual').val();
        if (b == a) {
            $.ajax({
                type: 'post',
                url: 'http://13.232.1.116/user/applicationrequest',
                data: {
                    amount: $('#fieldAmount').val(),
                    full_name: $('#fieldFName').val(),
                    city: $('#city').val(),
                    mobile: $('#mobile').val(),
                    email: $('#email').val(),
                    school: $('#fieldSchool').val(),
                    title: $('#title').val()
                },
                beforeSend: function () {
                    $('.loader').show();
                },
                success: function (data) {
                    $('.loader').hide();
                    //$("#demo").append('');
                    var man = data.message;
                    //$("#demo").append(man);
                    $('form').trigger("reset");
                    $('#popup1').hide();
                    //$(".modal-overlay").remove();

                    var appendthis = ("<div class='modal-overlay js-modal-close'></div>");
                    $('#thankyoupopup').show();


                    e.preventDefault();
                    $("body").append(appendthis);

                    $(".modal-overlay").fadeTo(500, 0.7);

                    $('#thankyoupopup').show();
                    var modalBox = $(this).attr('popup1');
                    $('#' + modalBox).fadeIn($(this).data());

                    $(".js-modal-close, .modal-overlay").click(function() {
                        $(".modal-box, .modal-overlay").fadeOut(500, function() {
                    $(".modal-overlay").remove();
                        });

                    });

                    $(window).resize(function() {
                        $(".modal-box").css({
                            top: ($
                            (window
                            ).height() - $(".modal-box").outerHeight()) / 2,
                            left: ($(window).width() - $(".modal-box").outerWidth()) / 2
                        })
                        ;
                    });

                    $(window).resize();
                    //$("#demo").delay(3500).fadeOut(600);



                }

            });


        } else {
            $('.loader').hide();
            $("#otpdemo").append('Please Enter Correct OTP');
        }

    });
    $('#signup').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'http://13.232.1.116/user/sendotp',
            data: {mobilenumber: $('#mobile').val()},
            beforeSend: function () {
                $('.loader').show();
            },
            success: function (data) {
                $('.loader').hide();
                if (data.success == 0) {
                    $("#demo").empty();
                     var man = data.message;
                    var appendthis = ("<div class='modal-overlay js-modal-close'></div>");
                    $('#alreadypopup').show();
                    e.preventDefault();
                    $("body").append(appendthis);
                    $(".modal-overlay").fadeTo(500, 0.7);
                    $('#alreadypopup').show();
                    var modalBox = $(this).attr('popup1');
                    $('#' + modalBox).fadeIn($(this).data());
                    $(".js-modal-close, .modal-overlay").click(function() {
                        $(".modal-box, .modal-overlay").fadeOut(500, function() {
                            $(".modal-overlay").remove();
                        });

                    });
                    $(window).resize(function () {
                        $(".modal-box").css({
                            top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
                            left: ($(window).width() - $(".modal-box").outerWidth()) / 2
                        });
                    });

                    $(window).resize();



                } else {
                    var man = data.data.otp;
                    $('#otpacual').val(man);
                    var appendthis = ("<div class='modal-overlay js-modal-close'></div>");
                    $('#popup1').show();
                    e.preventDefault();
                    $("body").append(appendthis);
                    $(".modal-overlay").fadeTo(500, 0.7);
                    $('#popup1').show();
                    var modalBox = $(this).attr('popup1');
                    $('#' + modalBox).fadeIn($(this).data());
                    $(window).resize(function () {
                        $(".modal-box").css({
                            top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
                            left: ($(window).width() - $(".modal-box").outerWidth()) / 2
                        });
                    });

                    $(window).resize();
                }
            }
        });

    });
});




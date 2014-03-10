function heroContent() {
    var winHeight = $(window).innerHeight();

    // @ screen width => 992px
    if ($(window).width() >= 992) {
        var heroContentMargin = -($('.hero-content').height() / 2);

        $('.hero-content').css('margin-top', heroContentMargin);
    }

    // @ screen width => 768px and <= 991px
    else if ($(window).width() >= 768 && $(window).width() <= 991) {
        $('.hero-content').css('margin-top', '0');

        var heroContentHeight = $('.hero-content-wrap').height();

        if ((winHeight - 100) <= heroContentHeight) {
            $('.hero-content-wrap').css('margin', '110px 0 60px');
        }

        else {
            var heroContentMargin = (50 + ((winHeight - 100) - heroContentHeight)) / 2;

            $('.hero-content-wrap').css('margin-top', heroContentMargin);
        }
    }

    // @ screen width <= 767px
    else {
        $('.hero-content').css('margin-top', '0');

        var heroContentHeight = $('.hero-content-wrap').height();

        if ((winHeight - 50) <= heroContentHeight) {
            $('.hero-content-wrap').css('margin', '110px 0 60px');
        }

        else {
            var heroContentMargin = (50 + (winHeight - heroContentHeight)) / 2;

            $('.hero-content-wrap').css('margin-top', heroContentMargin);
        }
    }
    ;
}
;

    /* CLOSE NAVBAR TOGGLE WHEN NAVBAR LINK CLICKED */
    function navbarToggle() {
        if ($(window).width() <= 767) {
            $('.nav-style > li > a').on('click', function() {
                $('.navbar-toggle').click();
            });
        }
    }
    ;

/* REFRESH SCROLLSPY */
function scrollSpyRefresh() {
   
}
;

$(document).ready(function() {

    // launch the custom functions
    heroContent();
    navbarToggle();



    /* INIT PAGE SCROLLING USING JQUERY SCROLLTO-LOCALSCROLL PLUGIN */
    $('html').localScroll();
    $('a[href="#"], .togglize-btn').unbind('click'); // fix localscroll effect


    /* INIT SKILL CIRCLE GRAPHIC WITH JQUERY KNOB PLUGIN */
    var dialColor = $('a').css('color'); // get color from link color

    $(".dial").knob({
        'fgColor': '#39b3d7',
        'lineCap': 'round',
        'thickness': '.2',
        'bgColor': '#fafafa',
        'readOnly': 'readonly'
    });


    /* INIT ACCORDION STATUS STYLE */
    $('.togglize-btn').addClass('collapsed'); // add collapsed class to toggle button

    $('.togglize-btn').each(function() {
        var toggleBtn = $(this);

        // remove collapsed class if toggle initially active
        if (toggleBtn.siblings().hasClass('in')) {
            toggleBtn.removeClass('collapsed');
            toggleBtn.addClass('open');
        }

        else {
            toggleBtn.removeClass('open');
        }
        ;

        toggleBtn.on('click', function() {
            if ($(this).hasClass('collapsed') !== true) {
                $(this).removeClass('open');
            }

            else {
                $(this).addClass('open');
            }
        });
    });



    /* CONTACT FORM STUFFS */
    $('#contact-form').parsley({// bind parsley jquery plugin for client-side validation
        showErrors: false,
        listeners: {
            onFieldSuccess: function(elem) {
                elem.siblings('span.success-mark').css('opacity', '1');
                elem.siblings('span.error-mark').css('opacity', '0');
            },
            onFieldError: function(elem) {
                elem.siblings('span.success-mark').css('opacity', '0');
                elem.siblings('span.error-mark').css('opacity', '1');
                $('.contact-reset').fadeIn(250);
            }
        }
    });

    // write up validation marker on fly
    $('#contact-form').find('.parsley-validated').after('<span class="success-mark"><i class="fa fa-check-circle"></i></span><span class="error-mark"><i class="fa fa-times-circle"></i></span>');

    // show contact form reset button up upon input activity
    $('#contact-form input, #contact-form textarea').bind('input', function() {
        if ($(this).val()) {
            $('.contact-reset').fadeIn(250);
        }
    });

    // reset button function
    $('.contact-reset').click(function(e) {
        e.preventDefault();

        $('#contact-form')[0].reset();
        $('.contact-reset').fadeOut(250);
        $('.success-mark, .error-mark').css('opacity', '0');
        $('#contact-sending-error, #contact-sending-success').fadeOut(250);
    });

    // fade out message sending notification on scroll
    $(window).bind('scroll', function() {
        $('#contact-sending-error, #contact-sending-success').fadeOut(250);
    });

    // message submit function
    $('#contact-form').submit(function(e) {
        var contactForm = $(this);

        // fade out error/success message
        $('#contact-sending-error, #contact-sending-success').fadeOut(250);

        // check if the data is valid
        if (!$(this).parsley('isValid')) {

            // if not valid, don't submit
            return false
        }

        else {

            // if yes, do the following
            $('#contact-sending').fadeIn(250);

            $.ajax({
                type:"POST",
                url: "mail",
                data: contactForm.serialize(),
                success: function(response) {
                    response = $.trim(response);

                    $('#contact-sending').delay(1000).fadeOut(250);

                    if (response == "success") {

                        $('#contact-sending-success').delay(1000).fadeIn(250);
                        $('#contact-form')[0].reset();
                        $('.contact-reset').fadeOut(250);
                        $('.success-mark, .error-mark').css('opacity', '0');
                    }

                    else {
                        $('#contact-sending-error').delay(1000).fadeIn(250);
                    }
                }
            });
        }

        // prevent default submit
        return false
    });

    /* FIRE SCROLLSPY REFRESH RIGHT AFTER USER STOPS SCROLLING */
    var timer;

    var refresh = function() {
        scrollSpyRefresh();
    };

    $(window).bind('scroll', function() {
        clearTimeout(timer);
        timer = setTimeout(refresh, 250);
    });

});

// do the following function on window load
$(window).bind('load', function() {
    $('#contact-form')[0].reset(); // reset contact form
    scrollSpyRefresh();
});

// do the following function on window resize
$(window).on('resize', function() {
    heroContent();
    navbarToggle();
    scrollSpyRefresh();
});
function initialize() {
    var myLatlng = new google.maps.LatLng(6.172771, -75.333511);
    var mapOptions = {
        zoom: 16,
        center: myLatlng,
        scrollwheel: false

    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Mi oficina'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);  
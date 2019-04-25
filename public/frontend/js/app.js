'use strict'

let prevScrollpos = window.pageYOffset;
let boxShadowRgba = [255, 0];
let bgRgba = '';
let rgbaShadow = "rgba(" + boxShadowRgba[0] + "," + boxShadowRgba[0] + "," + boxShadowRgba[0] + "," + boxShadowRgba[1] + ") 0px 0px 40px 0px ";
let rgbaBg = '';
let _percent = ",0.0";
let _percentBg = '0.';


//animate funch
function animateScrollFunch() {
    let currentScrollPos = window.pageYOffset;

    /*Animate Nav*/

    boxShadowRgba[0] -= currentScrollPos;



    if (currentScrollPos >= 97) {
        _percent = ",0.";
        bgRgba = 0.98;
        _percentBg = '';
        boxShadowRgba[1] = 1;
        $('.ham').addClass('scroll');
        $('#logo').attr('src', './assets/images/logo-2.png')
        $('.nav-link').attr('style', 'color: #2c3142 !important');
        $('.nav-link').addClass('scroll');
        $('.btn-nav').addClass('scroll');
        $('.navbar').addClass('position-fixed');
        $('.navbar').removeClass('mt-3');
        $('.box-info ').addClass('d-none');
        $('.navbar').addClass('scroll');

    } else {
        _percent = ",0.0";
        _percentBg = '0.'
        bgRgba = currentScrollPos / 100;
        boxShadowRgba[1] = currentScrollPos
        $('#logo').attr('src', './assets/images/logo.png')
        $('.nav-link').attr('style', '');
        $('.nav-link').removeClass('scroll');
        $('.ham').removeClass('scroll');
        $('.btn-nav').removeClass('scroll')
        $('.navbar').removeClass('position-fixed');
        $('.box-info ').removeClass('d-none')
        $('.navbar').removeClass('scroll');
    }



    rgbaShadow = "rgba(" + boxShadowRgba[0] + "," + boxShadowRgba[0] + "," + boxShadowRgba[0] + _percent + boxShadowRgba[1] + ") 0px 0px 40px 0px ";
    rgbaBg = "rgba(247, 248, 249," + bgRgba + ")";



    $('.navbar').css({
        "box-shadow": rgbaShadow,
        "background-color": rgbaBg,

    })

}
/*window Scroll*/



window.onscroll = function () {

    /*End Animate Nav*/

    animateScrollFunch()
}

/*End Window Scroll*/


// paralax
// var postion = document.getElementById('p-mouse');

// postion.addEventListener('mouseover', function (e) {
//     console.log(e)
// })


/**
 * Start: Maps
 */

var map;
var direction = "https://www.google.com/maps/place/APL+Tower/@-6.1746938,106.7896699,17z/data=!4m6!3m5!1s0x2e69f65f73d4c9cb:0x144ec1e5914e9cc3!4b1!8m2!3d-6.1751258!4d106.7900132";
var contentString = '<strong>PT. Inti Cipta Wismaya</strong><p style="text-align:center;"><br><a href="' + direction + '" target="_blank">Get Direction</a></p>';

function initMap() {
    var latLng = {
        lat: -6.174944,
        lng: 106.790031
    };

    map = new google.maps.Map(document.getElementById('map'), {

        center: latLng,
        zoom: 17,

        mapTypeControl: false,

        scaleControl: false,

        streetViewControl: false,

        zoomControl: false,

        fullscreenControl: false
    });

    var icon = {
        url: 'frontend/icons/svg/marker.svg', // url
        size: new google.maps.Size(30, 30),
        scaledSize: new google.maps.Size(30, 30), // scaled size
        labelOrigin: new google.maps.Point(20, 40)
    };

    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        icon: icon,
        label: {
            text: "APL Tower",
            color: "#58595B",
            fontSize: "12px",
            fontWeight: "bold"
        }
    });

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });

}


// ?End

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

$(document).ready(function () {

    /*nav animate*/
    animateScrollFunch()


    /* end nav */

    /*============*/

    //mobile menu
    $('#menu-bar').on('click', function () {

        $('.ham').addClass("exit")
        $('.mobile-menu-wrapper').removeClass('d-none');

        if ($(".mobile-menu-wrapper").hasClass("mobile-menu-open")) {
            $(".mobile-menu-wrapper").removeClass("mobile-menu-open")
            $('.ham').removeClass("exit")
        } else {
            $(".mobile-menu-wrapper").addClass("mobile-menu-open")
            $('.ham').addClass("exit")

        }
    });

    $('.mobile-menu-overlay').on('click', function () {

        $(".mobile-menu-wrapper").removeClass("mobile-menu-open")
        $('.ham').removeClass("exit")

    })

    $('.nav-link[href^="#"]').on('click', function () {
        $(".mobile-menu-wrapper").removeClass("mobile-menu-open")
        $('.ham').removeClass("exit")
    })

    // mobile menu



    //animated
    $("#h-welcome").waypoint(function () {
        $("#h-welcome").addClass('fadeInLeft');
    }, {
        offset: '100%'
    });

    $("#btn-welcome").waypoint(function () {
        $("#btn-welcome").addClass('fadeInUp');
    }, {
        offset: '100%'
    });

    $("#h-about-us").waypoint(function () {
        $('#h-about-us').addClass('fadeInLeft');
    }, {
        offset: '100%'
    });

    $("#c-about-us").waypoint(function () {
        $('#c-about-us').addClass('fadeInRight');
    }, {
        offset: '100%'
    });

    $('#l-about-us').waypoint(function () {
        $('#l-about-us').find('img').addClass('fadeInLeft');
    }, {
        offset: '100%'
    });

    $('.box-vision').waypoint(function () {
        $('.box-vision').addClass('fadeInUp');
    }, {
        offset: '100%'
    });

    $('.box-mision').waypoint(function () {
        $('.box-mision').addClass('fadeInUp');
    }, {
        offset: '100%'
    });

    $('#doing-1').waypoint(function () {
        $('#doing-1').addClass('fadeInLeft');
    }, {
        offset: '100%'
    });

    $('#doing-2').waypoint(function () {
        $('#doing-2').addClass('fadeInRight');
    }, {
        offset: '100%'
    });

    $(' #c-tenant').waypoint(function () {
        $(' #c-tenant').addClass('fadeInUp');
    }, {
        offset: '100%'
    });


    /**
     * ? Form Message 
     */



    $('#btn_submit_message').click(function () {

        var _message_form = $('#form_message');
        var _message_alert_dom = $("#message_alert");
        var _message_alert = '';

       

        $.ajax({

            url: _message_form.attr('action'),
            method: 'POST',
            data: _message_form.serialize()

        }).done(function (msg) {

            location.reload();
            
            grecaptcha.reset()
            
        }).fail(function (msg) {

            grecaptcha.reset()

            var _error = Object.values(msg.responseJSON[0]);

            _error.forEach(el => {

                _message_alert += `<li>${el}</li>`

            });
            
            _message_alert_dom.html(`
          
                <div class="alert alert-danger">
                    <ul>
                    ${ _message_alert }
                    </ul>
                </div>
          
            `)

        })

    })



})

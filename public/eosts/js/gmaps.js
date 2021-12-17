$(document).ready(function () {
    'use strict'

    /* Conter */
    // $('.counter').counterUp({
    //     delay: 10,
    //     time: 1000,

    // });


    // Google Map
    $("#map_extended").gMap({
        markers: [{
            address: "",
            html: '<h4>Office</h4>' +
                '<address>' +
                '<div>' +
                '<div><b>Address:</b></div>' +
                '<div>Envato Pty Ltd, 13/2<br> Elizabeth St Melbourne VIC 3000,<br> Australia</div>' +
                '</div>' +
                '<div>' +
                '<div><b>Phone:</b></div>' +
                '<div>+1 (408) 786 - 5117</div>' +
                '</div>' +
                '<div>' +
                '<div><b>Fax:</b></div>' +
                '<div>+1 (408) 786 - 5227</div>' +
                '</div>' +
                '<div>' +
                '<div><b>Email:</b></div>' +
                '<div><a href="mailto:info@well&spa.com">info@well&spa.com</a></div>' +
                '</div>' +
                '</address>',
            latitude: -33.87695388579145,
            longitude: 151.22183918952942,
            icon: {
                image: "images/pin.png",
                iconsize: [35, 48],
                iconanchor: [17, 48]
            }
        },],
        icon: {
            image: "images/pin.png",
            iconsize: [35, 48],
            iconanchor: [17, 48]
        },
        latitude: -33.87695388579145,
        longitude: 151.22183918952942,
        zoom: 16
    });


});
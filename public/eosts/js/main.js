$(document).ready(function(){
  var slider = tns({
      container: '.home-slider',
      items: 1,
      // controlsContainer: "#customize-controls",
      slideBy: 'page',
      // autoWidth: true,
      autoplay: true,
      mouseDrag: true,
      controls: false,
      navPosition: "bottom",
      lazyload: true,
      preventScrollOnTouch: 'force',
      // nav: false,
      speed: 1000,
      onInit: 'customizedFunction',
      responsive: {
          640: {
              items: 1,
          },

          768: {
              items: 1,
          }
      }
  });

var customizedFunction = function (info, eventName) {
    if (info.navItems[info.displayIndex - 1]) {
        const src = info.navItems[info.displayIndex - 1].dataset.image;
        document.querySelector('.header').style.backgroundImage = `url("${src}")`;

        // console.log(info.navItems[info.displayIndex - 1].dataset.src);
        if (info.navItems[info.displayIndex - 1].dataset.loaded == "true") {
            info.navItems[info.displayIndex - 1].dataset.image = info.navItems[info.displayIndex - 1].dataset.src;
        } else {
            var imgs = [];
            imgs[info.displayIndex - 1] = new Image();
            imgs[info.displayIndex - 1].src = info.navItems[info.displayIndex - 1].dataset.src;

            imgs[info.displayIndex - 1].onload = function () {
                if (imgs[info.displayIndex - 1].complete) {
                    info.navItems[info.displayIndex - 1].dataset.image = info.navItems[info.displayIndex - 1].dataset.src;
                    document.querySelector('.header').dataset.src = info.navItems[info.displayIndex - 1].dataset.src;
                }
            };
        }
    }
}
});
$(window).on('load', function() {
  var pre_loader = $('#loader*');
  $('#slow*').removeClass('slow');
  $('#slow*').addClass('slow');
pre_loader.removeClass('loader');
});
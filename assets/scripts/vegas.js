/*!
 * Vegas Configuration Code
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for the slideshow in the header section.

$(".header").vegas({
      timer: false,
      delay: 17000,
      preload: true,
      overlay: '/wp-content/themes/falmouthrip/dist/images/overlays/custom-overlay.png',
      slides: [
        { src: "https://s3.amazonaws.com/www-falmouth-rip/log-bush.jpg", valign: "25%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/ponsettia-rust.jpg", valign: "75%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/road-rusty.jpg", valign: "25%", transition: "zoomIn" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/walk-rusty.jpg", align: "75%", transition: "blur" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bar-rusty.jpg", valign: "5%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/box-food.jpg", valign: "25%", transition: "swirlLeft" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bush-trash.jpg", valign: "55%", transition: "zoomIn" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bushy-gravel.jpg", align: "75%", transition: "fade" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});


$(".slides").vegas({
      timer: false,
      delay: 7000,
      preload: true,
      overlay: '/wp-content/themes/falmouthrip/dist/images/overlays/04.png',
      slides: [
        { src: "https://s3.amazonaws.com/www-falmouth-rip/log-bush.jpg", valign: "25%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/ponsettia-rust.jpg", valign: "75%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/road-rusty.jpg", valign: "25%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/walk-rusty.jpg", align: "75%", transition: "blur" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bar-rusty.jpg", valign: "5%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/box-food.jpg", valign: "25%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bush-trash.jpg", valign: "55%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bushy-gravel.jpg", align: "75%", transition: "blur" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});


})(jQuery); // End of use strict

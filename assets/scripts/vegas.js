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
      overlay: 'https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/07.png',
      slides: [
        { src: "https://s3.amazonaws.com/www-falmouth-rip/usain-bolt-1920x1080px.jpg", valign: "25%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/rex-nettleford-1600x1200px.png", valign: "75%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/ben-johnson-2000x1300px.png", valign: "25%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/kymani-marley-800x1200px.jpg.png", align: "75%", transition: "blur" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});


$(".slideshow").vegas({
      timer: false,
      delay: 7000,
      preload: true,
      overlay: 'https://s3-ap-northeast-1.amazonaws.com/www-capoeirastudio-com/07.png',
      slides: [
        { src: "https://s3.amazonaws.com/www-falmouth-rip/log-bush.jpg", valign: "25%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/ponsettia-rust.jpg", valign: "75%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/road-rusty.jpg", valign: "25%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/walk-rusty.jpg", align: "75%", transition: "blur" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bar-rusty.jpg", valign: "5%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/box-food.jpg", valign: "25%", transition: "swirlRight" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bush-trash.jpg", valign: "55%", transition: "zoomOut" },
        { src: "https://s3.amazonaws.com/www-falmouth-rip/bushy-gravel.JPG", align: "75%", transition: "blur" },
      ],
      animation: 'kenburnsUpLeft',
      transitionDuration: 9000,
});


})(jQuery); // End of use strict

(function ($, Drupal) {
    Drupal.behaviors.galleryFancyBox = {
        attach: function () {
            $(context).find('[data-fancybox="gallery"]').once('fancybox').fancybox({
                loop: true,  // Allows looping through images
                buttons: [
                    "zoom",
                    "slideShow",
                    "fullScreen",
                    "download",
                    "thumbs",
                    "close"
                ],
                backFocus: false, // Prevents refocusing issues
                hideScrollbar: false, // Prevents layout shifts
                afterClose: function() {
                    console.log("FancyBox closed"); // Debugging check
                }
            });
        }
    };
})(jQuery, Drupal);
(function ($, Drupal) {
    Drupal.behaviors.fancybox = {
        attach: function () {
            $("[data-fancybox]").once('fancybox').fancybox();s
        }
    };
})(jQuery, Drupal);
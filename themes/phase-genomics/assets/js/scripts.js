jQuery(document).foundation();
/*
 * These functions make sure WordPress
 * and Foundation play nice together.
*/

jQuery(document).ready(function () {

  // Remove empty P tags created by WP inside of Accordion and Orbit
  jQuery('.accordion p:empty, .orbit p:empty').remove();

  // Makes sure last grid item floats left
  jQuery('.archive-grid .columns').last().addClass('end');

  // Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function () {
    if (jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

  jQuery('#events-carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<div class="prev arrow abs-center-vertical"><img src="' + theme.THEME_URL + '/assets/images/left-arrow.png" alt=""></div>',
    nextArrow: '<div class="next arrow abs-center-vertical"><img src="' + theme.THEME_URL + '/assets/images/right-arrow.png" alt=""></div>',
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });

});

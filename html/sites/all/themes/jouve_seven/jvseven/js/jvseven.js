/**
 * @file
 * Some UI improvements.
 */

(function ($) {

  'use strict';

  Drupal.behaviors.jvseven = {
    attach: function(context) {

      $('.messages:not(:has(span.hide-message))')
        .append('<span class="hide-message">&#10799;</span>')
        .not('.view-changed')
        .fadeIn(500);

      $('.hide-message')
        .click(function() {
          $(this).parent().fadeOut()
        });

    }
  }
})(jQuery);

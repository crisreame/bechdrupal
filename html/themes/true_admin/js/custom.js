(function ($) {
  'use strict';
    Drupal.behaviors.url = {
        attach: function (context, settings) {
            var pathname = window.location.pathname;
            if(pathname == '/admin/structure') {
                $('body').addClass('structure-page');
            }
            if(pathname == '/admin/reports') {
                $('body').addClass('reports-page');
            }
            if(pathname == '/admin') {
                $('body').addClass('admin-page');
            }
        }
    }
})(jQuery, Drupal);
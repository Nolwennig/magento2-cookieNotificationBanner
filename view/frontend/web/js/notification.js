
define([
    "jquery",
    "jquery/ui",
    "mage/cookies"
], function($){
    "use strict";

    $.widget('nolwennig.cookieNotification', {
        _create: function() {
            if ($.mage.cookies.get(this.options.cookieName)) {
                this.element.hide();
            } else {
                var highest = -999;
                $("*").each(function() {
                    var current = parseInt($(this).css("z-index"), 10);
                    if(current && highest < current) highest = current;
                });
                this.element.css("z-index", highest);
                this.element.show();
            }
            $(this.options.cookieAllowButtonSelector).on('click', $.proxy(function() {
                var cookieExpires = new Date(new Date().getTime() + this.options.cookieLifetime * 1000);

                $.mage.cookies.set(this.options.cookieName, this.options.cookieValue, {expires: cookieExpires, path: this.options.cookiePath, domain: this.options.cookieDomain});
                if ($.mage.cookies.get(this.options.cookieName)) {
                    $(this.options.cookieBlockSelector).hide();
                } else {
                    window.location.href = this.options.cookieMoreLink;
                }
            }, this));

            $(this.options.cookieMoreButtonSelector).on('click', $.proxy(function() {
                if(this.options.cookieMoreLinkDestination == 1) {
                    window.location.href = this.options.cookieMoreLink;
                } else {
                    window.open(this.options.cookieMoreLink,'_blank');
                }
            }, this));
        }
    });

    return $.nolwennig.cookieNotification;
});

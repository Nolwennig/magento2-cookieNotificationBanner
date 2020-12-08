require([
    'jquery',
    'mage/translate',
    'jquery/validate'],
    function($){
        $.validator.addMethod(
            'validate-hexadecimal-color-length', function (v) {
                return (v.length == 6);
            }, $.mage.__('Ce champ doit contenir 6 caractères'));
    }
);
/**
 * Created by 08121_000 on 26-Mar-17.
 */
window.$ = window.jQuery = require('jquery');

require('select2');
$(document).ready(function() {
    $('.sl2').select2({
        theme: "bootstrap"
    });
});

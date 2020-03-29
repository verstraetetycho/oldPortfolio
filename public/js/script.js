'use strict';

$('ion-icon[name=menu-outline]').click(function() {
    $('.nav-container').fadeIn();
});

$('ion-icon[name=close-outline]').click(function() {
    $('.nav-container').fadeOut();
});
$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});


    $('body').bind('cut copy paste print', function(e) {
        e.preventDefault();
    })
    $("body").on("contextmenu", function(e) {
        return false;
    })
    document.onkeydown = function(e) {
        if (event.keyCode == 123) {
            return false;
        }

        if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
            return false;
        }

        if (e.ctrlKey && e.shiftKey && e.keyCode == "C".charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) {
            return false;
        }

    }

});
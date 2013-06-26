$(document).ready(function(){
    $('input[type="text"]').on('change invalid', function() {
        var textfield = $(this).get(0);

        textfield.setCustomValidity('');

        if (!textfield.validity.valid) {
          textfield.setCustomValidity("Please fill out this field");
        }
    });

});
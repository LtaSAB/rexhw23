
    jQuery(document).ready(function($) {
        $('#contact-form').submit(function (e) {
            e.preventDefault();

            var name = $('#u-name').val();
            var email = $('#u-email').val();
            var message = $('#u-message').val();
            var data = {
                'action': 'my_action',
                email: email,
                name : name,
                message: message,
                cache: false,
                nonce : ajax_object.nonce
            };
            // We can also pass the url value separately from ajaxurl for front end AJAX implementations
            $.post(ajax_object.ajax_url, data, function(response) {
                alert(response);
            });

        });
    });
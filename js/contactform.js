contacts = {
    is_email: function(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    },
    form_error: function(form) {
        form.removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', 
        function(){
            form.removeClass();
        });
    }
};

$(function(e) {
    autosize($('textarea'));

    $('nav ul').onePageNav();

    for (var D = e(".input-field input, .input-field textarea"), o = 0; o < D.length; o++) e(D[o]).val() ? e(D[o]).parent(".input-field").addClass("used") : e(D[o]).parent(".input-field").removeClass("used");
    D.on("blur", function() {
        e(this).val() ? e(this).parent().addClass("used") : e(this).parent().removeClass("used")
    }), D.on("focus", function() {
        e(this).parent().addClass("used")
    });

    $("a[data-role='send-message']").click(function () {
        var form = $('#contact-form'),
            name    = $("#name").val(),
            email   = $("#email").val(),
            message = $("#message").val();

        if ( ! contacts.is_email(email) || ! name || ! message) {
            contacts.form_error(form);
            return ;
        }
        
        $('#email-overlay').show();
        $.post("/?contacts=send", 
            {'name': name, 'email': email, 'message': message},
            function(data) {
                console.log(data);
                $('#email-overlay').removeClass('overlay').html('<strong>Спасибо!<br />Ваше сообщение отправлено</strong>');
            }
        );

    });
});
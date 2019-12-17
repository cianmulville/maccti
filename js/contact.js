$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    // when the form is submitted
    $('#contact-form').on('submit', function (e) {

        // e.preventDefault();

        // POST values in the background the the script URL
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function(html) {
            $('.messages').html('<p>Your message was sent');
            }

        });
        e.preventDefault();
    })
});

// function postForm(params) {
//     var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone;
//     //alert (dataString);return false;
//     $.ajax({
//         type: "POST",
//         url: "bin/process.php",
//         data: dataString,
//         success: function () {
//             $('#contact-form').html("<div id='message'></div>");
//             $('#message').html("<h2>Contact Form Submitted!</h2>")
//                 .append("<p>We will be in touch soon.</p>")
//                 .hide()
//                 .fadeIn(1500, function () {
//                     $('#message').append("<img id='checkmark' src='images/check.png' />");
//                 });
//         }
//     });
//     return false;
// }
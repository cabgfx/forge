$(function() {
  var signup_spinner = Ladda.create( document.querySelector( 'button' ) );

  // Post signups to Mailchimp
  $("#mc-embedded-subscribe-form").submit(function() {
    var email_value = $('#email').val(),
        name = $('#name').val(),
        url = "/add_to_mailchimp.php?" + "email=" + email_value + "&name=" + name,
        signup_response =
          "Thank you, " + name + "!<br>\
          Welcome to the inner circle of super people who will be informed about Forge events.";

    // Do a simple check for email validity,
    // show error msg if it fails
    if(email_value.match(/\S+@\S+/)) {

      signup_spinner.start();
      $('#submit').prop('disabled', true);
      
      $.post(url, function(rslt){
        $('#error-response, #mc-embedded-subscribe-form').remove();
        $('#top').append('<p>' + signup_response + '</p>');
      });
      // Only show error msg once
    } else if ($('#error-response').length) {
      $('#error-response').fadeOut('fast').fadeIn('fast');
    } else {
      $('#mc-embedded-subscribe-form').before('<p id="error-response">Sorry, but that email won\'t work. Please check your email and try again.</p>');
    }

    return false;
  });

  // Polyfill <input> @placeholder attribute
  $('.masthead input').placeholder();
});
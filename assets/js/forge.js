$(function() {
  // BigVideo for non-touch devices
  var BV = new $.BigVideo({container: $('#top')});
  BV.init();
  
  if (!Modernizr.touch) {
    $('#big-video-wrap').hide();
  
    BV.show('//s3-eu-west-1.amazonaws.com/forgecph/Forge2.mp4', {ambient: true});
  
    BV.getPlayer().on('loadedmetadata', function() {
      $('#big-video-wrap').fadeIn(1000);
    })
  }

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
        $('#top').append('<p class="response">' + signup_response + '</p>');
      });
      // Only show error msg once
    } else if ($('#error-response').length) {
      $('#error-response').fadeOut('fast').fadeIn('fast');
    } else {
      $('#mc-embedded-subscribe-form').before('<p id="error-response" class="response">Sorry, but we couldn\'t grok that email. Try again?</p>');
    }

    return false;
  });

  // Polyfill <input> @placeholder attribute
  $('.masthead input').placeholder();
});
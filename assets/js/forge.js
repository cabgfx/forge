$(function() {
  $("#mc-embedded-subscribe-form").submit(function() {
    var email_value = $('#email').val(),
        name = $('#name').val(),
        url = "/add_to_mailchimp.php?" + "email=" + email_value + "&name=" + name,
        signup_response =
          "Thank you, " + name + "!<br>\
          Welcome to the inner circle of super people who will be informed about Forge events.";
    
    if(email_value.match(/\S+@\S+/)) {
      $.post(url, function(rslt){
        $('#error-response, #mc-embedded-subscribe-form').remove();
        $('#top').append('<p>' + signup_response + '</p>');
      }); 
    } else {
      $('#mc-embedded-subscribe-form').before('<p id="error-response">Sorry, but that email won\'t work. Please check your mail address and try again.</p>');
    }

    return false;
  });
});
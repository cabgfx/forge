$(function() {
  $("#mc-embedded-subscribe-form").submit(function() {
    var email_value = $('#email').val(),
        name = $('#name').val(),
        url = "/add_to_mailchimp.php?" + "email=" + email_value + "&name=" + name,
        signup_response =
          "Thank you, " + name + "!<br>\
          Welcome to the inner circle of super people who will be informed about forge events.";

    jQuery.post(url, function(rslt){
      $('#mc-embedded-subscribe-form').remove();
      $('#top').append('<p>' + signup_response + '</p>');
    });

    return false;
  });
});
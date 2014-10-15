$(function() {
  // BigVideo for non-touch devices
  if ((!Modernizr.touch) && ($('body').hasClass('video-bg'))) {
    var BV = new $.BigVideo({container: $('#top')}),
        video_url = $('body').data('video-url');

    BV.init();
  
    $('#big-video-wrap').hide();

    BV.show(video_url, {ambient: true});
  
    BV.getPlayer().on('loadedmetadata', function() {
      $('#big-video-wrap').fadeIn(1000);
    });
  };

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
        $('#error-response, #mc-embedded-subscribe-form').hide();
        $('#mc-embedded-subscribe-form').before('<p class="response">' + signup_response + '</p>');
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

  if ((!Modernizr.touch) && ($('#instafeedcontainer').length)) {
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'forgecph',
        clientId: '4e46b9d6b7b143e0be28642aec5d41f0',
        useHttp: true,
        limit: 50,
        resolution: "low_resolution",
        success: positionimages,
        sortBy: 'random'
    });
    
    function positionimages() {};
    
    feed.run();
  };
});
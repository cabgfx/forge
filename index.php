<?php $description = 'We start the sort of activities that we’d like to participate in ourselves.'; ?>
<?php $button_help_text = 'Sign up for the mailing list, to be notified when Forge 3 is happening.' ?>
<?php $button_callout = 'Notify me next time' ?>

<?php include 'templates/head.php'; ?>

<body class="video-bg" data-video-url="//s3-eu-west-1.amazonaws.com/forgecph/Forge3.mp4">
  <header role="banner" class="masthead">
    <div class="container" id="top">
      <h1 class="logo"><a href="/">Forge</a></h1>

      <p class="lead">
        The next Forge event is coming <b>Summer 2015</b>.<br>
        Relive <a href="/2" title="Talks &amp; highlights">Forge 2</a> or sign up below to be notified about tickets.
      </p>

      <?php include 'templates/signup.php'; ?>
    </div>
  </header>

  <nav>
    <a href="/1">Forge 1</a>
    <a href="/2">Forge 2</a>
    <a href="/" class="active">Forge 3</a>
  </nav>

  <main role="main">
    <section class="intro" style="margin-bottom: 0; padding-bottom: 40px;">
      <div class="container container-copy">
        <h2>What is Forge?</h2>
        <p class="lead">
          It’s a Copenhagen Con-Up&hellip; a Meet-Ference&hellip;<br>
          You better just watch this video.
        </p>

        <div class="video">
          <iframe src="//player.vimeo.com/video/85478724?title=0&amp;byline=0&amp;portrait=0&amp;color=c73932" width="1000" height="562" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>

        <p class="lead">
          See talks from <a href="/1">Forge #1</a> or <a href="/2">Forge #2</a>
        </p>
      </div>
    </section>
  </main>

  <div id="instafeedcontainer">
    <div id="instafeed"></div>
  </div>

  <section class="sponsors">
    <div class="container container-copy">
      <h4>Sponsored by</h4>
      <p>
        <a class="sponsor" href="http://designsociety.dk/" target="_blank"><img src="assets/img/design-society-logo.png" alt="Design Society"></a>
        <a class="sponsor" href="https://www.iconfinder.com/" target="_blank"><img src="assets/img/iconfinder-logo.png" alt="Iconfinder"></a>
        <a class="sponsor" href="https://podio.com/" target="_blank"><img src="assets/img/podio-logo.png" alt="Podio"></a>
        <a class="sponsor" href="http://robo.cat/" target="_blank"><img src="assets/img/robocat-logo.png" alt="Robocat"></a>
      </p>
    </div>
  </section>

  <section class="content">
    <div class="container container-copy">
      <h3 id="who-we-are">Who's behind this?</h3>

      <p class="col-1">
          We’re a band of passionate creative professionals who long for a place to come together and share stories.
          We find it astonishing that we’ve got so many talented creatives working or studying in and around Copenhagen,
          yet so few common grounds. We’re not professional event makers, we won’t promise you fancy networking or the latest in conference trends.
      </p>
      <p class="col-2">
        We start the sort of activities that we’d like to participate in ourselves.
        We want to bring together the hardworking pixel pushers, the savvy entrepreneurs, the diligent students and the creative aficionados.
        We have a wide spectrum of creatives in this city, locked up in companies, slaving away in startups or stuck in school.
        We need to get out more, we have so much to learn.
      </p>

      <div class="initiators">
        <p class="initiator">
          <img src="assets/img/pete-lacey.png" alt="">
          <strong>Pete Lacey</strong>
          Lead Designer at Podio. Fond of badgers.
          <a href="https://www.twitter.com/chopeh" title="Pete's twitter profile" target="_blank">@chopeh</a>
        </p>
        <p class="initiator">
          <img src="assets/img/martin-leblanc.png" alt="">
          <strong>Martin LeBlanc</strong>
          Founder &amp; CEO of Iconfinder.
          <a href="https://www.twitter.com/iconfinder" title="Martin's twitter profile" target="_blank">@iconfinder</a>
        </p>
        <p class="initiator">
          <img src="assets/img/michael-flarup.png" alt="">
          <strong>Michael Flarup</strong>
          Founder and lead designer at Robocat &amp; Pixelresort.
          <a href="https://www.twitter.com/flarup" title="Michael's twitter profile" target="_blank">@flarup</a>
        </p>
        <p class="initiator">
          <img src="assets/img/casper-klenz-kitenge.png" alt="">
          <strong>Casper Klenz-Kitenge</strong>
          Designer and founder at Duke UX. Coffee lover.
          <a href="https://www.twitter.com/cabgfx" title="Casper's twitter profile" target="_blank">@cabgfx</a>
        </p>
      </div>
    </div>
  </section>

<?php include 'templates/footer.php'; ?>

<?php $description = 'We start the sort of activities that we’d like to participate in ourselves.'; ?>
<?php $ticket_url = 'http://billetto.dk/forge-2' ?>
<?php $ticket_availability = '108' ?>

<?php include 'templates/head.php'; ?>

<body class="frontpage">
  <header role="banner" class="masthead">
    <div class="container" id="top">
      <h1 class="logo"><a href="/">Forge</a></h1>
    
      <p class="lead">
        Join your creative peers for an evening of inspiration, at the second Forge event, <a href="https://www.facebook.com/events/591070834317509/?ref=22" title="Details on facebook">June 20th.</a> Just <?php echo $ticket_availability ?> seats, available now.
      </p>

      <p class="ticket-callout">
        <a href="<?php echo $ticket_url ?>" class="button button-signup">Get your ticket today</a>
      </p>
    </div>
  </header>

  <?php include 'templates/nav.php'; ?>

  <main role="main">
    <section class="speakers">
      <div class="container container-copy">
        <h3>Talks</h3>
        <p class="lead">Amazing speakers that will move you to create</p>

          <p class="person">
            <img src="assets/img/kai-brach-200.png" alt="Kai Brach">
            <strong>Kai Brach</strong>
            Publisher, editor and art director behind the publication Offscreen which explores the life and the work of people who use the internet and technology to be creative, solve problems, and build successful businesses.<br>
            <a href="https://www.twitter.com/offscreenmag" target="_blank">@offscreenmag</a>
          </p>

          <p class="person">
            <img src="assets/img/laura-jul-200.png" alt="Laura Jul">
            <strong>Laura Jul</strong>
            Creative Director at Copenhagen-based digital agency. 15 years of experience from the Danish Advertising, Digital and Direct Marketing Industry. She recently quit her job and was overwhelmed by the response.
            <a href="https://twitter.com/laurajul" target="_blank">@LauraJul</a>
          </p>

          <p class="person">
            <img src="assets/img/holger-lagerfeldt-200.png" alt="Holger Lagerfeldt">
            <strong>Holger Lagerfeldt</strong>
            World-renowned producer with 20 years in the music business. After a ten year stretch of making pop hits for Danish and international artists, he decided to branch out and expand his business in 2004.<br>
            <a href="http://www.pag.dk" target="_blank">pag.dk</a>
          </p>

          <p class="person">
            <img src="assets/img/thomas-madsen-mygdal-200.png" alt="Thomas Madsen-Mygdal">
            <strong>Thomas Madsen-Mygdal</strong>
            Entrepreneur, Angel Investor, Troublemaker, Activist. Always restless about reinventing things for the world we live in today. Lover of great conversations, spaces and people&mdash;and of augmenting humans. Expect something different.
            <a href="https://www.twitter.com/mygdal" target="_blank">@mygdal</a>
          </p>

      </div>
    </section>

    <section class="details">
      <div class="container">
        <p class="column">
          <strong>Friday</strong>
          20th of June<br>
          15:00&ndash;20:00
        </p>
        <p class="column">
          <strong>Design Society</strong>
          HC Andersens Boulevard 27<br>
          1553 København V.
        </p>
        <p class="column">
          <strong>Tickets</strong>
          Admission 100 DKK<br>
          Admission &amp; Loot 250 DKK
        </p>

        <aside role="complementary">
          <p class="lead">
            <a href="<?php echo $ticket_url ?>" class="button button-signup button-small button-signup-alternate">Get your ticket today</a>
            Only <?php echo $ticket_availability ?> seats available
          </p>
        </aside>
      </div>
    </section>

    <section class="intro">
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
          <a href="/1">See talks from Forge #1</a>
        </p>
      </div>
    </section>
  </main>

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

    <aside role="complementary" class="newsletter-callout">
      <div class="container container-copy">
        <p class="lead">Be notified of new events&mdash;join the mailing list:</p>

        <?php include 'templates/signup.php'; ?>
      </div>
    </aside>
  </section>

<?php include 'templates/footer.php'; ?>
<?php $title = 'Second | '; ?>
<?php $description = 'Talks and flashbacks from the second Forge event, at Danish Design Society, June 20 2014.'; ?>
<?php $button_help_text = 'Sign up for the mailing list, to be notified when Forge 3 is happening.' ?>
<?php $button_callout = 'Notify me next time' ?>
<?php $ticket_url = '#stay-updated' ?>

<?php include 'templates/head.php'; ?>

<body class="video-bg event-2" data-video-url="//s3-eu-west-1.amazonaws.com/forgecph/Forge2.mp4">
  <header role="banner" class="masthead">
    <div class="container" id="top">
      <h1 class="logo"><a href="/">Forge</a></h1>
    
      <p class="lead">
        The second forge event was held on June 20th, 2014.
        More than 150 people got together and listened to 4 amazing talks, enjoyed food &amp; drink and a surplus of inspiration. Rewind below.
      </p>

      <p class="ticket-callout">
        <a href="<?php echo $ticket_url ?>" class="button button-signup" title="<?php echo $button_help_text ?>"><?php echo $button_callout ?></a>
      </p>
    </div>
  </header>

  <nav>
    <a href="/1">Forge 1</a>
    <a href="/2" class="active">Forge 2</a>
    <a href="/">Forge 3</a>
  </nav>

  <main role="main" class="talks">
    <div class="container">
      <h2>Highlights</h2>

      <div class="video">
        <iframe src="//player.vimeo.com/video/107817486?title=0&amp;byline=0&amp;portrait=0&amp;color=c73932" width="1000" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </div>
      

      <h2>Talks</h2>

      <?php
        $speakers = array(
          array(
            'img_slug'    => 'thomas-madsen-mygdal',
            'name'        => 'Thomas Madsen-Mygdal',
            'description' => 'Entrepreneur, Angel Investor, Troublemaker, Activist. Always restless about reinventing things for the world we live in today.',
            'quote'       => '“I urge you to go out and find your heroes”',
            'video_id'    => '108939789',
            'twitter'     => 'mygdal'
          ),
          array(
            'img_slug'    => 'laura-jul',
            'name'        => 'Laura Jul',
            'description' => 'Creative Director at Copenhagen-based digital agency. 15 years of experience from the Danish Advertising, Digital and Direct Marketing Industry.',
            'quote'       => '“It’s not about getting many likes, it’s about getting the revelant ones.”',
            'video_id'    => '108944607',
            'twitter'     => 'laurajul'
          ),
          array(
            'img_slug'    => 'holger-lagerfeldt',
            'name'        => 'Holger Lagerfeldt',
            'description' => 'World-renowned producer with 20 years in the music business.',
            'quote'       => '“Get paid or get laid”',
            'video_id'    => '108951683',
            'website'     => 'http://pag.dk'
          ),
          array(
            'img_slug'    => 'kai-brach',
            'name'        => 'Kai Brach',
            'description' => 'Publisher, editor and art director behind the publication Offscreen which explores the life and the work of people who use the internet and technology to be creative, solve problems, and build successful businesses.',
            'quote'       => '“Publishers get pregnant every 3 months.”',
            'video_id'    => '108947278',
            'twitter'     => '@offscreenmag'
          )
        );
      ?>

      <?php foreach ($speakers as $speaker): ?>
      <article class="talk talk-<?php echo $speaker['img_slug'] ?>">
        <header>
          <blockquote><?php echo $speaker['quote'] ?></blockquote>
          <img src="assets/img/<?php echo $speaker['img_slug'] ?>.png" alt="">

          <div>
            <h3><?php echo $speaker['name'] ?></h3>
            <p><?php echo $speaker['description'] ?></p>
            <?php if (!empty($speaker['twitter'])): ?>
            <a href="https://www.twitter.com/<?php echo $speaker['twitter'] ?>" target="_blank">
              @<?php echo $speaker['twitter'] ?>
            </a>
            <?php else: ?>
              <a href="<?php echo $speaker['website'] ?>" target="_blank">
                <?php echo $speaker['website'] ?>
              </a>
            <?php endif; ?>
          </div>
        </header>
        
        <div class="video">
          <iframe src="//player.vimeo.com/video/<?php echo $speaker['video_id'] ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=c73932" width="1000" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </main>

  <aside role="complementary" class="newsletter-callout">
    <div class="container container-copy">
      <p class="lead" id="stay-updated">Be notified of new events&mdash;join the mailing list:</p>

      <?php include 'templates/signup.php'; ?>
    </div>
  </aside>

  <section role="banner" class="sponsors">
    <div class="container container-copy">
      <h4>This event was sponsored by</h4>
      <p>
        <a class="sponsor" href="http://designsociety.dk/" target="_blank"><img src="assets/img/design-society-logo.png" alt="Design Society"></a>
        <a class="sponsor" href="https://www.iconfinder.com/" target="_blank"><img src="assets/img/iconfinder-logo.png" alt="Iconfinder"></a>
        <a class="sponsor" href="https://podio.com/" target="_blank"><img src="assets/img/podio-logo.png" alt="Podio"></a>
        <a class="sponsor" href="http://robo.cat/" target="_blank"><img src="assets/img/robocat-logo.png" alt="Robocat"></a>
        <a class="sponsor" href="http://www.hellogroup.com/" target="_blank"><img src="assets/img/hello-logo.png" alt="Hello Group"></a>
      </p>
    </div>
  </section>

<?php include 'templates/footer.php'; ?>
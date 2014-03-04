<?php $title = 'First | '; ?>
<?php $description = 'Talks and flashbacks from the very first Forge event, at Danish Design Society, October 25 2013.'; ?>
<?php include 'templates/head.php'; ?>

<body class="event-1">
  <header role="banner" class="masthead">
    <div class="container" id="top">
      <nav>
        <a href="/">Forge 2</a>
        <a href="/1">Forge 1</a>
      </nav>

      <h1 class="logo"><a href="/">Forge</a></h1>
    
      <p class="lead">
        The very first forge event was held on October 25th, 2013.
        More than 200 people got together and listened to 4 amazing talks, enjoyed food, drinks and a surplus of inspiration.
        Rewind below.
      </p>
    </div>
  </header>

  <main role="main" class="talks">
    <div class="container">
      <h2>Talks</h2>

      <?php
        $speakers = array(
          array(
            'img_slug'    => 'luke-beard',
            'name'        => 'Luke Beard',
            'description' => 'Well traveled designer previously at Zerply, Hipstamatic &amp; Buffer. Now crafting beautiful things at Elepath.',
            'quote'       => '“You stay there, you die there.”',
            'video_id'    => '88016724',
            'twitter'     => 'LukesBeard'
          ),
          array(
            'img_slug'    => 'mette-krogsgaard-hoejlund',
            'name'        => 'Mette Krogsgaard Højlund',
            'description' => 'Coffee-making, pizza-baking product designer at Podio who also likes building things in real life.',
            'quote'       => '“Are you a koala or a racoon?”',
            'video_id'    => '88017992',
            'twitter'     => 'ungtblod'
          ),
          array(
            'img_slug'    => 'mikkel-malmberg',
            'name'        => 'Mikkel Malmberg',
            'description' => 'Mikkel is a part stand-up comic, part software developer trying his best to make things and make them simple.',
            'quote'       => '“Don’t be afraid to do really dumb shit.”',
            'video_id'    => '88019981',
            'twitter'     => 'mikker'
          ),
          array(
            'img_slug'    => 'benedikt-lehnert',
            'name'        => 'Benedikt Lehnert',
            'description' => 'Benedikt Lehnert is the Chief Design Officer at 6Wunderkinder, overseeing the product design team in Berlin working on Wunderlist.',
            'quote'       => '“Create something that lasts. Create something that is meaningful.”',
            'video_id'    => '88020602',
            'twitter'     => 'blehnert'
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
            <a href="https://www.twitter.com/<?php echo $speaker['twitter'] ?>" target="_blank">@<?php echo $speaker['twitter'] ?></a>
          </div>
        </header>
        
        <div class="video">
          <iframe src="//player.vimeo.com/video/<?php echo $speaker['video_id'] ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=c73932" width="1000" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </main>

  <section role="complementary" class="newsletter-callout">
    <div class="container container-copy">
      <p class="lead">Be notified of new events&mdash;join the mailing list:</p>

      <form action="http://forgecph.us7.list-manage.com/subscribe/post?u=f7462056ceb003d10ff72c090&amp;id=1752b37bfa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="signup" novalidate>
        <input type="text" value="" id="name" name="FNAME" required placeholder="Tell us your name">
        <input type="email" required placeholder="And your email" value="" name="EMAIL" id="email">

         <button class="ladda-button" data-style="zoom-in" type="submit" id="submit" data-spinner-color="#004835">
           <span class="ladda-label">Ok</span>
         </button>
      </form>
      <!--End mc_embed_signup-->
    </div>
  </section>
    
  <aside role="complementary" class="sponsors">
    <div class="container container-copy">
      <h4>This event was sponsored by</h4>
      <p>
        <a class="sponsor" href="http://designsociety.dk/" target="_blank"><img src="assets/img/ddc-logo.png" alt="Danish Design Centre"></a>
        <a class="sponsor" href="https://www.iconfinder.com/" target="_blank"><img src="assets/img/iconfinder-logo.png" alt="Iconfinder"></a>
        <a class="sponsor" href="https://podio.com/" target="_blank"><img src="assets/img/podio-logo.png" alt="Podio"></a>
      </p>
    </div>
  </aside>

<?php include 'templates/footer.php'; ?>
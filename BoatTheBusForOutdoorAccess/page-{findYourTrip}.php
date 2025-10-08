<?php
/*
 * Template Name: Find Your Trip
 * Template Post Type: page
 * description: >-
Find your trip page */
?>
<?php
get_header();
?>
<body>
<div class="sectionHeader">
  <div id="overlay">
  </div>
    <div id="other" class="headerPicWhoWeAre">
      <img class ="headerBanner" src="<?php echo wp_get_attachment_url(get_theme_mod('boat-findyourtrippage-callout-image')) ?>" alt="" id="other" />
    </div>
        <div class="textBlockUnanimated rightBlock">
          <h1><?php echo get_theme_mod('boat-findyourtrippage-callout-headline') ?></h1>
            <p><?php echo get_theme_mod('boat-findyourtrippage-callout-paragraph') ?></p>
        </div>
</div>

<div class="centerSection">
  <h2 class="centerSection"><?php echo get_theme_mod('boat-generaltripinfo-middle-callout-headline') ?></h2>
</div>

<div class="threeTiers" id="thirdSection">

    <div class="thirdBlock">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-pretrip-callout-image')) ?>" alt="" class="thirdImages thirdImagesAdjustFirst" />
      <div class="break"></div>
      <h2 class="centerh2"><?php echo get_theme_mod('boat-pretrip-callout-headline') ?></h2>          
      <div class="thirdTextContent thirdTextLeft">
          <a href="findYourTrip.html">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >Basecamping Gear List</span></button
          ></a>

          <a href="findYourTrip.html">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >Backpacking Gear List</span></button
          ></a>

          <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >here's a real in-depth FAQ for ya</span></button
          ></a>

        </div>

    </div>

    <div class="thirdBlock">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-gearinfo-callout-image')) ?>" alt="" class="thirdImages thirdImagesAdjust" />
        <div class="break"></div>
        <h2 class="centerh2"><?php echo get_theme_mod('boat-gearinfo-callout-headline') ?></h2>  
        
        <div class="thirdTextContent thirdTextLeft">
          <a href="findYourTrip.html">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >Waiver</span></button
          ></a>
        </div>

      </div>

    <div class="thirdBlock">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-standardboatforms-callout-image')) ?>" alt="" class="thirdImages thirdImagesAdjust" />
        <div class="break"></div>
        <h2 class="centerh2"><?php echo get_theme_mod('boat-standardboatforms-callout-headline') ?></h2>

        <div class="thirdTextContent thirdTextLeft">
          <a href="findYourTrip.html">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >Health Form</span></button
          ></a>
        </div>

    </div>

</div>

<div class="centerSection">
  <h2 class="centerSection"><?php echo get_theme_mod('boat-centerfindyourtripmiddle-callout-headline') ?></h2>
  <p><?php echo get_theme_mod('boat-centerfindyourtripmiddle-callout-paragraph') ?></p>
</div>

<div class="fourTiers" id="fourTiers">
    <div class="tiers" href="#upcomingTrip1">
    <div class="upcomingTrip1">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-upcomingtrips-tripone-callout-image')) ?>" alt="" class="tierPics" />
    <div class="tiers__trips">
      <h1 class="popupAdjust"><?php echo get_theme_mod('boat-upcomingtrips-callout-triponeheadline') ?></h1>
        <button class="tiersExpandedBtn closeModalExpanded none">X</button>
        <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-upcomingtrips-callout-triponeparagraph') ?>
        </p>
        </div>
    <div class="overlay1"></div>
    </div>
</div>

<div class="tiers" href="#upcomingTrip2">
    <div class="upcomingTrip2">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-upcomingtrips-triptwo-callout-image')) ?>" alt="" class="tierPics" />
    <div class="tiers__trips">
      <h1 class="popupAdjust"><?php echo get_theme_mod('boat-upcomingtrips-callout-triptwoheadline') ?></h1>
        <button class="tiersExpandedBtn closeModalExpanded none">X</button>
        <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-upcomingtrips-callout-triptwoparagraph') ?>
        </p>
        </div>
    <div class="overlay1"></div>
    </div>
    </div>

<div class="tiers" href="#upcomingTrip3">
    <div class="upcomingTrip3">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-upcomingtrips-tripthree-callout-image')) ?>" alt="" class="tierPics" />
    <div class="tiers__trips">
      <h1 class="popupAdjust"><?php echo get_theme_mod('boat-upcomingtrips-callout-tripthreeheadline') ?></h1>
        <button class="tiersExpandedBtn closeModalExpanded none">X</button>
        <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-upcomingtrips-callout-tripthreeparagraph') ?>
        </p>
        </div>
    <div class="overlay1"></div>
    </div>
    </div>

<div class="tiers" href="#upcomingTrip4">
    <div class="upcomingTrip4">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-upcomingtrips-tripfour-callout-image')) ?>" alt="" class="tierPics" />
    <div class="tiers__trips">
      <h1 class="popupAdjust"><?php echo get_theme_mod('boat-upcomingtrips-callout-tripfourheadline') ?></h1>
        <button class="tiersExpandedBtn closeModalExpanded none">X</button>
        <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-upcomingtrips-callout-tripfourparagraph') ?>
        </p>
        </div>
    <div class="overlay1"></div>
    </div>
    </div>

    <div class="tiers" href="#upcomingTrip5">
    <div class="upcomingTrip5">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-upcomingtrips-tripfive-callout-image')) ?>" alt="" class="tierPics" />
    <div class="tiers__trips">
      <h1 class="popupAdjust"><?php echo get_theme_mod('boat-upcomingtrips-callout-tripfiveheadline') ?></h1>
        <button class="tiersExpandedBtn closeModalExpanded none">X</button>
        <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-upcomingtrips-callout-tripfiveparagraph') ?>
        </p>
        </div>
    <div class="overlay1"></div>
    </div>
    </div>

    <div class="tiers" href="#upcomingTrip6">
    <div class="upcomingTrip6">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-upcomingtrips-tripsix-callout-image')) ?>" alt="" class="tierPics" />
    <div class="tiers__trips">
      <h1 class="popupAdjust"><?php echo get_theme_mod('boat-upcomingtrips-callout-tripsixheadline') ?></h1>
        <button class="tiersExpandedBtn closeModalExpanded none">X</button>
        <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-upcomingtrips-callout-tripsixparagraph') ?>
        </p>
        </div>
    <div class="overlay1"></div>
    </div>
    </div>

</div>
<?php get_footer(); ?>
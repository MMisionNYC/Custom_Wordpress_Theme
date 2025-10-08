<?php
/*
 * Template Name: Home
 * Post Type: post, page, event
 * description: >-
Default page */ 
?>
<?php
get_header();
?>
 <body>
    <!-- Introduction text on homepage -->
    <div class="firstSection">
      <div id="intro" class="intro">
<div class="intro impactStatement highlight"><?php echo get_theme_mod('boat-impact-callout-headline') ?></div>
<div class="intro impactStatement"><?php echo get_theme_mod('boat-stats-callout-text') ?>
        </div>
<div class="intro homeIntro"><?php echo get_theme_mod('boat-headline-callout-text') ?></div>
<div class="intro homeIntroTwo">
<span class="centerSome"><?php echo get_theme_mod('boat-headline-middle-callout-text') ?></span>
<span class="homeCapt"><?php echo get_theme_mod('boat-headline-end-callout-text') ?></span>
        </div>
        <a href="findYourTrip.html">
          <button class="intro btn enterSite" id="homepage">
            <span class="spanText">
            <?php echo get_theme_mod('boat-headline-button-callout-text') ?></span><i class="arrow right"></i></button></a>
      </div>
      <div id="overlay"></div>
      <div id="other" class="mySlides fade"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-hero-callout-image')) ?>" alt="" id="other" />
      </div>
      <div id="other" class="mySlides fade"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-hero-callout-image2')) ?>" alt="" id="other" />
      </div>
      <div id="other" class="mySlides fade"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-hero-callout-image3')) ?>" alt="" id="other" />
      </div>
      <div id="other" class="mySlides fade"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-hero-callout-image4')) ?>" alt="" id="other" />
      </div>
      <div id="other" class="mySlides fade"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-hero-callout-image5')) ?>" alt="" id="other" />
      </div>
      <!-- </section> -->
    </div>
    <div class="leftSection">
        <div class="homeMission pic"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-mission-callout-image')) ?>" alt=""class="homeMission pic" />
        <div class="textBlock">
<h1><?php echo get_theme_mod('boat-mission-callout-headline') ?></h1><h2><?php echo get_theme_mod('boat-mission-callout-text') ?></h2><h1>
<p>
<?php echo get_theme_mod('boat-mission-callout-paragraph') ?>
          </p>
        </div>
      </div>
      </div>
    <div class="centerSection">
      <h2 class="centerSection">
      <?php echo get_theme_mod('boat-strategy-center-callout-text') ?>
      </h2>
    </div>
    <div class="thirdSection" id="thirdSection">
      <div class="thirdBlock">
<img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-strategy-callout-image')) ?>" alt="" class="thirdImages thirdImagesAdjustFirst" />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextLeft">
<h2><?php echo get_theme_mod('boat-strategy-callout-transportationheadline') ?></h2>
          <p><?php echo get_theme_mod('boat-strategy-callout-transportationparagraph') ?>
          </p>
        </div>
      </div>

      <div class="thirdBlock">
<img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-knowledge-callout-image')) ?>" alt="" class="thirdImages thirdImagesAdjust"/>
        <div class="break"></div>

        <div class="thirdTextContent thirdMargin">
<h2><?php echo get_theme_mod('boat-strategy-callout-knowledgeheadline') ?></h2>
          <p>
<?php echo get_theme_mod('boat-strategy-callout-knowledgeparagraph') ?>

          </p>
        </div>
      </div>
      <div class="thirdBlock">
<img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-planning-callout-image')) ?>" alt="" class="thirdImages thirdImagesAdjust"/>
        <div class="break"></div>

        <div class="thirdTextContent thirdTextRight">
<h2><?php echo get_theme_mod('boat-strategy-callout-planningheadline') ?></h2>
          <p><?php echo get_theme_mod('boat-strategy-callout-planningparagraph') ?></p>
        </div>
      </div>
    </div>
        <div class="highlight impactStatement none">Find your trip</div>
    <div class="fourTiers" id="fourTiers">
        <div class="tiers" href="#outdoorClass">
        <div class="outdoorClass"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-findyourtrip-outdoor-callout-image')) ?>" alt="" class="tierPics" />
        <div class="tiers__trips">
<h1 class="popupAdjust"><?php echo get_theme_mod('boat-findyourtrip-callout-outdoorheadline') ?>
          <button class="tiersExpandedBtn closeModalExpanded none">X</button></h1>
          <p class="tiers__trips__paragraphBlock none">
<?php echo get_theme_mod('boat-findyourtrip-callout-outdoorparagraph') ?>
          </p>
        </div>
        <div class="overlay1">
        </div>
      </div>
      </div>
        <div class="tiers" href="#expedition">
        <div class="expedition">
<img class="tierPics" src="<?php echo wp_get_attachment_url(get_theme_mod('boat-findyourtrip-expedition-callout-image')) ?>" alt=""/>
        <div class="tiers__trips">
        <h1 class="popupAdjust"><?php echo get_theme_mod('boat-findyourtrip-callout-expeditionheadline') ?>
          <button class="tiersExpandedBtn closeModalExpanded none">X</button></h1>
          <p class="tiers__trips__paragraphBlock none">
<?php echo get_theme_mod('boat-findyourtrip-callout-expeditionparagraph') ?>
          </p>
        </div>
        <div class="overlay1"></div></div></div>
        <div class="tiers" href="#baseCamp">
          <div class="baseCamp">
<img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-findyourtrip-basecamp-callout-image')) ?>" alt="" class="tierPics" />
        <div class="tiers__trips">
<h1 class="popupAdjust"><?php echo get_theme_mod('boat-findyourtrip-callout-basecampheadline') ?>
          <button class="tiersExpandedBtn closeModalExpanded none">X</button></h1>
          <p class="tiers__trips__paragraphBlock none"><?php echo get_theme_mod('boat-findyourtrip-callout-basecampparagraph') ?>
          </p>
        </div>
        <div class="overlay1"></div></div></div>
        <div class="tiers" href="#adventureRoadTrip">
      <div class="adventureRoadTrip">
<img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-findyourtrip-adventure-callout-image')) ?>" alt=""class="tierPics" />
        <div class="tiers__trips">
<h1 class="popupAdjust"><?php echo get_theme_mod('boat-findyourtrip-callout-adventureheadline') ?>
          <button class="tiersExpandedBtn closeModalExpanded none">X</button></h1>
          <p class="tiers__trips__paragraphBlock none">
<?php echo get_theme_mod('boat-findyourtrip-callout-adventureparagraph') ?></p>
        </div>
        <div class="overlay1"></div></div></div>
    </div>
      <div class="centerSection">
<h1 class="centerSection"><?php echo get_theme_mod('boat-partners-callout-headline') ?></h1>
<p class="paragraphBlock"><?php echo get_theme_mod('boat-partners-callout-paragraph') ?></p>
        <div class="centerBlock">
          <div class="partner1"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-partners-callout-image')) ?>" alt=""></div>
          <div class="partner2"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-partners2-callout-image')) ?>" alt=""></div>
          <div class="partner2"><img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-partners3-callout-image')) ?>" alt=""></div>
      </div>
    <div class="leftSection">
      <div class="beingOutside pic">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-beingoutside-callout-image')) ?>" alt="" class="beingOutside pic" />

      </div>
      <!-- <section class="section"> -->
      <div class="textBlock">
      <h1><?php echo get_theme_mod('boat-beingoutside-callout-headline') ?></h1>
        <p>
        <?php echo get_theme_mod('boat-beingoutside-callout-paragraph') ?>

        </p>
        <!-- </section> -->
      </div>

      <!-- <section class="section"> -->
      <!-- <div class="homeMiddle"> -->
      <!-- </div> -->
    </div>
    <div class="centerBlock">
      <div class="health">
        <h2 class="centerBlock"><?php echo get_theme_mod('boat-benefitstier-callout-headline') ?></h2>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-benefitstier-callout-image')) ?>" alt=""/>
      </div>
      <div class="betterLearning">
      <h2 class="centerBlock"><?php echo get_theme_mod('boat-benefitstier2-callout-headline') ?></h2>
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-benefitstier2-callout-image')) ?>" alt=""/>

      </div>
      <div class="lastingImpacts">
      <h2 class="centerBlock"><?php echo get_theme_mod('boat-benefitstier3-callout-headline') ?></h2>
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-benefitstier3-callout-image')) ?>" alt=""/>

      </div>
    </div>
    <div class="fifthSection">
      <div class="easier pic">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-easier-callout-image')) ?>" alt="" class="easier pic" />

      </div>
      <div class="rightTextBlock">
      <h1><?php echo get_theme_mod('boat-easier-callout-headline') ?></h1>
     <p> <?php echo get_theme_mod('boat-easier-callout-paragraph') ?>
</p>
      </div>
    </div>
    <div class="centerBlock">
      <div class="health">
      <h2 class="centerBlock"><?php echo get_theme_mod('boat-firstbenefitstier2-callout-headline') ?></h2>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-firstbenefitstier2-callout-image')) ?>" alt=""/>
      </div>
      <div class="betterLearning">
      <h2 class="centerBlock"><?php echo get_theme_mod('boat-secondbenefitstier2-callout-headline') ?></h2>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-secondbenefitstier2-callout-image')) ?>" alt=""/>
      </div>
      <div class="lastingImpacts">
      <h2 class="centerBlock"><?php echo get_theme_mod('boat-thirdbenefitstier2-callout-headline') ?></h2>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-thirdbenefitstier2-callout-image')) ?>" alt=""/>      </div>
    </div>
    <!-- <div class="sixthSection">
      <div class="sixthSection__textBlock__fourthTextBlock">
        <h2>Sign Up Now!</h2>
        <a href="work.html">
          <button class="btn enterSite">
            <span class="spanText load">Find my trip</span>
          </button>
        </a>
        <a href="work.html">
          <button class="btn enterSite">
            <span class="spanText load">Set up a trip for my organization</span>
          </button>
        </a>
      </div>
      <div class="homeFourth">
        <img src="src/img/signUp.jpg" class="homeFourth" />
      </div>
    </div> -->
    <div class="leftSection leftSectionHeader">
      <div class="onTheMove pic">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-move-callout-image')) ?>" alt="" class="onTheMove pic" />

      </div>
      <!-- <section class="section"> -->
      <div class="textBlock textBlockDark">
      <h1><?php echo get_theme_mod('boat-move-callout-headline') ?></h1>
        <p class="textBlockDarkPara">
        <?php echo get_theme_mod('boat-move-callout-paragraph') ?>        </p>
        <!-- </section> -->
      </div>
      <!-- <div class="homeMiddle"> -->
      <!-- </div> -->
    </div>
    <iframe src="https://www.google.com/maps/d/embed?mid=10v9QnUy5KZ7z8zfz2HEvMh63Q2BHn5hZ&ehbc=2E312F" width="100%" height="500"></iframe>
    <div class="onBoard">
      <div class="onBoardPic">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-onboard-callout-image')) ?>" alt="" class="onBoardPic" />

      </div>

      <!-- <section class="section"> -->

      <div class="footerInfo">
        <div class=" footerGet"><?php echo get_theme_mod('boat-onboard-callout-headline') ?></div>
        <div class="intro homeCapt load"><?php echo get_theme_mod('boat-onboard-callout-headline-second') ?></div>
        <p class="footerContent"><?php echo get_theme_mod('boat-onboard-callout-paragraph') ?></p>
        <form class="planATripForm">
          <div class="fillForm">
            <label for="emailSignUp">Your email:</label><br />
            <input type="text" id="emailSignUp" name="emailSignUp" /><br />
        </form>
        <a href="findYourTrip.html">
          <button class="btn onBoard">
            <span class="spanText"
              >Submit<i class="arrow right"></i
            ></span></button
        ></a>
      </div>
      </div>
      <div id="overlayFooter"></div>
      </div>
<?php get_footer(); ?>
</html>
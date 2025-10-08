<?php
/*
 * Template Name: Support Our Mission
 * description: >-
Support our mission page */ 
?>
<?php
get_header();
?>
 <body>
 <div class="sectionHeader">
      <div class="supportourmission">
      <img class ="headerBanner" src="<?php echo wp_get_attachment_url(get_theme_mod('boat-supportourmission-callout-image')) ?>" 
      </div>
        <div class="textBlockUnanimated rightBlock">
          <h1><?php echo get_theme_mod('boat-supportourmission-callout-headline') ?>
          </h1>
          <p>
          <?php echo get_theme_mod('boat-supporttourmission-callout-paragraph') ?>
          </p>
        </div>
      </div>
    </div>
    <div class="thirdSection" id="thirdSection">
      <div class="thirdBlock">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-financialsupport-callout-image')) ?>" 
          class="thirdImages thirdImagesAdjustFirst"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextLeft">
          <a href="findYourTrip.html">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >support us financially</span></button
          ></a>
        </div>
      </div>

      <div class="thirdBlock">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-volunteer-callout-image')) ?>" 
          class="thirdImages thirdImagesAdjust"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdMargin">
          <a href="findYourTrip.html">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >become a volunteer</span></button
          ></a>
        </div>
      </div>
      <div class="thirdBlock">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-workforboat-callout-image')) ?>" 
          class="thirdImages thirdImagesAdjustLast"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextRight">
          <a href="findYourTrip.html">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText"
                >work for BOAT</span></button
          ></a>
        </div>
      </div>
    </div>
    <div class="leftSection">
      <div class="wishlist pic">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-wishlist-callout-image')) ?>" />
      </div>
      <!-- <section class="section"> -->
      <div class="textBlock">
      <h1><?php echo get_theme_mod('boat-wishlist-callout-headline') ?></h1>
        <p>
        <?php echo get_theme_mod('boat-wishlist-callout-paragraph') ?>

        </p>
        <a href="https://docs.google.com/presentation/d/1OIFKovSoKNvzT-6SGBUt9k18g8uRgU6hnEpirexaV_Q/edit?usp=sharing">
          <button class="intro btn enterSite" id="homepage">
            <span class="spanText"
              >View the Wishlist<i class="arrow right"></i
            ></span></button
        ></a>
        <!-- </section> -->
      </div>
      <!-- <div class="homeMiddle"> -->
      <!-- </div> -->
    </div>
    <div class="fifthSection">
      <div class="donate pic">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-donate-callout-image')) ?>" />

      </div>
      <div class="rightTextBlock">
      <h1><?php echo get_theme_mod('boat-donate-callout-headline') ?></h1>
        <p>
        <?php echo get_theme_mod('boat-donate-callout-paragraph') ?>
        </p>
        <a href="https://www.paypal.com/us/fundraiser/charity/3363727">
          <button class="intro btn enterSite" id="homepage">
            <span class="spanText"
              >Donate<i class="arrow right"></i
            ></span></button
        ></a>
      </div>
    </div>
<?php get_footer(); ?>
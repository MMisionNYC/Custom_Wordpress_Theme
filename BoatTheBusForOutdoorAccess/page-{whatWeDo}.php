<?php
/*
 * Template Name: What We Do
 * description: >-
What we do page */ 
?>
<?php
get_header();
?>
 <body>
 <div class="sectionHeader">
      <div class="headerPic">
      <img class ="headerBanner" src="<?php echo wp_get_attachment_url(get_theme_mod('boat-partnership-callout-image')) ?>"
      </div>
      <div class="textBlockUnanimated rightBlock">
        <h1><?php echo get_theme_mod('boat-partnership-callout-headline') ?></h1>
        <p>
        <?php echo get_theme_mod('boat-partnership-callout-paragraph') ?>

        </p>
      </div>
    </div>
  </div>
    <div class="leftSection">
      <div class="differentPrograms pic">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-differentprograms-callout-image')) ?>" />
      <!-- <section class="section"> -->
      <div class="textBlock">
        <h1><?php echo get_theme_mod('boat-differentprograms-callout-headline') ?></h1>
        <h2>
        <?php echo get_theme_mod('boat-differentprograms-callout-text') ?>
        </h2>
        <p>
        <?php echo get_theme_mod('boat-differentprograms-callout-paragraph') ?>

        </p>
        <!-- </section> -->
      </div></div>
      <!-- <div class="homeMiddle"> -->
      <!-- </div> -->
    </div>
    <div class="fourTiers" id="fourTiers">
      <div class="tiersExpanded" href="#outdoorClassroom2">
      <div class="outdoorClassroom2">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-outdoor-callout-image')) ?>"class="outdoorClassroom2" />
        <div class="tiers__trips">
        <!-- TITLE OF SECTION -->
          <h1 class="popupAdjust"><?php echo get_theme_mod('boat-programsdetailed-callout-outdoorheadline') ?></h1>
          <button class="tiersExpandedBtn closeModalExpanded whatWeDo none">X</button>
          <!-- FIRST SECONDARY HEADER -->
          <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-outdoor-callout-text') ?></h2>
          <!-- FIRST PARAGRAPH -->
          <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-programsdetailed-callout-outdoorparagraph') ?>
          </p>
        </div>
        <div class="overlay1"></div></div>  
      <div class="additional baseCamp2 pic none">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-outdoorexpanded-callout-image')) ?>" />

        <div class="tiers__tripsAdditional">
          <!-- SECOND SECONDARY HEADER -->
        <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-outdoorexpanded-callout-text') ?></h2>
        <!-- SECOND PARAGRAPH -->
        <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-programsdetailed-callout-outdoorexpanded-outdoorparagraph') ?>
          </p>
      </div>
      </div>
      </div>
      <div class="tiersExpanded" href="#expedition2">
        <div class="expedition2">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-expedition-callout-image')) ?>" />
        <div class="tiers__trips">
            <!-- TITLE OF SECTION -->
          <h1 class="popupAdjust"><?php echo get_theme_mod('boat-programsdetailed-callout-expeditionheadline') ?></h1>
          <button class="tiersExpandedBtn closeModalExpanded whatWeDo none">X</button>         
          <!-- FIRST SECONDARY HEADER  -->
          <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-callout-expeditionsecondaryheader') ?></h2>
          <!-- FIRST PARAGRAPH -->
          <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-programsdetailed-callout-expeditionparagraph') ?>
          </p>
        </div>
        <div class="overlay1"></div></div>  
              <div class="additional expedition3 pic none">
              <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-expeditionexpanded-callout-image')) ?>" />

                <div class="tiers__tripsAdditional">

                  <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-expeditionexpanded-callout-text') ?></h2>
        <p><?php echo get_theme_mod('boat-programsdetailed-callout-expeditionexpanded-expeditionparagraph') ?></p>
        </div>
      </div>
      </div>
   <div class="tiersExpanded" href="#baseCamp2">
      <div class="baseCamp2">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-basecamp-callout-image')) ?>" />
        <div class="tiers__trips">
          <h1 class="popupAdjust"><?php echo get_theme_mod('boat-programsdetailed-callout-basecampheadline') ?></h1>
          <button class="tiersExpandedBtn closeModalExpanded whatWeDo none">X</button>          
          <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-basecamp-callout-text') ?></h2>
          <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-programsdetailed-callout-basecampparagraph') ?>
          </p>
        </div>
        <div class="overlay1"></div></div>  
      <div class="additional baseCamp2 pic none">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-basecampexpanded-callout-image')) ?>" />

        <div class="tiers__tripsAdditional">
        <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-basecampexpanded-callout-text') ?></h2>
        <p><?php echo get_theme_mod('boat-programsdetailed-callout-basecampexpanded-basecampparagraph') ?></p>
        </div>
      </div>
      </div>
      <div class="tiersExpanded" href="#adventureRoadTrip2">
      <div class="adventureRoadTrip2">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-adventure-callout-image')) ?>" />
        <div class="tiers__trips">
          <h1 class="popupAdjust"><?php echo get_theme_mod('boat-programsdetailed-callout-adventureheadline') ?></h1>
          <button class="tiersExpandedBtn closeModalExpanded whatWeDo none">X</button>          
          <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-adventure-callout-text') ?></h2>
          <p class="tiers__trips__paragraphBlock none">
          <?php echo get_theme_mod('boat-programsdetailed-callout-adventureparagraph') ?>
          </p>
      </div>
      <div class="overlay1"></div></div>  
      <div class="additional baseCamp2 pic none">
      <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-programsdetailed-adventureexpanded-callout-image')) ?>" />

        <div class="tiers__tripsAdditional">
        <h2 class="none"><?php echo get_theme_mod('boat-programsdetailed-adventureexpanded-callout-text') ?></h2>
        <p><?php echo get_theme_mod('boat-programsdetailed-callout-adventureexpanded-adventureparagraph') ?></p>

        </div>
      </div>
      </div>
    </div>
<?php get_footer(); ?>
</html>
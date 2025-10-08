<?php
/*
 * Template Name: Who We Are
 * description: >-
Who We Are page */ ?>
<?php
get_header();
?>
 <body>
 <div class="sectionHeader">

 <div id="overlay"></div>
      <div id="other">
      <img class ="headerBanner" src="<?php echo wp_get_attachment_url(get_theme_mod('boat-whoweare-callout-image')) ?>" alt="" id="other" />
      </div>
      <div class="textBlockUnanimated rightBlock">
      <h1><?php echo get_theme_mod('boat-whoweare-callout-headline') ?></h1>
        <p>
        <?php echo get_theme_mod('boat-whoweare-callout-paragraph') ?>
        </p>
      </div>
    </div>
</div>
    <div class="centerSection">
      <h2>why is it hard to get outside?</h2>
      <p>
        There isn’t some secret behind why people struggle to get outside –
        there are four main barriers to the outdoors.
      </p>
    </div>
    <div class="fourTiers" id="fourTiers">
      <div class="tiers" href="#logistics">
        <div class="logistics">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-gettingoutside-logistics-callout-image')) ?>" alt="" class="logistics" /> 
          <div class="tiers__trips">
            <h1 class="popupAdjust"><?php echo get_theme_mod('boat-gettingoutside-callout-logisticsheadline') ?></h1>
            <button class="tiersExpandedBtn closeModalExpanded none whoWeAre">X</button>
            <p class="tiers__trips__paragraphBlock none">
            <?php echo get_theme_mod('boat-gettingoutside-callout-logisticsparagraph') ?>
            </p>
            </div>

        <div class="overlay1"></div></div></div>
      <div class="tiers" href="#cost">
        <div class="cost">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-gettingoutside-cost-callout-image')) ?>"   alt="" class="cost" /> 
          <div class="tiers__trips">
            <h1 class="popupAdjust"><?php echo get_theme_mod('boat-gettingoutside-callout-costheadline') ?></h1>
            <button class="tiersExpandedBtn closeModalExpanded none whoWeAre">X</button>
            <p class="tiers__trips__paragraphBlock none">
            <?php echo get_theme_mod('boat-gettingoutside-callout-costparagraph') ?>
            </p>
            </div>
            <div class="overlay1"></div></div></div>      
            <div class="tiers" href="#knowledge">
        <div class="knowledge">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-gettingoutside-knowledge-callout-image')) ?>" alt="" class="knowledge" />  
          <div class="tiers__trips">
            <h1 class="popupAdjust"><?php echo get_theme_mod('boat-gettingoutside-callout-knowledgeheadline') ?></h1>
            <button class="tiersExpandedBtn closeModalExpanded none whoWeAre">X</button>
            <p class="tiers__trips__paragraphBlock none">
            <?php echo get_theme_mod('boat-gettingoutside-callout-knowledgeparagraph') ?>
            </p>
            </div>
        <div class="overlay1"></div></div></div>
      <div class="tiers" href="#visibility">
        <div class="visibility">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-gettingoutside-visibility-callout-image')) ?>"  alt="" class="visibility" /> 
          <div class="tiers__trips">
            <h1 class="popupAdjust"><?php echo get_theme_mod('boat-gettingoutside-callout-visibilityheadline') ?></h1>
            <button class="tiersExpandedBtn closeModalExpanded none whoWeAre">X</button>
            <p class="tiers__trips__paragraphBlock none">
            <?php echo get_theme_mod('boat-gettingoutside-callout-visibilityparagraph') ?>
            </p>
</div>
            <div class="overlay1"></div></div></div>
</div>
    <div class="thirdSection">
      <div class="bigRed pic">
        <!-- <section class="section"> -->
        <div class="textBlock">
          <h1><?php echo get_theme_mod('boat-bigred-callout-headline') ?></h1>
          <h2><?php echo get_theme_mod('boat-bigred-callout-text') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-bigred-callout-paragraph') ?>
            <a href="work.html">
              <button class="intro btn enterSite">
                <span class="spanText"
                  >why the wilderness?<i class="arrow right"></i
                ></span></button
            ></a>
          </p>
        </div>
        <!-- </section> -->
      </div>
      <!-- <div class="homeMiddle"> -->
      <!-- </div> -->
    </div>
    <div class="centerSection">
      <h2 class="centerSection"><?php echo get_theme_mod('boat-centerwhoarewe-callout-headline') ?></h2>
      <p class="paragraphBlock">
      <?php echo get_theme_mod('boat-centerwhoarewe-callout-paragraph') ?>
      </p>
    </div>
    <div class="thirdSection" id="thirdSection">
      <div class="thirdBlock">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-employees1-callout-image')) ?>"
          class="thirdImages thirdImagesAdjustFirst"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextLeft">
          <h2><?php echo get_theme_mod('boat-employees1-callout-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-employees1-callout-paragraph') ?>
          </p>
        </div>
      </div>

      <div class="thirdBlock">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-employees2-callout-image')) ?>"
          class="thirdImages thirdImagesAdjust"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdMargin">
          <h2><?php echo get_theme_mod('boat-employees2-callout-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-employees2-callout-paragraph') ?>

          </p>
        </div>
      </div>
      <div class="thirdBlock">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-employees3-callout-image')) ?>"
          class="thirdImages thirdImagesAdjustLast"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextRight">
          <h2><?php echo get_theme_mod('boat-employees3-callout-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-employees3-callout-paragraph') ?>

          </p>
        </div>
      </div>
    </div>
    <div class="thirdSection" id="thirdSection">
      <div class="thirdBlockSecondRow">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-employees4-callout-image')) ?>"
          class="thirdImagesSecondRow thirdImagesAdjustLast"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextRight">
          <h2><?php echo get_theme_mod('boat-employees4-callout-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-employees4-callout-paragraph') ?>

          </p>
        </div>
      </div>
      <div class="thirdBlockSecondRow">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-employees5-callout-image')) ?>"
          class="thirdImagesSecondRow thirdImagesAdjustLast"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextRight">
          <h2><?php echo get_theme_mod('boat-employees5-callout-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-employees5-callout-paragraph') ?>

          </p>
        </div>
      </div>
      <div class="thirdBlockSecondRow">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-employees6-callout-image')) ?>"
          class="thirdImagesSecondRow thirdImagesAdjustLast"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextRight">
          <h2><?php echo get_theme_mod('boat-employees6-callout-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-employees6-callout-paragraph') ?>

          </p>
        </div>
      </div>
      <div class="thirdBlockSecondRow">
        <img
          src="<?php echo wp_get_attachment_url(get_theme_mod('boat-employees7-callout-image')) ?>"
          class="thirdImagesSecondRow thirdImagesAdjustLast"
        />
        <div class="break"></div>

        <div class="thirdTextContent thirdTextRight">
          <h2><?php echo get_theme_mod('boat-employees7-callout-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-employees7-callout-paragraph') ?>

          </p>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
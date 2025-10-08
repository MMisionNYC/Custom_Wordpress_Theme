<?php
/*
 * Template Name: Plan a trip
 * description: >-
Plan a trip page */ 
?>
<?php
get_header();
?>
 <body>
 <div class="sectionHeader">
    <div class="planATrip">
    <img class ="headerBanner" src="">
    </div>
      <div class="textBlockUnanimated rightBlock">
          <h1><?php echo get_theme_mod('boat-planatrip-callout-headline') ?></h1>
          <h2><?php echo get_theme_mod('boat-planatrip-callout-second-headline') ?></h2>
          <p>
          <?php echo get_theme_mod('boat-planatrip-callout-paragraph') ?>
          </p>
    </div>
  </div>
    <div class="formSection">
    <div class="leftImages" id="fourTiers">
      <div class="planATrip1">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('boat-planatrip-callout-image-section-image1')) ?>"  href="#outdoorClass"/>
    </div>
      <div class="planATrip1" href="#outdoorClass">
        <div class="overlay1"></div>
      </div>
      <div class="planATrip2" href="#outdoorClass">
        <div class="overlay1"></div>
      </div>
      <div class="planATrip3" href="#outdoorClass">
        <div class="overlay1"></div>
      </div>
      <div class="planATrip4" href="#outdoorClass">
        <div class="overlay1"></div>
      </div>
      <div class="planATrip5" href="#outdoorClass">
        <div class="overlay1"></div>
      </div>
      <div class="planATrip6" href="#outdoorClass">
        <div class="overlay1"></div>
      </div>
      </div>
      <div class="rightForm">
      <h1>Trip Proposal</h1><h2>Fields marked with an * are required</h2>
      <form action="mailto:melissamision@gmail.com" method="post" enctype="text/plain"class="planATripForm" >
        <!-- <a href="mailto:melissamision@gmail.com"></a> -->
        <div class="fillForm">
        <label for="fname">First Name*</label><br>
        <input type="text" id="fname" name="fname" required><br></div>
        <div class="fillForm">
        <label for="lname">Last Name*</label><br>
        <input type="text" id="lname" name="lname" required><br></div>
        <div class="fillForm">
        <label for="email">Email*</label><br>
        <input type="text" id="email" name="email" required><br></div>
        <div class="fillForm">

        <label for="address">Address</label><br>
        <input type="text" id="address" name="address"><br></div>
        <div class="fillForm">

        <label for="city">City</label><br>
        <input type="text" id="city" name="city"><br><br></div>

        <h1 class="headerForm">The Essentials</h1><h2>We use this information to generate a price estimate for ya! </h2>
            <div class="fillForm">
          <label for="organization">Organization/Group</label><p class="formParagraph">BOAT typically runs trips for groups - it doesn't need to be a formal organization though! Feel free to leave it blank if it doesn't feel right.</p>
          <input type="text" id="organization" name="organization"></div>
          <div class="fillForm">

          <label for="participants">Number of Participants*
          </label><p class="formParagraph">Estimates are OK! Larger trips cost more overall, but cost significantly less per person.</p>
          <input type="text" id="participants" name="participants" required></div>
          <div class="fillForm">

          <label for="days">Number of Days*</label><p class="formParagraph">Estimates are OK! Longer trips cost more overall, but cost significantly less per day.</p>
          <input type="text" id="days" name="days" required></div>
          <div class="fillForm">

          <label for="start">Proposed Start Location*</label>
          <p class="formParagraph">If you have a specific address, great! Otherwise a city or neighborhood is fine - we'll find a place that can work well. 
          </p>
          <input type="text" id="start" name="start" required></div>
          <div class="fillForm">

          <label for="where">Where do you want to go?</label>
            <p class="formParagraph">You don't need a place in mind - that's what we're here for. But if you do, feel free to share! 
            </p>
          <input type="text" id="where" name="where"></div>
          <h1 class="headerForm">The Extras</h1><h2>This will help us come up with a better set of ideas for you. 
        </h2>
          <div class="fillForm">
        <label for="budget">Estimated Budget</label>
        <p class="formParagraph">If you have one, great! It'll help us understand the kind of program we can offer. If you don't (or just don't have a clue what a camping trip costs!) we'll give you a quote based on the above and break it all down for you.</p>
        <input type="text" id="budget" name="budget"></div>
        <div class="fillForm">

        <label for="quote">How do you want your quote?
        </label><p class="formParagraph">The actual cost doesn't change - different groups pay different ways, and we try to accomodate that. We can set up individual payment systems or work with your organization on payment.</p>
        <input type="text" id="quote" name="quote"></div>
        <div class="fillForm">

        <label for="themes">Trip Themes & Educational Elements</label><p class="formParagraph">Also optional, but if there is a particular set of workshops or similar you're looking for, we'd love to know! Feel free to browse details here.</p>
        <input type="text" id="themes" name="themes"></div>
        <div class="fillForm">

        <label for="additional">Anything else you want us to know or think about?</label><p class="formParagraph">Yup, literally anything at all!</p>
        <input type="text" id="additional" name="additional"></div>
                <input type="submit" id ="submitForm" class="intro btn enterSite inactiveBtn">

        <!-- <input type="submit" id ="submitForm" value="submit" onsubmit="return validateForm()" class="intro btn enterSite inactiveBtn"> -->
      </form>
      </div>
    </div>
<?php get_footer(); ?>
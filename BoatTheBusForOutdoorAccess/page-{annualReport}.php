<?php
/*
 * Template Name: Annual Report
 * description: >-
Annual report page */ 
?>
<?php
get_header();
// add_css();

//uncommented the below - interesting, it will already run without being called when enqueued in the functions.php file
// boatTheBusForOutdoorAccess_currentPage();
// add_script();
?>
<body>
<div class="sectionHeader">
        <div class="annualReport">
     <img class ="headerBanner" src="<?php echo wp_get_attachment_url(get_theme_mod( 'boat-annualreport-callout-image')) ?>" />
      </div>
      <div class="textBlockUnanimated rightBlock">
      <h1><?php echo get_theme_mod('boat-annualreport-callout-headline') ?>
    </h1>
        <p><a href="https://drive.google.com/file/d/1Vapxlp-5_y_MpRUFZllO7XojiHKuDVwa/view">
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText">2022</span>
            </button></a>
          <a
            href="https://theboatbus.com/wp-content/uploads/2022/01/BOAT-Annual-Report-2020-2021.pdf?189db0&189db0"
          >
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText">2020-2021</span>
            </button></a
          ><br />
          <a
            href="https://theboatbus.com/wp-content/uploads/2022/01/BOAT-Annual-Report-2019.pdf?189db0&189db0"
          >
            <button class="intro btn enterSite" id="homepage">
              <span class="spanText">2019</span>
            </button></a
          >
        </p>
      </div>
    </div>
<?php get_footer(); 
?>
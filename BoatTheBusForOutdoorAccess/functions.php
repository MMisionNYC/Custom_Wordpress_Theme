<?php
/**
 *  * Functions and definitions
 */

//  $themeIncPath = (get_template_directory_uri() . '/includes');
// $themeIncPath = require_once dirname( __FILE__ ) . '/includes';
 
function add_css()
 {
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'style', null, true);
 }
 add_action('wp_enqueue_scripts', 'add_css');

 function add_script()
{
   wp_register_script( 'js-script', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery'), 
   null, true );
   wp_enqueue_script( 'js-script', null, true);
}
add_action('wp_footer', 'add_script');
add_theme_support( 'menus' );


//Homepage functions
add_action('customize_register', 'boat_homehero_customize_register');

function boat_homehero_customize_register($wp_customize) {
   $wp_customize->add_section('boat-homehero-callout-section', array ('title' => 'Homepage Hero Section'));

   $wp_customize->add_setting('boat-hero-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-hero-callout-image-control', array (
   'label' => 'Slideshow Image 1',
   'section' => 'boat-homehero-callout-section',
   'settings' => 'boat-hero-callout-image',
   'height' => 1080,
   'width' => 1920,
   'active_callback' => 'boat_home_callout_image_on_condition'
   )));
   
   $wp_customize->add_setting('boat-hero-callout-image2');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-hero-callout-image2-control', array (
   'label' => 'Slideshow Image 2',
   'section' => 'boat-homehero-callout-section',
   'settings' => 'boat-hero-callout-image2',
   'height' => 1080,
   'width' => 1920,
   'active_callback' => 'boat_home_callout_image_on_condition'   
   )));
   
   $wp_customize->add_setting('boat-hero-callout-image3');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-hero-callout-image3-control', array (
   'label' => 'Slideshow Image 3',
   'section' => 'boat-homehero-callout-section',
   'settings' => 'boat-hero-callout-image3',
   'height' => 1080,
   'width' => 1920,
   'active_callback' => 'boat_home_callout_image_on_condition'   
   )));

   $wp_customize->add_setting('boat-hero-callout-image4');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-hero-callout-image4-control', array (
   'label' => 'Slideshow Image 4',
   'section' => 'boat-homehero-callout-section',
   'settings' => 'boat-hero-callout-image4',
   'height' => 1080,
   'width' => 1920,
   'active_callback' => 'boat_home_callout_image_on_condition'
   )));

   $wp_customize->add_setting('boat-hero-callout-image5');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-hero-callout-image5-control', array (
   'label' => 'Slideshow Image 5',
   'section' => 'boat-homehero-callout-section',
   'settings' => 'boat-hero-callout-image5',
   'height' => 1080,
   'width' => 1920,
   'active_callback' => 'boat_home_callout_image_on_condition'
   
   )));
   
   $wp_customize->add_setting('boat-impact-callout-headline', array(
   'default' => 'BOATs impact'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-impact-callout-headline-control', array (
   'label' => 'Text',
   'section' => 'boat-homehero-callout-section',
   'settings' => 'boat-impact-callout-headline',
   'type' => 'textarea',
   'active_callback' => 'boat_home_callout_image_on_condition'
   )));
   
   $wp_customize->add_setting('boat-stats-callout-text', array (
   'default' => 'Trips Run: 53 <br/>Individuals Outside: 1153 <br/>Individual Days of Camping: 2366'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-stats-callout-text-control', array (
   'label' => 'Text',
   'section' => 'boat-homehero-callout-section',
   'settings' => 'boat-stats-callout-text',
   'type' => 'textarea',
   'sanitize_callback' => 'sanitize_text_field',
   'active_callback' => 'boat_home_callout_image_on_condition'
   
   )));
      
   $wp_customize->add_setting('boat-headline-callout-text', array (
      'default' => 'from front doors'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-headline-callout-text-control', array (
      'label' => 'Text',
      'section' => 'boat-homehero-callout-section',
      'settings' => 'boat-headline-callout-text',
      'type' => 'textarea',
      'sanitize_callback' => 'sanitize_text_field',
      'active_callback' => 'boat_home_callout_image_on_condition'
      
      )));
      $wp_customize->add_setting('boat-headline-middle-callout-text', array (
         'default' => 'to'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-headline-middle-callout-text-control', array (
         'label' => 'Text',
         'section' => 'boat-homehero-callout-section',
         'settings' => 'boat-headline-middle-callout-text',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         
         )));
         $wp_customize->add_setting('boat-headline-end-callout-text', array (
            'default' => 'outdoors'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-headline-end-callout-text-control', array (
            'label' => 'Text',
            'section' => 'boat-homehero-callout-section',
            'settings' => 'boat-headline-end-callout-text',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'
            
            )));

            $wp_customize->add_setting('boat-headline-button-callout-text', array (
               'default' => 'find your trip '
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-headline-button-callout-text-control', array (
               'label' => 'Text',
               'section' => 'boat-homehero-callout-section',
               'settings' => 'boat-headline-button-callout-text',
               'type' => 'textarea',
               'sanitize_callback' => 'sanitize_text_field',
               'active_callback' => 'boat_home_callout_image_on_condition'
               )));

   }

   add_action('customize_register', 'boat_mission_customize_register');

   
   function boat_mission_customize_register($wp_customize) {

      $wp_customize->add_section('boat-mission-callout-section', array ('title' => 'Boats Mission'));

      $wp_customize->add_setting('boat-mission-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-mission-callout-image-control', array (
      'label' => 'Hero Image',
      'section' => 'boat-mission-callout-section',
      'settings' => 'boat-mission-callout-image',
      'height' => 590,
      'width' => 1920,
      'active_callback' => 'boat_home_callout_image_on_condition'      
      )));

      $wp_customize->add_setting('boat-mission-callout-headline', array(
         'default' => 'BOATs mission'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-mission-callout-headline-control', array (
         'section' => 'boat-mission-callout-section',
         'settings' => 'boat-mission-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
         $wp_customize->add_setting('boat-mission-callout-text', array (
         'default' => 'is to get other organizations missions outside.'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-mission-callout-text-control', array (
         'label' => 'Secondary header',
         'section' => 'boat-mission-callout-section',
         'settings' => 'boat-mission-callout-text',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         
         )));

         $wp_customize->add_setting('boat-mission-callout-paragraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-mission-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-mission-callout-section',
            'settings' => 'boat-mission-callout-paragraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            )));

   }

   add_action('customize_register', 'boat_strategy_customize_register');

    
   function boat_strategy_customize_register($wp_customize) {

      $wp_customize->add_section('boat-strategy-callout-section', array ('title' => 'Strategically Target'));

      $wp_customize->add_setting('boat-strategy-center-callout-text', array (
         'default' => 'We strategically target major barriers to outdoor access'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-strategy-center-callout-text-control', array (
         'label' => 'Center Header',
         'section' => 'boat-strategy-callout-section',
         'settings' => 'boat-strategy-center-callout-text',
         'sanitize_callback' => 'sanitize_text_field',
         'type' => 'textarea',
         'active_callback' => 'boat_home_callout_image_on_condition'
         
         )));

      $wp_customize->add_setting('boat-strategy-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-strategy-callout-image-control', array (
      'label' => 'Strategy Image',
      'section' => 'boat-strategy-callout-section',
      'settings' => 'boat-strategy-callout-image',
      'height' => 500,
      'width' => 500,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-strategy-callout-transportationheadline', array(
         'default' => 'Transportation and Access'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-strategy-callout-transportationheadline-control', array (
            'label' => 'Transportation Header',
         'section' => 'boat-strategy-callout-section',
         'settings' => 'boat-strategy-callout-transportationheadline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-strategy-callout-transportationparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-strategy-callout-transportationparagraph-control', array (
            'label' => 'Transportation paragraph',
            'section' => 'boat-strategy-callout-section',
            'settings' => 'boat-strategy-callout-transportationparagraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'
            )));

            $wp_customize->add_setting('boat-knowledge-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-knowledge-callout-image-control', array (
            'label' => 'Knowledge Image',
            'section' => 'boat-strategy-callout-section',
            'settings' => 'boat-knowledge-callout-image',
            'height' => 500,
            'width' => 500,
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));
      
            $wp_customize->add_setting('boat-strategy-callout-knowledgeheadline', array(
               'default' => 'Knowledge and Awareness'
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-strategy-callout-knowledgeheadline-control', array (
                  'label' => 'Knowledge Header',
      
               'section' => 'boat-strategy-callout-section',
               'settings' => 'boat-strategy-callout-knowledgeheadline',
               'type' => 'textarea',
               'sanitize_callback' => 'sanitize_text_field',
               'active_callback' => 'boat_home_callout_image_on_condition'

               )));
               
      
               $wp_customize->add_setting('boat-strategy-callout-knowledgeparagraph', array (
                  'default' => 'Enter paragraph here'
                  ));
                  
                  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-strategy-callout-knowledgeparagraph-control', array (
                  'label' => 'Knowledge paragraph',
                  'section' => 'boat-strategy-callout-section',
                  'settings' => 'boat-strategy-callout-knowledgeparagraph',
                  'type' => 'textarea',
                  'sanitize_callback' => 'sanitize_text_field',
                  'active_callback' => 'boat_home_callout_image_on_condition'

                  
                  )));

                  $wp_customize->add_setting('boat-planning-callout-image');
   
                  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-planning-callout-image-control', array (
                  'label' => 'Planning image',
                  'section' => 'boat-strategy-callout-section',
                  'settings' => 'boat-planning-callout-image',
                  'height' => 500,
                  'width' => 500,
                  'active_callback' => 'boat_home_callout_image_on_condition'

                  
                  )));
            
                  $wp_customize->add_setting('boat-strategy-callout-planningheadline', array(
                     'default' => 'Planning and Logistics'
                     ));
                     
                     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-strategy-callout-planningheadline-control', array (
                        'label' => 'Planning Header',
            
                     'section' => 'boat-strategy-callout-section',
                     'settings' => 'boat-strategy-callout-planningheadline',
                     'type' => 'textarea',
                     'sanitize_callback' => 'sanitize_text_field',
                     'active_callback' => 'boat_home_callout_image_on_condition'

                     )));
                     
            
                     $wp_customize->add_setting('boat-strategy-callout-planningparagraph', array (
                        'default' => 'Enter paragraph here'
                        ));
                        
                        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-strategy-callout-planningparagraph-control', array (
                        'label' => 'Planning paragraph',
                        'section' => 'boat-strategy-callout-section',
                        'settings' => 'boat-strategy-callout-planningparagraph',
                        'type' => 'textarea',
                        'sanitize_callback' => 'sanitize_text_field',
                        'active_callback' => 'boat_home_callout_image_on_condition'
                        
                        )));

   }

   add_action('customize_register', 'boat_findyourtrip_customize_register');
   
   function boat_findyourtrip_customize_register($wp_customize) {

      $wp_customize->add_section('boat-findyourtrip-callout-section', array ('title' => 'Find Your Trip'));


      $wp_customize->add_setting('boat-findyourtrip-outdoor-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-findyourtrip-outdoor-callout-image-control', array (
      'label' => 'Outdoor Classroom Image',
      'section' => 'boat-findyourtrip-callout-section',
      'settings' => 'boat-findyourtrip-outdoor-callout-image',
      'height' => 560,
      'width' => 1530,
      // 'height' => 560,
      // 'width' => 370,
      'active_callback' => 'boat_home_callout_image_on_condition'
      )));

      $wp_customize->add_setting('boat-findyourtrip-callout-outdoorheadline', array(
         'default' => 'Outdoor Classroom'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-outdoorheadline-control', array (
            'label' => 'Outdoor Classroom Header',

         'section' => 'boat-findyourtrip-callout-section',
         'settings' => 'boat-findyourtrip-callout-outdoorheadline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-findyourtrip-callout-outdoorparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-outdoorparagraph-control', array (
            'label' => 'Outdoor classroom paragraph',
            'section' => 'boat-findyourtrip-callout-section',
            'settings' => 'boat-findyourtrip-callout-outdoorparagraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));

      $wp_customize->add_setting('boat-findyourtrip-expedition-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-findyourtrip-expedition-callout-image-control', array (
      'label' => 'Expedition Classroom Image',
      'section' => 'boat-findyourtrip-callout-section',
      'settings' => 'boat-findyourtrip-expedition-callout-image',
      'height' => 560,
      'width' => 1530,
      // 'height' => 560,
      // 'width' => 370,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-findyourtrip-callout-expeditionheadline', array(
         'default' => 'Expedition'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-expeditionheadline-control', array (
            'label' => 'Expedition Header',

         'section' => 'boat-findyourtrip-callout-section',
         'settings' => 'boat-findyourtrip-callout-expeditionheadline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-findyourtrip-callout-expeditionparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-expeditionparagraph-control', array (
            'label' => 'Expedition classroom paragraph',
            'section' => 'boat-findyourtrip-callout-section',
            'settings' => 'boat-findyourtrip-callout-expeditionparagraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));

             $wp_customize->add_setting('boat-findyourtrip-basecamp-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-findyourtrip-basecamp-callout-image-control', array (
      'label' => 'Basecamp Classroom Image',
      'section' => 'boat-findyourtrip-callout-section',
      'settings' => 'boat-findyourtrip-basecamp-callout-image',
      'height' => 560,
      'width' => 1530,
      // 'height' => 560,
      // 'width' => 370,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-findyourtrip-callout-basecampheadline', array(
         'default' => 'Basecamp'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-basecampheadline-control', array (
            'label' => 'Basecamp Header',

         'section' => 'boat-findyourtrip-callout-section',
         'settings' => 'boat-findyourtrip-callout-basecampheadline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-findyourtrip-callout-basecampparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-basecampparagraph-control', array (
            'label' => 'Basecamp classroom paragraph',
            'section' => 'boat-findyourtrip-callout-section',
            'settings' => 'boat-findyourtrip-callout-basecampparagraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));
            $wp_customize->add_setting('boat-findyourtrip-adventure-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-findyourtrip-adventure-callout-image-control', array (
      'label' => 'Adventure Classroom image',
      'section' => 'boat-findyourtrip-callout-section',
      'settings' => 'boat-findyourtrip-adventure-callout-image',
      'height' => 560,
      'width' => 1530,
      // 'height' => 560,
      // 'width' => 370,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-findyourtrip-callout-adventureheadline', array(
         'default' => 'Adventure'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-adventureheadline-control', array (
            'label' => 'Adventure Header',
         'section' => 'boat-findyourtrip-callout-section',
         'settings' => 'boat-findyourtrip-callout-adventureheadline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-findyourtrip-callout-adventureparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrip-callout-adventureparagraph-control', array (
            'label' => 'Adventure classroom paragraph',
            'section' => 'boat-findyourtrip-callout-section',
            'settings' => 'boat-findyourtrip-callout-adventureparagraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            )));
   }
   add_action('customize_register', 'boat_partners_customize_register');

   function boat_partners_customize_register($wp_customize) {

      $wp_customize->add_section('boat-partners-callout-section', array ('title' => 'Our partners'));

      $wp_customize->add_setting('boat-partners-callout-headline', array(
         'default' => 'Our partners'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-partners-callout-headline-control', array (
         'label' => 'Our partners header',
         'section' => 'boat-partners-callout-section',
         'settings' => 'boat-partners-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
         $wp_customize->add_setting('boat-partners-callout-paragraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-partners-callout-paragraph-control', array (
            'label' => 'Partner paragraph',
            'section' => 'boat-partners-callout-section',
            'settings' => 'boat-partners-callout-paragraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));

      $wp_customize->add_setting('boat-partners-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-partners-callout-image-control', array (
      'label' => 'Our Partners 1st Image',
      'section' => 'boat-partners-callout-section',
      'settings' => 'boat-partners-callout-image',
      'height' => 300,
      'width' => 300,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));
            $wp_customize->add_setting('boat-partners2-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-partners2-callout-image-control', array (
               'label' => 'Our Partners 2nd Image',
               'section' => 'boat-partners-callout-section',
               'settings' => 'boat-partners2-callout-image',
               'height' => 300,
               'width' => 300,
               'active_callback' => 'boat_home_callout_image_on_condition'
            
            )));

                  $wp_customize->add_setting('boat-partners3-callout-image');
   
                  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-partners3-callout-image-control', array (
                     'label' => 'Our Partners Third Image',
                     'section' => 'boat-partners-callout-section',
                     'settings' => 'boat-partners3-callout-image',
                     'height' => 300,
                     'width' => 300,
                     'active_callback' => 'boat_home_callout_image_on_condition'
                  )));

   }
   add_action('customize_register', 'boat_beingoutside_customize_register');
   
   function boat_beingoutside_customize_register($wp_customize) {

      $wp_customize->add_section('boat-beingoutside-callout-section', array ('title' => 'Being Outside Matters'));

      $wp_customize->add_setting('boat-beingoutside-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-beingoutside-callout-image-control', array (
      'label' => 'Being Outside Matters Image',
      'section' => 'boat-beingoutside-callout-section',
      'settings' => 'boat-beingoutside-callout-image',
      'height' => 900,
      'width' => 1920,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-beingoutside-callout-headline', array(
         'default' => 'Being outside matters'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-beingoutside-callout-headline-control', array (
         'section' => 'boat-beingoutside-callout-section',
         'settings' => 'boat-beingoutside-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));

         $wp_customize->add_setting('boat-beingoutside-callout-paragraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-beingoutside-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-beingoutside-callout-section',
            'settings' => 'boat-beingoutside-callout-paragraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));

   }
   add_action('customize_register', 'boat_benefitstier_customize_register');

   function boat_benefitstier_customize_register($wp_customize) {

      $wp_customize->add_section('boat-benefitstier-callout-section', array ('title' => 'Outdoor Benefits'));

      $wp_customize->add_setting('boat-benefitstier-callout-headline', array(
         'default' => 'Outdoor Benefits'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-benefitstier-callout-headline-control', array (
            'label' => 'Benefits 1 Header',

         'section' => 'boat-benefitstier-callout-section',
         'settings' => 'boat-benefitstier-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
         $wp_customize->add_setting('boat-benefitstier-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-benefitstier-callout-image-control', array (
      'label' => 'Outdoor Benefits Image 1',
      'section' => 'boat-benefitstier-callout-section',
      'settings' => 'boat-benefitstier-callout-image',
      'height' => 300,
      'width' => 300,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-benefitstier2-callout-headline', array(
         'default' => 'Outdoor Benefits 2'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-benefitstier2-callout-headline-control', array (
            'label' => 'Benefits 2 Header',

         'section' => 'boat-benefitstier-callout-section',
         'settings' => 'boat-benefitstier2-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
      $wp_customize->add_setting('boat-benefitstier2-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-benefitstier2-callout-image-control', array (
      'label' => 'Our partners Image 2',
      'section' => 'boat-benefitstier-callout-section',
      'settings' => 'boat-benefitstier2-callout-image',
      'height' => 300,
      'width' => 300,
      'active_callback' => 'boat_home_callout_image_on_condition'

      )));

      $wp_customize->add_setting('boat-benefitstier3-callout-headline', array(
         'default' => 'Outdoor Benefits 3'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-benefitstier3-callout-headline-control', array (
            'label' => 'Benefits 3 Header',
         'section' => 'boat-benefitstier-callout-section',
         'settings' => 'boat-benefitstier3-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
      $wp_customize->add_setting('boat-benefitstier3-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-benefitstier3-callout-image-control', array (
      'label' => 'Our Partners Image 3',
      'section' => 'boat-benefitstier-callout-section',
      'settings' => 'boat-benefitstier3-callout-image',
      'height' => 300,
      'width' => 300,
      'active_callback' => 'boat_home_callout_image_on_condition'
      )));
   }
   add_action('customize_register', 'boat_easier_customize_register');

   function boat_easier_customize_register($wp_customize) {

      $wp_customize->add_section('boat-easier-callout-section', array ('title' => 'It needs to be easier'));

      $wp_customize->add_setting('boat-easier-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-easier-callout-image-control', array (
      'label' => 'It needs to be easier',
      'section' => 'boat-easier-callout-section',
      'settings' => 'boat-easier-callout-image',
      'height' => 900,
      'width' => 1920,
      'active_callback' => 'boat_home_callout_image_on_condition'
      )));

      $wp_customize->add_setting('boat-easier-callout-headline', array(
         'default' => 'It needs to be easier'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-easier-callout-headline-control', array (
         'section' => 'boat-easier-callout-section',
         'settings' => 'boat-easier-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));

         $wp_customize->add_setting('boat-easier-callout-paragraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-easier-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-easier-callout-section',
            'settings' => 'boat-easier-callout-paragraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition' 
            )));

   }
   add_action('customize_register', 'boat_benefitstier2_customize_register');

   function boat_benefitstier2_customize_register($wp_customize) {

      $wp_customize->add_section('boat-benefitstier2-callout-section', array ('title' => 'Outdoor Benefits Continued'));

      $wp_customize->add_setting('boat-firstbenefitstier2-callout-headline', array(
         'default' => 'Outdoor Benefits'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-firstbenefitstier2-callout-headline-control', array (
            'label' => 'Outdoor Benefits 1 Header',
         'section' => 'boat-benefitstier2-callout-section',
         'settings' => 'boat-firstbenefitstier2-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
         $wp_customize->add_setting('boat-firstbenefitstier2-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-firstbenefitstier2-callout-image-control', array (
      'label' => 'Outdoor Benefits Image 1',
      'section' => 'boat-benefitstier2-callout-section',
      'settings' => 'boat-firstbenefitstier2-callout-image',
      'height' => 300,
      'width' => 300,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-secondbenefitstier2-callout-headline', array(
         'default' => 'Outdoor Benefits 2'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-secondbenefitstier2-callout-headline-control', array (
            'label' => 'Outdoor Benefits 2 Header',
         'section' => 'boat-benefitstier2-callout-section',
         'settings' => 'boat-secondbenefitstier2-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
      $wp_customize->add_setting('boat-secondbenefitstier2-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-secondbenefitstier2-callout-image-control', array (
      'label' => 'Outdoor Benefits Image 2',
      'section' => 'boat-benefitstier2-callout-section',
      'settings' => 'boat-secondbenefitstier2-callout-image',
      'height' => 300,
      'width' => 300,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-thirdbenefitstier2-callout-headline', array(
         'default' => 'Outdoor Benefits 3'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-thirdbenefitstier2-callout-headline-control', array (
            'label' => 'Outdoor Benefits 3 Header',
         'section' => 'boat-benefitstier2-callout-section',
         'settings' => 'boat-thirdbenefitstier2-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));
         
      $wp_customize->add_setting('boat-thirdbenefitstier2-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-thirdbenefitstier2-callout-image-control', array (
      'label' => 'Our partners Image 3',
      'section' => 'boat-benefitstier2-callout-section',
      'settings' => 'boat-thirdbenefitstier2-callout-image',
      'height' => 300,
      'width' => 300,
      'active_callback' => 'boat_home_callout_image_on_condition'
      )));
   }
   add_action('customize_register', 'boat_move_customize_register');

   function boat_move_customize_register($wp_customize) {

      $wp_customize->add_section('boat-move-callout-section', array ('title' => 'Boat is on the move'));


      $wp_customize->add_setting('boat-move-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-move-callout-image-control', array (
      'label' => 'Boat is on the move Image',
      'section' => 'boat-move-callout-section',
      'settings' => 'boat-move-callout-image',
      'height' => 900,
      'width' => 1920,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-move-callout-headline', array(
         'default' => 'Boat is on the move'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-move-callout-headline-control', array (
         'section' => 'boat-move-callout-section',
         'settings' => 'boat-move-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));

         $wp_customize->add_setting('boat-move-callout-paragraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-move-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-move-callout-section',
            'settings' => 'boat-move-callout-paragraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));

   }
   add_action('customize_register', 'boat_onboard_customize_register');

   function boat_onboard_customize_register($wp_customize) {

      $wp_customize->add_section('boat-onboard-callout-section', array ('title' => 'Get onboard'));

      $wp_customize->add_setting('boat-onboard-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-onboard-callout-image-control', array (
      'label' => 'Get onboard Image',
      'section' => 'boat-onboard-callout-section',
      'settings' => 'boat-onboard-callout-image',
      'height' => 900,
      'width' => 1920,
      'active_callback' => 'boat_home_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-onboard-callout-headline', array(
         'default' => 'Get'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-onboard-callout-headline-control', array (
         'section' => 'boat-onboard-callout-section',
         'settings' => 'boat-onboard-callout-headline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_home_callout_image_on_condition'

         )));

         $wp_customize->add_setting('boat-onboard-callout-headline-second', array(
            'default' => 'Onboard'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-onboard-callout-headline-second-control', array (
            'section' => 'boat-onboard-callout-section',
            'settings' => 'boat-onboard-callout-headline-second',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'
   
            )));

         $wp_customize->add_setting('boat-onboard-callout-paragraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-onboard-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-onboard-callout-section',
            'settings' => 'boat-onboard-callout-paragraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_home_callout_image_on_condition'

            
            )));
}

function boat_home_callout_image_on_condition( $control ) {
   if (is_front_page()) {
      return true;
   } else {
      return false;
   }
}
//    if ( is_page('')){
// return true;
// } else if (is_page('home')) {
//       return true;
// } else if (is_page('index')) {
//       return true;
// } else if (is_page('default')) {
//       return true;
// } else {
//    return false;
// }

//who we are functions
function boat_whoweare_callout($wp_customize) {        
   // global $currentPage;
   // return $currentPage;

$wp_customize->add_section('boat-whoweare-callout-section', array ('title' => 'Who We Are'));


$wp_customize->add_setting('boat-whoweare-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-whoweare-callout-image-control', array (
'label' => 'Who We Are Header Image',
'section' => 'boat-whoweare-callout-section',
'settings' => 'boat-whoweare-callout-image',
'height' => 950,
'width' => 1920,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));

$wp_customize->add_setting('boat-whoweare-callout-headline', array(
   'default' => 'Who We Are'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-whoweare-callout-headline-control', array (
   'section' => 'boat-whoweare-callout-section',
   'settings' => 'boat-whoweare-callout-headline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
)));
   

   $wp_customize->add_setting('boat-whoweare-callout-paragraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-whoweare-callout-paragraph-control', array (
      'label' => 'Text',
      'section' => 'boat-whoweare-callout-section',
      'settings' => 'boat-whoweare-callout-paragraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));

}
add_action('customize_register', 'boat_whoweare_callout');

function boat_gettingoutside_callout($wp_customize) {

$wp_customize->add_section('boat-gettingoutside-callout-section', array ('title' => 'Why is it hard to get outside?'));


$wp_customize->add_setting('boat-gettingoutside-logistics-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-gettingoutside-logistics-callout-image-control', array (
'label' => 'Logistics Image',
'section' => 'boat-gettingoutside-callout-section',
'settings' => 'boat-gettingoutside-logistics-callout-image',
'height' => 560,
'width' => 1530,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));

$wp_customize->add_setting('boat-gettingoutside-callout-logisticsheadline', array(
   'default' => 'logistics'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-logisticsheadline-control', array (
      'label' => 'logistics Header',
   'section' => 'boat-gettingoutside-callout-section',
   'settings' => 'boat-gettingoutside-callout-logisticsheadline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   )));
   

   $wp_customize->add_setting('boat-gettingoutside-callout-logisticsparagraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-logisticsparagraph-control', array (
      'label' => 'logistics paragraph',
      'section' => 'boat-gettingoutside-callout-section',
      'settings' => 'boat-gettingoutside-callout-logisticsparagraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));

$wp_customize->add_setting('boat-gettingoutside-cost-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-gettingoutside-cost-callout-image-control', array (
'label' => 'Cost Image',
'section' => 'boat-gettingoutside-callout-section',
'settings' => 'boat-gettingoutside-cost-callout-image',
'height' => 560,
'width' => 1530,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));

$wp_customize->add_setting('boat-gettingoutside-callout-costheadline', array(
   'default' => 'cost'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-costheadline-control', array (
      'label' => 'cost Header',
   'section' => 'boat-gettingoutside-callout-section',
   'settings' => 'boat-gettingoutside-callout-costheadline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   )));
   

   $wp_customize->add_setting('boat-gettingoutside-callout-costparagraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-costparagraph-control', array (
      'label' => 'cost paragraph',
      'section' => 'boat-gettingoutside-callout-section',
      'settings' => 'boat-gettingoutside-callout-costparagraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));

       $wp_customize->add_setting('boat-gettingoutside-knowledge-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-gettingoutside-knowledge-callout-image-control', array (
'label' => 'Knowledge Image',
'section' => 'boat-gettingoutside-callout-section',
'settings' => 'boat-gettingoutside-knowledge-callout-image',
'height' => 560,
'width' => 1530,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));

$wp_customize->add_setting('boat-gettingoutside-callout-knowledgeheadline', array(
   'default' => 'knowledge'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-knowledgeheadline-control', array (
      'label' => 'knowledge Header',

   'section' => 'boat-gettingoutside-callout-section',
   'settings' => 'boat-gettingoutside-callout-knowledgeheadline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   )));
   

   $wp_customize->add_setting('boat-gettingoutside-callout-knowledgeparagraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-knowledgeparagraph-control', array (
      'label' => 'knowledge paragraph',
      'section' => 'boat-gettingoutside-callout-section',
      'settings' => 'boat-gettingoutside-callout-knowledgeparagraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      )));
      $wp_customize->add_setting('boat-gettingoutside-visibility-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-gettingoutside-visibility-callout-image-control', array (
'label' => 'Visibility Image',
'section' => 'boat-gettingoutside-callout-section',
'settings' => 'boat-gettingoutside-visibility-callout-image',
'height' => 560,
'width' => 1530,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));

$wp_customize->add_setting('boat-gettingoutside-callout-visibilityheadline', array(
   'default' => 'visibility'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-visibilityheadline-control', array (
      'label' => 'visibility Header',

   'section' => 'boat-gettingoutside-callout-section',
   'settings' => 'boat-gettingoutside-callout-visibilityheadline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   )));
   

   $wp_customize->add_setting('boat-gettingoutside-callout-visibilityparagraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gettingoutside-callout-visibilityparagraph-control', array (
      'label' => 'visibility paragraph',
      'section' => 'boat-gettingoutside-callout-section',
      'settings' => 'boat-gettingoutside-callout-visibilityparagraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));
}
add_action('customize_register', 'boat_gettingoutside_callout');

function boat_bigred_callout($wp_customize) {

$wp_customize->add_section('boat-bigred-callout-section', array ('title' => 'Meet Big Red'));


$wp_customize->add_setting('boat-bigred-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-bigred-callout-image-control', array (
'label' => 'Big Red Image',
'section' => 'boat-bigred-callout-section',
'settings' => 'boat-bigred-callout-image',
'height' => 590,
'width' => 1920,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));

$wp_customize->add_setting('boat-bigred-callout-headline', array(
   'default' => 'Big Red Header'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-bigred-callout-headline-control', array (
   'section' => 'boat-bigred-callout-section',
   'settings' => 'boat-bigred-callout-headline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

   )));
   
   $wp_customize->add_setting('boat-bigred-callout-text', array (
   'default' => 'the star of the show!'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-bigred-callout-text-control', array (
   'label' => 'Secondary header',
   'section' => 'boat-bigred-callout-section',
   'settings' => 'boat-bigred-callout-text',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   
   )));

   $wp_customize->add_setting('boat-bigred-callout-paragraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-bigred-callout-paragraph-control', array (
      'label' => 'Text',
      'section' => 'boat-bigred-callout-section',
      'settings' => 'boat-bigred-callout-paragraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));

}
add_action('customize_register', 'boat_bigred_callout');

function boat_centerwhoarewe_callout($wp_customize) {

$wp_customize->add_section('boat-centerwhoarewe-callout-section', array ('title' => 'Who Are We'));

$wp_customize->add_setting('boat-centerwhoarewe-callout-headline', array(
   'default' => 'Who Are We'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-centerwhoarewe-callout-headline-control', array (
   'section' => 'boat-centerwhoarewe-callout-section',
   'settings' => 'boat-centerwhoarewe-callout-headline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   )));
   

   $wp_customize->add_setting('boat-centerwhoarewe-callout-paragraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-centerwhoarewe-callout-paragraph-control', array (
      'label' => 'Text',
      'section' => 'boat-centerwhoarewe-callout-section',
      'settings' => 'boat-centerwhoarewe-callout-paragraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));

}
add_action('customize_register', 'boat_centerwhoarewe_callout');

function boat_employees_callout($wp_customize) {

$wp_customize->add_section('boat-employees-callout-section', array ('title' => 'Employees Section'));

$wp_customize->add_setting('boat-employees1-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-employees1-callout-image-control', array (
'label' => 'Boat employees Image 1',
'section' => 'boat-employees-callout-section',
'settings' => 'boat-employees1-callout-image',
'height' => 500,
'width' => 500,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));

$wp_customize->add_setting('boat-employees1-callout-headline', array(
   'default' => 'Employees 1'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees1-callout-headline-control', array (
      'label' => 'Employees Header 1',
   'section' => 'boat-employees-callout-section',
   'settings' => 'boat-employees1-callout-headline',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

   )));
   

   $wp_customize->add_setting('boat-employees1-callout-paragraph', array (
      'default' => 'Enter paragraph here'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees1-callout-paragraph-control', array (
      'label' => ' paragraph',
      'section' => 'boat-employees-callout-section',
      'settings' => 'boat-employees1-callout-paragraph',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));

      $wp_customize->add_setting('boat-employees2-callout-image');

      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-employees2-callout-image-control', array (
      'label' => 'Boat employees Image 2',
      'section' => 'boat-employees-callout-section',
      'settings' => 'boat-employees2-callout-image',
      'height' => 500,
      'width' => 500,
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      
      )));

      $wp_customize->add_setting('boat-employees2-callout-headline', array(
         'default' => 'Employees 2'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees2-callout-headline-control', array (
            'label' => 'Employees Header 2',
         'section' => 'boat-employees-callout-section',
         'settings' => 'boat-employees2-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
         )));
         

         $wp_customize->add_setting('boat-employees2-callout-paragraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees2-callout-paragraph-control', array (
            'label' => 'paragraph',
            'section' => 'boat-employees-callout-section',
            'settings' => 'boat-employees2-callout-paragraph',
            'type' => 'textarea',
            'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
            
            )));

            $wp_customize->add_setting('boat-employees3-callout-image');

            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-employees3-callout-image-control', array (
            'label' => 'Boat employees Image 3',
            'section' => 'boat-employees-callout-section',
            'settings' => 'boat-employees3-callout-image',
            'height' => 500,
            'width' => 500,
            'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
            
            )));
      
            $wp_customize->add_setting('boat-employees3-callout-headline', array(
               'default' => 'Employees 3'
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees3-callout-headline-control', array (
                  'label' => 'Boat Employees Header 3',
               'section' => 'boat-employees-callout-section',
               'settings' => 'boat-employees3-callout-headline',
               'type' => 'textarea',
               'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
               )));
               
      
               $wp_customize->add_setting('boat-employees3-callout-paragraph', array (
                  'default' => 'Enter paragraph here'
                  ));
                  
                  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees3-callout-paragraph-control', array (
                  'label' => 'paragraph',
                  'section' => 'boat-employees-callout-section',
                  'settings' => 'boat-employees3-callout-paragraph',
                  'type' => 'textarea',
                  'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
                  
                  )));

                  $wp_customize->add_setting('boat-employees4-callout-image');

                  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-employees4-callout-image-control', array (
                  'label' => 'Boat employees Image 4',
                  'section' => 'boat-employees-callout-section',
                  'settings' => 'boat-employees4-callout-image',
                  'height' => 500,
                  'width' => 500,
                  'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
                  
                  )));
            
                  $wp_customize->add_setting('boat-employees4-callout-headline', array(
                     'default' => 'Employees 4'
                     ));
                     
                     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees4-callout-headline-control', array (
                        'label' => 'Boat Employees Header 4',
                     'section' => 'boat-employees-callout-section',
                     'settings' => 'boat-employees4-callout-headline',
                     'type' => 'textarea',
                     'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
                     )));
                     
            
                     $wp_customize->add_setting('boat-employees4-callout-paragraph', array (
                        'default' => 'Enter paragraph here'
                        ));
                        
                        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees4-callout-paragraph-control', array (
                        'label' => 'paragraph',
                        'section' => 'boat-employees-callout-section',
                        'settings' => 'boat-employees4-callout-paragraph',
                        'type' => 'textarea',
                        'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
                        
                        )));

                        $wp_customize->add_setting('boat-employees5-callout-image');

                        $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-employees5-callout-image-control', array (
                        'label' => 'Boat employees Image 5',
                        'section' => 'boat-employees-callout-section',
                        'settings' => 'boat-employees5-callout-image',
                        'height' => 500,
                        'width' => 500,
                        'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
                        
                        )));
                  
                        $wp_customize->add_setting('boat-employees5-callout-headline', array(
                           'default' => 'Employees 5'
                           ));
                           
                           $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees5-callout-planningheadline-control', array (
                              'label' => 'Boat Employees Header 5',
                           'section' => 'boat-employees-callout-section',
                           'settings' => 'boat-employees5-callout-headline',
                           'type' => 'textarea',
                           'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
                           )));
                           
                  
                           $wp_customize->add_setting('boat-employees5-callout-paragraph', array (
                              'default' => 'Enter paragraph here'
                              ));
                              
                              $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees5-callout-paragraph-control', array (
                              'label' => 'paragraph',
                              'section' => 'boat-employees-callout-section',
                              'settings' => 'boat-employees5-callout-paragraph',
                              'type' => 'textarea',
                              'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
                              
                              )));
$wp_customize->add_setting('boat-employees6-callout-image');

$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-employees6-callout-image-control', array (
'label' => 'Boat employees Image 6',
'section' => 'boat-employees-callout-section',
'settings' => 'boat-employees6-callout-image',
'height' => 500,
'width' => 500,
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

))); 

$wp_customize->add_setting('boat-employees6-callout-headline', array(
'default' => 'Employees 6'
));

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees6-callout-headline-control', array (
'label' => 'Boat Employees Header 6',
'section' => 'boat-employees-callout-section',
'settings' => 'boat-employees6-callout-headline',
'type' => 'textarea',
'active_callback' => 'boat_whoweare_callout_image_control_on_condition'

)));


$wp_customize->add_setting('boat-employees6-callout-paragraph', array (
   'default' => 'Enter paragraph here'
   ));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees6-callout-paragraph-control', array (
   'label' => 'paragraph',
   'section' => 'boat-employees-callout-section',
   'settings' => 'boat-employees6-callout-paragraph',
   'type' => 'textarea',
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   
   )));

   $wp_customize->add_setting('boat-employees7-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-employees7-callout-image-control', array (
   'label' => 'Boat employees Image 7',
   'section' => 'boat-employees-callout-section',
   'settings' => 'boat-employees7-callout-image',
   'height' => 500,
   'width' => 500,
   'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
   
   )));

   $wp_customize->add_setting('boat-employees7-callout-headline', array(
      'default' => 'Employees 7'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees7-callout-headline-control', array (
      'label' => 'Boat Employees Header 7',
      'section' => 'boat-employees-callout-section',
      'settings' => 'boat-employees7-callout-headline',
      'type' => 'textarea',
      'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
      )));
      

      $wp_customize->add_setting('boat-employees7-callout-paragraph', array (
         'default' => 'Enter paragraph here'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-employees7-callout-paragraph-control', array (
         'label' => 'paragraph',
         'section' => 'boat-employees-callout-section',
         'settings' => 'boat-employees7-callout-paragraph',
         'type' => 'textarea',
         'active_callback' => 'boat_whoweare_callout_image_control_on_condition'
         
         )));
add_action('customize_register', 'boat_employees_callout');
   }

   function boat_whoweare_callout_image_control_on_condition( $control ) {
      if ( is_page('who-we-are') ){
   return true;
   } else {
      return false;
   }
   }

//what we do functions
   function boat_partnership_callout($wp_customize) {

      $wp_customize->add_section('boat-partnership-callout-section', array ('title' => 'Boats partnership'));

      $wp_customize->add_setting('boat-partnership-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-partnership-callout-image-control', array (
      'label' => 'Boat partnership image',
      'section' => 'boat-partnership-callout-section',
      'settings' => 'boat-partnership-callout-image',
      'height' => 950,
      'width' => 1920,
      'active_callback' => 'boat_partnership_callout_image_on_condition'
      )));

      $wp_customize->add_setting('boat-partnership-callout-headline', array(
         'default' => 'BOATs partnership'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-partnership-callout-headline-control', array (
         'section' => 'boat-partnership-callout-section',
         'settings' => 'boat-partnership-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_partnership_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-partnership-callout-paragraph', array (
            'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-partnership-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-partnership-callout-section',
            'settings' => 'boat-partnership-callout-paragraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

   }
   add_action('customize_register', 'boat_partnership_callout');

   function boat_differentprograms_callout($wp_customize) {

      $wp_customize->add_section('boat-differentprograms-callout-section', array ('title' => 'Different Programs'));


      $wp_customize->add_setting('boat-differentprograms-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-differentprograms-callout-image-control', array (
      'label' => 'Different Programs Image',
      'section' => 'boat-differentprograms-callout-section',
      'settings' => 'boat-differentprograms-callout-image',
      'height' => 950,
      'width' => 1920,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

      )));

      $wp_customize->add_setting('boat-differentprograms-callout-headline', array(
         'default' => 'Different programs header'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-differentprograms-callout-headline-control', array (
         'section' => 'boat-differentprograms-callout-section',
         'settings' => 'boat-differentprograms-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_partnership_callout_image_on_condition'

         )));
         
         $wp_customize->add_setting('boat-differentprograms-callout-text', array (
         'default' => 'is to get other organizations’ differentprograms outside.'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-differentprograms-callout-text-control', array (
         'label' => 'Secondary header',
         'section' => 'boat-differentprograms-callout-section',
         'settings' => 'boat-differentprograms-callout-text',
         'type' => 'textarea',
         'active_callback' => 'boat_partnership_callout_image_on_condition'

         
         )));

         $wp_customize->add_setting('boat-differentprograms-callout-paragraph', array (
            'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-differentprograms-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-differentprograms-callout-section',
            'settings' => 'boat-differentprograms-callout-paragraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

   }
   add_action('customize_register', 'boat_differentprograms_callout');

   function boat_programsdetailed_callout($wp_customize) {

      $wp_customize->add_section('boat-programsdetailed-callout-section', array ('title' => 'Programs in detail'));


      $wp_customize->add_setting('boat-programsdetailed-outdoor-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-outdoor-callout-image-control', array (
      'label' => 'Outdoor classroom Image',
      'section' => 'boat-programsdetailed-callout-section',
      'settings' => 'boat-programsdetailed-outdoor-callout-image',
      'height' => 560,
      'width' => 1530,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-programsdetailed-callout-outdoorheadline', array(
         'default' => 'Outdoor Classroom'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-outdoorheadline-control', array (
            'label' => 'Outdoor Classroom Header',
         'section' => 'boat-programsdetailed-callout-section',
         'settings' => 'boat-programsdetailed-callout-outdoorheadline',
         'type' => 'textarea',
         'active_callback' => 'boat_partnership_callout_image_on_condition'

         )));
         
         $wp_customize->add_setting('boat-programsdetailed-outdoor-callout-text', array (
            'default' => 'is to get other organizations’ missions outside.'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-outdoorcallout-text-control', array (
            'label' => 'Secondary header',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-outdoor-callout-text',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

         $wp_customize->add_setting('boat-programsdetailed-callout-outdoorparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-outdoorparagraph-control', array (
            'label' => 'Outdoor classroom paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-outdoorparagraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

            $wp_customize->add_setting('boat-programsdetailed-outdoorexpanded-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-outdoorexpanded-callout-image-control', array (
            'label' => 'Outdoor classroom Image',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-outdoorexpanded-callout-image',
            'height' => 560,
            'width' => 1530,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

                     $wp_customize->add_setting('boat-programsdetailed-outdoorexpanded-callout-text', array (
            'default' => 'is to get other organizations’ missions outside.'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-outdoorexpanded-callout-text-control', array (
            'label' => 'Secondary header',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-outdoorexpanded-callout-text',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));


         $wp_customize->add_setting('boat-programsdetailed-callout-outdoorexpanded-outdoorparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-outdoorexpanded-outdoorparagraph-control', array (
            'label' => 'Outdoor classroom paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-outdoorexpanded-outdoorparagraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

      $wp_customize->add_setting('boat-programsdetailed-expedition-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-expedition-callout-image-control', array (
      'label' => 'Expedition classroom Image',
      'section' => 'boat-programsdetailed-callout-section',
      'settings' => 'boat-programsdetailed-expedition-callout-image',
      'height' => 560,
      'width' => 1530,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-programsdetailed-callout-expeditionheadline', array(
         'default' => 'Expedition'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-expeditionheadline-control', array (
            'label' => 'Expedition Header',

         'section' => 'boat-programsdetailed-callout-section',
         'settings' => 'boat-programsdetailed-callout-expeditionheadline',
         'type' => 'textarea',
         'active_callback' => 'boat_partnership_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-programsdetailed-callout-expeditionsecondaryheader', array (
            'default' => 'secondary header'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-expeditionsecondaryheader-control', array (
            'label' => 'Secondary header',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-expeditionsecondaryheader',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));


         $wp_customize->add_setting('boat-programsdetailed-callout-expeditionparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-expeditionparagraph-control', array (
            'label' => 'Expedition classroom paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-expeditionparagraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

            $wp_customize->add_setting('boat-programsdetailed-expeditionexpanded-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-expeditionexpanded-callout-image-control', array (
            'label' => 'Expedition Image',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-expeditionexpanded-callout-image',
            'height' => 560,
            'width' => 1530,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

            $wp_customize->add_setting('boat-programsdetailed-expeditionexpanded-callout-text', array (
            'default' => 'Secondary header.'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-expeditionexpanded-callout-text-control', array (
            'label' => 'Secondary header',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-expeditionexpanded-callout-text',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));


         $wp_customize->add_setting('boat-programsdetailed-expeditionexpanded-expeditionparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-expeditionexpanded-expeditionparagraph-control', array (
            'label' => 'Expedition paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-expeditionexpanded-expeditionparagraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));


             $wp_customize->add_setting('boat-programsdetailed-basecamp-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-basecamp-callout-image-control', array (
      'label' => 'Basecamp classroom Image',
      'section' => 'boat-programsdetailed-callout-section',
      'settings' => 'boat-programsdetailed-basecamp-callout-image',
      'height' => 1080,
      'width' => 1920,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-programsdetailed-callout-basecampheadline', array(
         'default' => 'Basecamp'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-basecampheadline-control', array (
            'label' => 'Basecamp Header',

         'section' => 'boat-programsdetailed-callout-section',
         'settings' => 'boat-programsdetailed-callout-basecampheadline',
         'type' => 'textarea',
         'active_callback' => 'boat_partnership_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-programsdetailed-callout-basecampparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-basecampparagraph-control', array (
            'label' => 'Basecamp classroom paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-basecampparagraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

            $wp_customize->add_setting('boat-programsdetailed-basecampexpanded-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-basecampexpanded-callout-image-control', array (
            'label' => 'Outdoor classroom Image',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-basecampexpanded-callout-image',
            'height' => 1080,
      'width' => 1920,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

                     $wp_customize->add_setting('boat-programsdetailed-basecampexpanded-callout-text', array (
            'default' => 'is to get other organizations’ missions outside.'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-basecampexpanded-callout-text-control', array (
            'label' => 'Secondary header',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-basecampexpanded-callout-text',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));


         $wp_customize->add_setting('boat-programsdetailed-basecampexpanded-basecampparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-basecampexpanded-basecampparagraph-control', array (
            'label' => 'Outdoor classroom paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-basecampexpanded-basecampparagraph-control',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            )));


            $wp_customize->add_setting('boat-programsdetailed-adventure-callout-image');
            
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-adventure-callout-image-control', array (
      'label' => 'Adventure classroom Image',
      'section' => 'boat-programsdetailed-callout-section',
      'settings' => 'boat-programsdetailed-adventure-callout-image',
      'height' => 1080,
      'width' => 1920,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

      
      )));

      $wp_customize->add_setting('boat-programsdetailed-callout-adventureheadline', array(
         'default' => 'Adventure'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-adventureheadline-control', array (
            'label' => 'Adventure Header',

         'section' => 'boat-programsdetailed-callout-section',
         'settings' => 'boat-programsdetailed-callout-adventureheadline',
         'type' => 'textarea',
         'active_callback' => 'boat_partnership_callout_image_on_condition'

         )));
         

         $wp_customize->add_setting('boat-programsdetailed-callout-adventureparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-adventureparagraph-control', array (
            'label' => 'Adventure classroom paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-adventureparagraph',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

            $wp_customize->add_setting('boat-programsdetailed-adventureexpanded-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-programsdetailed-adventureexpanded-callout-image-control', array (
            'label' => 'Outdoor classroom Image',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-adventureexpanded-callout-image',
            'height' => 1080,
      'width' => 1920,
      'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));

                     $wp_customize->add_setting('boat-programsdetailed-adventureexpanded-callout-text', array (
            'is to get other organizations’ missions outside.'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-adventureexpanded-callout-text-control', array (
            'label' => 'Secondary header',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-adventureexpanded-callout-text',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));


         $wp_customize->add_setting('boat-programsdetailed-adventureexpanded-adventureparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-programsdetailed-callout-adventureexpanded-adventureparagraph-control', array (
            'label' => 'Outdoor classroom paragraph',
            'section' => 'boat-programsdetailed-callout-section',
            'settings' => 'boat-programsdetailed-callout-adventureexpanded-adventureparagraph-control',
            'type' => 'textarea',
            'active_callback' => 'boat_partnership_callout_image_on_condition'

            
            )));
         }
   add_action('customize_register', 'boat_programsdetailed_callout');
   
   function boat_partnership_callout_image_on_condition( $control ) {
      if ( is_page('what-we-do') ){
          return true;
      } else {
          return false;
      }
  }

  //support our mission functions
  function boat_supportourmission_callout($wp_customize) {

   $wp_customize->add_section('boat-supportourmission-callout-section', array ('title' => 'Support Our Mission Header'));

   $wp_customize->add_setting('boat-supportourmission-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-supportourmission-callout-image-control', array (
   'label' => 'Supportourmission',
   'section' => 'boat-supportourmission-callout-section',
   'settings' => 'boat-supportourmission-callout-image',
   'height' => 950,
   'width' => 1920,
   'active_callback' => 'boat_supportourmission_callout_image_on_condition'
   
   )));

   $wp_customize->add_setting('boat-supportourmission-callout-headline', array(
      'default' => 'Support Our Mission'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-supportourmission-callout-headline-control', array (
      'section' => 'boat-supportourmission-callout-section',
      'settings' => 'boat-supportourmission-callout-headline',
      'type' => 'textarea',
      'active_callback' => 'boat_supportourmission_callout_image_on_condition'
      )));
      

      $wp_customize->add_setting('boat-supporttourmission-callout-paragraph', array (
         'default' => 'Enter paragraph here'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-supporttourmission-callout-paragraph-control', array (
         'label' => 'Text',
         'section' => 'boat-supportourmission-callout-section',
         'settings' => 'boat-supporttourmission-callout-paragraph',
         'type' => 'textarea',
         'active_callback' => 'boat_supportourmission_callout_image_on_condition'

         )));

}
add_action('customize_register', 'boat_supportourmission_callout');
function boat_financialsupport_callout($wp_customize) {

   $wp_customize->add_section('boat-financialsupport-callout-section', array ('title' => 'Support Us Financially'));

   $wp_customize->add_setting('boat-financialsupport-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-financialsupport-callout-image-control', array (
   'label' => 'Financial support',
   'section' => 'boat-financialsupport-callout-section',
   'settings' => 'boat-financialsupport-callout-image',
   'height' => 500,
   'width' => 500,
   'active_callback' => 'boat_supportourmission_callout_image_on_condition'
   )));
}
add_action('customize_register', 'boat_financialsupport_callout');
function boat_volunteer_callout($wp_customize) {

   $wp_customize->add_section('boat-volunteer-callout-section', array ('title' => 'Become a volunteer'));

   $wp_customize->add_setting('boat-volunteer-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-volunteer-callout-image-control', array (
   'label' => 'Volunteer',
   'section' => 'boat-volunteer-callout-section',
   'settings' => 'boat-volunteer-callout-image',
   'height' => 500,
   'width' => 500,
   'active_callback' => 'boat_supportourmission_callout_image_on_condition'
   )));
}
add_action('customize_register', 'boat_volunteer_callout');
function boat_workforboat_callout($wp_customize) {

   $wp_customize->add_section('boat-workforboat-callout-section', array ('title' => 'Work for BOAT'));

   $wp_customize->add_setting('boat-workforboat-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-workforboat-callout-image-control', array (
   'label' => 'Work for BOAT',
   'section' => 'boat-workforboat-callout-section',
   'settings' => 'boat-workforboat-callout-image',
   'height' => 500,
   'width' => 500,
   'active_callback' => 'boat_supportourmission_callout_image_on_condition'
   )));
}
add_action('customize_register', 'boat_workforboat_callout');
function boat_wishlist_callout($wp_customize) {

   $wp_customize->add_section('boat-wishlist-callout-section', array ('title' => 'Boats Wishlist'));

   $wp_customize->add_setting('boat-wishlist-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-wishlist-callout-image-control', array (
   'label' => 'Boat wishlist',
   'section' => 'boat-wishlist-callout-section',
   'settings' => 'boat-wishlist-callout-image',
   'height' => 590,
   'width' => 1920,
   'active_callback' => 'boat_supportourmission_callout_image_on_condition'
   )));

   $wp_customize->add_setting('boat-wishlist-callout-headline', array(
      'default' => 'BOATs wishlist'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-wishlist-callout-headline-control', array (
      'section' => 'boat-wishlist-callout-section',
      'settings' => 'boat-wishlist-callout-headline',
      'type' => 'textarea',
      'active_callback' => 'boat_supportourmission_callout_image_on_condition'

      )));

      $wp_customize->add_setting('boat-wishlist-callout-paragraph', array (
         'default' =>'Enter paragraph here'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-wishlist-callout-paragraph-control', array (
         'label' => 'Text',
         'section' => 'boat-wishlist-callout-section',
         'settings' => 'boat-wishlist-callout-paragraph',
         'type' => 'textarea',
         'active_callback' => 'boat_supportourmission_callout_image_on_condition'
         )));
}
add_action('customize_register', 'boat_wishlist_callout');
function boat_donate_callout($wp_customize) {

   $wp_customize->add_section('boat-donate-callout-section', array ('title' => 'Donate'));


   $wp_customize->add_setting('boat-donate-callout-image');

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-donate-callout-image-control', array (
   'label' => 'Donate',
   'section' => 'boat-donate-callout-section',
   'settings' => 'boat-donate-callout-image',
   'height' => 590,
   'width' => 1920,
   'active_callback' => 'boat_supportourmission_callout_image_on_condition'
   )));

   $wp_customize->add_setting('boat-donate-callout-headline', array(
      'default' => 'Help make a difference'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-donate-callout-headline-control', array (
      'section' => 'boat-donate-callout-section',
      'settings' => 'boat-donate-callout-headline',
      'type' => 'textarea',
      'active_callback' => 'boat_supportourmission_callout_image_on_condition'

      )));

      $wp_customize->add_setting('boat-donate-callout-paragraph', array (
         'default' => 'Enter paragraph here'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-donate-callout-paragraph-control', array (
         'label' => 'Text',
         'section' => 'boat-donate-callout-section',
         'settings' => 'boat-donate-callout-paragraph',
         'type' => 'textarea',
         'active_callback' => 'boat_supportourmission_callout_image_on_condition'
         )));
}
add_action('customize_register', 'boat_donate_callout');

function boat_supportourmission_callout_image_on_condition( $control ) {
if ( is_page('support-our-mission') ){
    return true;
} else {
    return false;
}
}

// plan a trip functions
add_action('customize_register', 'boat_planatrip_callout');
function boat_planatrip_callout($wp_customize) {
   
   $wp_customize->add_section('boat-planatrip-callout', array ('title' => 'Plan a trip Headline',
));

$wp_customize->add_setting('boat-planatrip-callout-headline', array(
 'default' => 'Propose a trip'
 ));
 
 $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-planatrip-callout-headline-control', array (
 'section' => 'boat-planatrip-callout',
 'settings' => 'boat-planatrip-callout-headline',
 'type' => 'textarea',
 'active_callback' => 'boat_planatrip_callout_on_condition'
)));

$wp_customize->add_setting('boat-planatrip-callout-second-headline', array(
 'default' => 'BOAT works through partnerships our next one could be with you!'
 ));
 
 $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-planatrip-callout-second-headline-control', array (
 'section' => 'boat-planatrip-callout',
 'settings' => 'boat-planatrip-callout-second-headline',
 'type' => 'textarea',
 'active_callback' => 'boat_planatrip_callout_on_condition'
)));

$wp_customize->add_setting('boat-planatrip-callout-paragraph', array(
 'default' => 'Complete the form below to start the process of trip planning well follow up with proposals and availability. Please note you can make transportation requests through this form!'
 ));
 
 $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-planatrip-callout-paragraph-control', array (
 'section' => 'boat-planatrip-callout',
 'settings' => 'boat-planatrip-callout-paragraph',
 'type' => 'textarea',
 'active_callback' => 'boat_planatrip_callout_on_condition'
)));
}

add_action('customize_register', 'boat_planatrip_callout_image');
function boat_planatrip_callout_image($wp_customize) {
   
   $wp_customize->add_section('boat-planatrip-callout-image-section', array ('title' => 'Image Gallery'));

   $wp_customize->add_setting('boat-planatrip-callout-image-section-image1');
  
   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-planatrip-callout-image-control', array (
   'label' => 'Image Gallery',
   'section' => 'boat-planatrip-callout-image-section',
   'settings' => 'boat-planatrip-callout-image-control-image1',
   'height' => 590,
   'width' => 1920,
  'active_callback' => 'boat_planatrip_callout_on_condition'
   )));
}

function boat_planatrip_callout_on_condition( $control ) {
   if ( is_page('plan-a-trip') ){
       return true;
   } else {
       return false;
   }
}

add_action('customize_register', 'boat_findyourtrippage_callout');

// find your trip functions
function boat_findyourtrippage_callout($wp_customize) {

      $wp_customize->add_section('boat-findyourtrippage-callout-section', array ('title' => 'Find Your Trip'));
   
      $wp_customize->add_setting('boat-findyourtrippage-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-findyourtrippage-callout-image-control', array (
      'label' => 'Find Your Trip Header Image',
      'section' => 'boat-findyourtrippage-callout-section',
      'settings' => 'boat-findyourtrippage-callout-image',
      'height' => 950,
      'width' => 1920,
      'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
      )));
      
      $wp_customize->add_setting('boat-findyourtrippage-callout-headline', array(
         'default' => 'Find Your Trip Header',
         'type' => 'theme_mod', // or 'option'
         'capability' => 'edit_theme_options',
         'theme_supports' => '', // Rarely needed.
         'transport' => 'refresh', // or postMessage
         'sanitize_callback' => '',
         'sanitize_js_callback' => '', // Basically to_json.
         ));
       
       $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrippage-callout-headline-control', array (
         'label' => __('Find your trip', 'findyourtrip'),
         'section' => 'boat-findyourtrippage-callout-section',
         'settings' => 'boat-findyourtrippage-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
   
         $wp_customize->add_setting('boat-findyourtrippage-callout-paragraph', array (
            'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-findyourtrippage-callout-paragraph-control', array (
            'label' => 'Text',
            'section' => 'boat-findyourtrippage-callout-section',
            'settings' => 'boat-findyourtrippage-callout-paragraph',
            'type' => 'textarea',
            'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
            )));
         }
   
         add_action('customize_register', 'boat_generaltripinfo_middle_callout');
         function boat_generaltripinfo_middle_callout($wp_customize) {
         
            $wp_customize->add_section('boat-generaltripinfo-middle-callout-section', array ('title' => 'General Trip Information'));
         
            $wp_customize->add_setting('boat-generaltripinfo-middle-callout-headline', array(
               'default' => 'General Trip Information',
               'type' => 'theme_mod', // or 'option'
               'capability' => 'edit_theme_options',
               'theme_supports' => '', // Rarely needed.
               'transport' => 'refresh', // or postMessage
               'sanitize_callback' => '',
               'sanitize_js_callback' => '', // Basically to_json.
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-generaltripinfo-middle-callout-headline-control', array (
               'section' => 'boat-generaltripinfo-middle-callout-section',
               'settings' => 'boat-generaltripinfo-middle-callout-headline',
               'type' => 'textarea',
               'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
               )));
}
         
add_action('customize_register', 'boat_pretrip_callout');

   function boat_pretrip_callout($wp_customize) {
      $wp_customize->add_section('boat-pretrip-callout-section', array ('title' => 'Pretrip Info'));
   
   
      $wp_customize->add_setting('boat-pretrip-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-pretrip-callout-image-control', array (
      'label' => 'Pretrip Image',
      'section' => 'boat-pretrip-callout-section',
      'settings' => 'boat-pretrip-callout-image',
      'height' => 500,
      'width' => 500,
      'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
      )));
   
      $wp_customize->add_setting('boat-pretrip-callout-headline', array(
         'default' => 'Pretrip Info Header',
         'type' => 'theme_mod', // or 'option'
         'capability' => 'edit_theme_options',
         'theme_supports' => '', // Rarely needed.
         'transport' => 'refresh', // or postMessage
         'sanitize_callback' => '',
         'sanitize_js_callback' => '', // Basically to_json.
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-pretrip-callout-headline-control', array (
         'section' => 'boat-pretrip-callout-section',
         'settings' => 'boat-pretrip-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
   }

   add_action('customize_register', 'boat_gearinfo_callout');

   function boat_gearinfo_callout($wp_customize) {
      $wp_customize->add_section('boat-gearinfo-callout-section', array ('title' => 'Gear Info'));
   
      $wp_customize->add_setting('boat-gearinfo-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-gearinfo-callout-image-control', array (
      'label' => 'Gear info',
      'section' => 'boat-gearinfo-callout-section',
      'settings' => 'boat-gearinfo-callout-image',
      'height' => 500,
      'width' => 500,
      'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
      )));
   
      $wp_customize->add_setting('boat-gearinfo-callout-headline', array(
         'default' => 'Gear Info Header',
         'type' => 'theme_mod', // or 'option'
         'capability' => 'edit_theme_options',
         'theme_supports' => '', // Rarely needed.
         'transport' => 'refresh', // or postMessage
         'sanitize_callback' => '',
         'sanitize_js_callback' => '', // Basically to_json.
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-gearinfo-callout-headline-control', array (
         'section' => 'boat-gearinfo-callout-section',
         'settings' => 'boat-gearinfo-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
   }
   add_action('customize_register', 'boat_standardboatforms_callout');
   
   function boat_standardboatforms_callout($wp_customize) {
      $wp_customize->add_section('boat-standardboatforms-callout-section', array ('title' => 'Standard boat forms'));
   
   
      $wp_customize->add_setting('boat-standardboatforms-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-standardboatforms-callout-image-control', array (
      'label' => 'Standard Boat Forms Image',
      'section' => 'boat-standardboatforms-callout-section',
      'settings' => 'boat-standardboatforms-callout-image',
      'height' => 500,
      'width' => 500,
      'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
      )));
   
      $wp_customize->add_setting('boat-standardboatforms-callout-headline', array(
         'default' => 'Standard boat forms Header',
         'type' => 'theme_mod', // or 'option'
         'capability' => 'edit_theme_options',
         'theme_supports' => '', // Rarely needed.
         'transport' => 'refresh', // or postMessage
         'sanitize_callback' => '',
         'sanitize_js_callback' => '', // Basically to_json.
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-standardboatforms-callout-headline-control', array (
         'section' => 'boat-standardboatforms-callout-section',
         'settings' => 'boat-standardboatforms-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
   }     
   
   add_action('customize_register', 'boat_centerfindyourtripmiddle_callout');
   function boat_centerfindyourtripmiddle_callout($wp_customize) {
   
      $wp_customize->add_section('boat-centerfindyourtripmiddle-callout-section', array ('title' => 'Specific Trip Information'));
   
      $wp_customize->add_setting('boat-centerfindyourtripmiddle-callout-headline', array(
         'default' => 'Specific Trip Information',
         'type' => 'theme_mod', // or 'option'
         'capability' => 'edit_theme_options',
         'theme_supports' => '', // Rarely needed.
         'transport' => 'refresh', // or postMessage
         'sanitize_callback' => '',
         'sanitize_js_callback' => '', // Basically to_json.
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-centerfindyourtripmiddle-callout-headline-control', array (
         'section' => 'boat-centerfindyourtripmiddle-callout-section',
         'settings' => 'boat-centerfindyourtripmiddle-callout-headline',
         'type' => 'textarea',
         'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
         }
         //start here

   add_action('customize_register', 'boat_upcomingtrips_customize_register');
   
   function boat_upcomingtrips_customize_register($wp_customize) {

      $wp_customize->add_section('boat-upcomingtrips-callout-section', array ('title' => 'Upcoming Trips'));

//Trip one below
      $wp_customize->add_setting('boat-upcomingtrips-tripone-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-upcomingtrips-tripone-callout-image-control', array (
      'label' => 'Tripone Image',
      'section' => 'boat-upcomingtrips-callout-section',
      'settings' => 'boat-upcomingtrips-tripone-callout-image',
      'height' => 560,
      'width' => 1530,
      // 'height' => 560,
      // 'width' => 370,
      'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
   )));

//trip one logo
$wp_customize->add_setting('boat-upcomingtrips-triponelogo-callout-image');
   
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-upcomingtrips-triponelogo-callout-image-control', array (
'label' => 'Tripone Logo',
'section' => 'boat-upcomingtrips-callout-section',
'settings' => 'boat-upcomingtrips-triponelogo-callout-image',
'height' => 100,
'width' => 100,
// 'height' => 560,
// 'width' => 370,
'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
)));

      $wp_customize->add_setting('boat-upcomingtrips-callout-triponeheadline', array(
         'default' => 'Tripone Header'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-triponeheadline-control', array (
            'label' => 'Tripone Header',
         'section' => 'boat-upcomingtrips-callout-section',
         'settings' => 'boat-upcomingtrips-callout-triponeheadline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
      )));

         $wp_customize->add_setting('boat-upcomingtrips-callout-triponeparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-triponeparagraph-control', array (
            'label' => 'Tripone paragraph',
            'section' => 'boat-upcomingtrips-callout-section',
            'settings' => 'boat-upcomingtrips-callout-triponeparagraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
            )));

      //Trip two below
      $wp_customize->add_setting('boat-upcomingtrips-triptwo-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-upcomingtrips-triptwo-callout-image-control', array (
      'label' => 'triptwo Image',
      'section' => 'boat-upcomingtrips-callout-section',
      'settings' => 'boat-upcomingtrips-triptwo-callout-image',
      'height' => 560,
      'width' => 1530,
      // 'height' => 560,
      // 'width' => 370,
      'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
   )));

      $wp_customize->add_setting('boat-upcomingtrips-callout-triptwoheadline', array(
         'default' => 'triptwo Header'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-triptwoheadline-control', array (
            'label' => 'triptwo Header',
         'section' => 'boat-upcomingtrips-callout-section',
         'settings' => 'boat-upcomingtrips-callout-triptwoheadline',
         'type' => 'textarea',
         'sanitize_callback' => 'sanitize_text_field',
         'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
      )));
         
         $wp_customize->add_setting('boat-upcomingtrips-callout-triptwoparagraph', array (
            'default' => 'Enter paragraph here'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-triptwoparagraph-control', array (
            'label' => 'triptwo paragraph',
            'section' => 'boat-upcomingtrips-callout-section',
            'settings' => 'boat-upcomingtrips-callout-triptwoparagraph',
            'type' => 'textarea',
            'sanitize_callback' => 'sanitize_text_field',
            'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
            )));

            //Trip three below
            $wp_customize->add_setting('boat-upcomingtrips-tripthree-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-upcomingtrips-tripthree-callout-image-control', array (
            'label' => 'tripthree Image',
            'section' => 'boat-upcomingtrips-callout-section',
            'settings' => 'boat-upcomingtrips-tripthree-callout-image',
            'height' => 560,
            'width' => 1530,
            // 'height' => 560,
            // 'width' => 370,
            'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
      
            $wp_customize->add_setting('boat-upcomingtrips-callout-tripthreeheadline', array(
               'default' => 'tripthree Header'
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripthreeheadline-control', array (
                  'label' => 'tripthree Header',
               'section' => 'boat-upcomingtrips-callout-section',
               'settings' => 'boat-upcomingtrips-callout-tripthreeheadline',
               'type' => 'textarea',
               'sanitize_callback' => 'sanitize_text_field',
               'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
            )));
      
               $wp_customize->add_setting('boat-upcomingtrips-callout-tripthreeparagraph', array (
                  'default' => 'Enter paragraph here'
                  ));
                  
                  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripthreeparagraph-control', array (
                  'label' => 'tripthree paragraph',
                  'section' => 'boat-upcomingtrips-callout-section',
                  'settings' => 'boat-upcomingtrips-callout-tripthreeparagraph',
                  'type' => 'textarea',
                  'sanitize_callback' => 'sanitize_text_field',
                  'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
                  )));
      
            //Trip four below
            $wp_customize->add_setting('boat-upcomingtrips-tripfour-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-upcomingtrips-tripfour-callout-image-control', array (
            'label' => 'tripfour Image',
            'section' => 'boat-upcomingtrips-callout-section',
            'settings' => 'boat-upcomingtrips-tripfour-callout-image',
            'height' => 560,
            'width' => 1530,
            // 'height' => 560,
            // 'width' => 370,
            'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
      
            $wp_customize->add_setting('boat-upcomingtrips-callout-tripfourheadline', array(
               'default' => 'tripfour Header'
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripfourheadline-control', array (
                  'label' => 'tripfour Header',
               'section' => 'boat-upcomingtrips-callout-section',
               'settings' => 'boat-upcomingtrips-callout-tripfourheadline',
               'type' => 'textarea',
               'sanitize_callback' => 'sanitize_text_field',
               'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
            )));
               
      
               $wp_customize->add_setting('boat-upcomingtrips-callout-tripfourparagraph', array (
                  'default' => 'Enter paragraph here'
                  ));
                  
                  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripfourparagraph-control', array (
                  'label' => 'tripfour paragraph',
                  'section' => 'boat-upcomingtrips-callout-section',
                  'settings' => 'boat-upcomingtrips-callout-tripfourparagraph',
                  'type' => 'textarea',
                  'sanitize_callback' => 'sanitize_text_field',
                  'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
                  )));

                                                //Trip five below
            $wp_customize->add_setting('boat-upcomingtrips-tripfive-callout-image');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-upcomingtrips-tripfive-callout-image-control', array (
            'label' => 'tripfive Image',
            'section' => 'boat-upcomingtrips-callout-section',
            'settings' => 'boat-upcomingtrips-tripfive-callout-image',
            'height' => 560,
            'width' => 1530,
            // 'height' => 560,
            // 'width' => 370,
            'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
         )));
      
            $wp_customize->add_setting('boat-upcomingtrips-callout-tripfiveheadline', array(
               'default' => 'tripfive Header'
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripfiveheadline-control', array (
                  'label' => 'tripfive Header',
               'section' => 'boat-upcomingtrips-callout-section',
               'settings' => 'boat-upcomingtrips-callout-tripfiveheadline',
               'type' => 'textarea',
               'sanitize_callback' => 'sanitize_text_field',
               'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
            )));
      
               $wp_customize->add_setting('boat-upcomingtrips-callout-tripfiveparagraph', array (
                  'default' => 'Enter paragraph here'
                  ));
                  
                  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripfiveparagraph-control', array (
                  'label' => 'tripfive paragraph',
                  'section' => 'boat-upcomingtrips-callout-section',
                  'settings' => 'boat-upcomingtrips-callout-tripfiveparagraph',
                  'type' => 'textarea',
                  'sanitize_callback' => 'sanitize_text_field',
                  'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
                  )));
            
                                               //Trip six below
                                               $wp_customize->add_setting('boat-upcomingtrips-tripsix-callout-image');
   
                                               $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-upcomingtrips-tripsix-callout-image-control', array (
                                               'label' => 'tripsix Image',
                                               'section' => 'boat-upcomingtrips-callout-section',
                                               'settings' => 'boat-upcomingtrips-tripsix-callout-image',
                                               'height' => 560,
                                               'width' => 1530,
                                               // 'height' => 560,
                                               // 'width' => 370,
                                               'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
                                            )));
                                         
                                               $wp_customize->add_setting('boat-upcomingtrips-callout-tripsixheadline', array(
                                                  'default' => 'tripsix Header'
                                                  ));
                                                  
                                                  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripsixheadline-control', array (
                                                     'label' => 'tripsix Header',
                                                  'section' => 'boat-upcomingtrips-callout-section',
                                                  'settings' => 'boat-upcomingtrips-callout-tripsixheadline',
                                                  'type' => 'textarea',
                                                  'sanitize_callback' => 'sanitize_text_field',
                                                  'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
                                               )));
                                                  
                                         
                                                  $wp_customize->add_setting('boat-upcomingtrips-callout-tripsixparagraph', array (
                                                     'default' => 'Enter paragraph here'
                                                     ));
                                                     
                                                     $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-upcomingtrips-callout-tripsixparagraph-control', array (
                                                     'label' => 'tripsix paragraph',
                                                     'section' => 'boat-upcomingtrips-callout-section',
                                                     'settings' => 'boat-upcomingtrips-callout-tripsixparagraph',
                                                     'type' => 'textarea',
                                                     'sanitize_callback' => 'sanitize_text_field',
                                                     'active_callback' => 'boat_findyourtrippage_callout_control_on_condition'
                                                     )));                         

   }
   
         function boat_findyourtrippage_callout_control_on_condition( $control ) {
            if ( is_page('find-your-trip') ){
               return true;
               } else {
                  return false;
               }
               }

//annual report functions
add_action('customize_register', 'boat_annualReport_customize_register');
   function boat_annualReport_customize_register($wp_customize) {
      
      $wp_customize->add_section('boat-annualreport-callout', array ('title' => 'Annual Reports',
      // 'priority' => 1,
      //  'default' => 'testing',
       'title' => __('Annual Report', 'boat')
   ));

   $wp_customize->add_setting('boat-annualreport-callout-headline', array(
      'default' => 'Annual Report'
      ));
      
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-annualreport-callout-headline-control', array (
      'label' => 'Text',
      'section' => 'boat-annualreport-callout',
      'settings' => 'boat-annualreport-callout-headline',
      'type' => 'textarea',
      'active_callback' => 'boat_annualreport_callout_image_on_condition',
      )));

      $wp_customize->add_setting('boat-annualreport-callout-image', array(
      'type' => 'theme_mod', // or 'option'
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',
      'sanitize_callback' => '',
      'sanitize_js_callback' => '' // Basically to_json.
      ));

      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-annualreport-callout-image', array (
      'label' => 'Hero Image',
      'section' => 'boat-annualreport-callout',
      'settings' => 'boat-annualreport-callout-image',
      'active_callback' => 'boat_annualreport_callout_image_on_condition',
      'height' => 950,
      'width' => 1920
      )));
   }
   function boat_annualreport_callout_image_on_condition( $control ) {
      if ( is_page('annual-report') ){
   return true;
   } else {
      return false;
   }
   }

   
   function boat_footer($wp_customize) {
      $wp_customize->add_section('boat-footer-callout-section', array ('title' => 'Footer'));
   
      $wp_customize->add_setting('boat-footer-callout-image');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-footer-callout-image-control', array (
      'label' => 'Footer Logo',
      'section' => 'boat-footer-callout-section',
      'settings' => 'boat-footer-callout-image',
      'height' => 200,
      'width' => 520,
      'active_callback' => 'boat_footer_callout_image_on_condition'
      )));

      $wp_customize->add_setting('boat-footer-callout-facebooklogo');
   
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-footer-callout-facebooklogo', array (
      'label' => 'FB Logo',
      'section' => 'boat-footer-callout-section',
      'settings' => 'boat-footer-callout-facebooklogo',
      'height' => 50,
      'width' => 50,
      'active_callback' => 'boat_footer_callout_image_on_condition'
      )));

      $wp_customize->add_setting('boat-footer-callout-facebook', array (
         'default' => 'Follow us on Facebook'
         ));
         
         $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-footer-callout-facebook', array (
         'label' => 'Facebook Text',
         'section' => 'boat-footer-callout-section',
         'settings' => 'boat-footer-callout-facebook',
         'type' => 'textarea',
         'active_callback' => 'boat_footer_callout_image_on_condition'
         )));

         $wp_customize->add_setting('boat-footer-callout-instagramlogo');
   
         $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-footer-callout-instagramlogo', array (
         'label' => 'Insta Logo',
         'section' => 'boat-footer-callout-section',
         'settings' => 'boat-footer-callout-instagramlogo',
         'height' => 50,
         'width' => 50,
         'active_callback' => 'boat_footer_callout_image_on_condition'
         )));

         $wp_customize->add_setting('boat-footer-callout-instagram', array (
            'default' => 'See our Instagram photos'
            ));
            
            $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-footer-callout-instagram', array (
            'label' => 'Instagram Text',
            'section' => 'boat-footer-callout-section',
            'settings' => 'boat-footer-callout-instagram',
            'type' => 'textarea',
            'active_callback' => 'boat_footer_callout_image_on_condition'
            )));

            $wp_customize->add_setting('boat-footer-callout-twitterlogo');
   
            $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-footer-callout-twitterlogo', array (
            'label' => 'Twitter Logo',
            'section' => 'boat-footer-callout-section',
            'settings' => 'boat-footer-callout-twitterlogo',
            'height' => 50,
            'width' => 50,
            'active_callback' => 'boat_footer_callout_image_on_condition'
            )));
      

            $wp_customize->add_setting('boat-footer-callout-twitter', array (
               'default' => 'Catch our Twitter feed'
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-footer-callout-twitter', array (
               'label' => 'Twitter Text',
               'section' => 'boat-footer-callout-section',
               'settings' => 'boat-footer-callout-twitter',
               'type' => 'textarea',
               'active_callback' => 'boat_footer_callout_image_on_condition'
               )));
               
            $wp_customize->add_setting('boat-footer-callout-donate', array (
               'default' => 'Donate'
               ));
               
               $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'boat-footer-callout-donate', array (
               'label' => 'Donate Text',
               'section' => 'boat-footer-callout-section',
               'settings' => 'boat-footer-callout-donate',
               'type' => 'textarea',
               'active_callback' => 'boat_footer_callout_image_on_condition'
               )));


               $wp_customize->add_setting('boat-footer-callout-donatelogo');
   
               $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'boat-footer-callout-donatelogo', array (
               'label' => 'Donate Logo',
               'section' => 'boat-footer-callout-section',
               'settings' => 'boat-footer-callout-donatelogo',
               'height' => 237,
               'width' => 682,
               'active_callback' => 'boat_footer_callout_image_on_condition'
               )));

   }
   add_action('customize_register', 'boat_footer');

   function boat_footer_callout_image_on_condition( $control ) {
      if ( is_page('') ){
   return true;
   } else {
      return false;
   }
   }
?>
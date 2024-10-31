<?php
/**
 * Plugin Name:       Quran Phrases About Most People Shortcodes
 * Plugin URI:        https://www.zdatatech.com/portfolio/plugins/quran-phrases-about-most-people-shortcodes
 * Description:       Shortcodes to display phrases about "most people". Use short codes [people_defient /], [people_reason /], [people_know/], [people_grateful/], [people_know_also/], [people_grateful_also/]
 * Version:           1.4
 * Requires at least: 5.3
 * Requires PHP:      5.6
 * Author:            Zeshan B
 * Author URI:        https://www.zdatatech.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       qpmp
 * Domain Path:       /public/lang
 */
 
 add_action( 'init', 'register_quran_phrases_most_people_shortcodes' );
 
 function register_quran_phrases_most_people_shortcodes(){
    
      $src = plugins_url('/quran-phrases-about-most-people-shortcodes/public/font/alqalamquran/stylesheet.css',dirname(__FILE__) );
      wp_register_style('stylesheet', $src);
      wp_enqueue_style('stylesheet');
      
      add_shortcode('people_grateful_also', 'qpmp_people_grateful_also_2_243_shortcode');
      
      add_shortcode('people_reason', 'qpmp_people_reason_5_103_shortcode');
      
      add_shortcode('people_defient', 'qpmp_people_defient_5_49_shortcode');
      
      add_shortcode('people_know', 'qpmp_people_know_7_187_shortcode');
     
      add_shortcode('people_grateful', 'qpmp_people_grateful_10_60_shortcode');
      
      add_shortcode('people_know_also', 'qpmp_people_do_not_know_12_21_shortcode');
      
      add_shortcode('people_argue', 'qpmp_people_argue_18_54_shortcode');
      
 }
 
 function qpmp_people_grateful_also_2_243_shortcode($atts){
      extract(shortcode_atts(array(
           'size' => "40px",
            'tag' => "p",
            'color' => "#000"
          ),$atts));
     

     $people_gratitude_text  = '<'.$tag.' style="font-size:'.$size.';color:'.$color.';font-family:al_qalam_quranregular" dir="rtl">';
     $people_gratitude_text .= '..';
     $people_gratitude_text .= ' أَكْثَرَ النَّاسِ لَا يَشْكُرُونَ';
     $people_gratitude_text .= '..';
     $people_gratitude_text .= '<a href="http://www.tanzil.net/#trans/en.sahih/2:243" target="_blank" style="color:'.$color.'">(2:243)</a>';
     $people_gratitude_text .= '</'.$tag.'>';

     return $people_gratitude_text;
     
 }
 
 
 function qpmp_people_reason_5_103_shortcode($atts){
      extract(shortcode_atts(array(
           'size' => "40px",
            'tag' => "p",
            'color' => "#000"
          ),$atts));

     $people_reason_text  = '<'.$tag.' style="font-size:'.$size.';color:'.$color.';font-family:al_qalam_quranregular" dir="rtl">';
     $people_reason_text .= '..';
     $people_reason_text .= 'أَكْثَرُهُمْ لَا يَعْقِلُونَ';
     $people_reason_text .= '..';
     $people_reason_text .= '<a href="http://www.tanzil.net/#trans/en.sahih/5:103" target="_blank" style="color:'.$color.'">(5:103)</a>';
    $people_reason_text .= '</'.$tag.'>';
    
     return $people_reason_text;
     
 }
 
  function qpmp_people_defient_5_49_shortcode($atts){
       extract(shortcode_atts(array(
           'size' => "40px",
            'tag' => "p",
            'color' => "#000"
          ),$atts));

     $people_defient_text  = '<'.$tag.' style="font-size:'.$size.';color:'.$color.';font-family:al_qalam_quranregular" dir="rtl">';
     $people_defient_text .= '..';
     $people_defient_text .= 'كَثِيرًا مِّنَ النَّاسِ لَفَاسِقُونَ';
     $people_defient_text .= '..';
     $people_defient_text .= '<a href="http://www.tanzil.net/#trans/en.sahih/5:49" target="_blank" style="color:'.$color.'">(5:49)</a>';
     $people_defient_text .= '</'.$tag.'>';

     return $people_defient_text;
     
 }
 
 function qpmp_people_know_7_187_shortcode($atts){
      extract(shortcode_atts(array(
           'size' => "40px",
            'tag' => "p",
            'color' => "#000"
          ),$atts));

     $people_know_text  = '<'.$tag.' style="font-size:'.$size.';color:'.$color.';font-family:al_qalam_quranregular" dir="rtl">';
     $people_know_text .= '..';
     $people_know_text .= ' أَكْثَرَ النَّاسِ لَا يَعْلَمُونَ';
     $people_know_text .= '..';
     $people_know_text .= '<a href="http://www.tanzil.net/#trans/en.sahih/7:187" target="_blank" style="color:'.$color.'">(7:187)</a>';
     $people_know_text  .= '</'.$tag.'>';

     return $people_know_text;
     
 }
 
  function qpmp_people_grateful_10_60_shortcode($atts){
       extract(shortcode_atts(array(
           'size' => "40px",
            'tag' => "p",
            'color' => "#000"
          ),$atts));

     $people_grateful_text  = '<'.$tag.' style="font-size:'.$size.';color:'.$color.';font-family:al_qalam_quranregular" dir="rtl">';
     $people_grateful_text .= '..';
     $people_grateful_text .= ' أَكْثَرَهُمْ لَا يَشْكُرُونَ';
     $people_grateful_text .= '..';
     $people_grateful_text .= '<a href="http://www.tanzil.net/#trans/en.sahih/10:60" target="_blank" style="color:'.$color.'">(10:60)</a>';
     $people_grateful_text  .= '</'.$tag.'>';

     return $people_grateful_text;
     
 }
 
 function qpmp_people_do_not_know_12_21_shortcode($atts){
      extract(shortcode_atts(array(
           'size' => "40px",
            'tag' => "p",
            'color' => "#000"
          ),$atts));

     $people_do_not_know_text  = '<'.$tag.' style="font-size:'.$size.';color:'.$color.';font-family:al_qalam_quranregular" dir="rtl">';
     $people_do_not_know_text .= '..';
     $people_do_not_know_text .= ' أَكْثَرَ النَّاسِ لَا يَعْلَمُونَ';
     $people_do_not_know_text .= '..';
     $people_do_not_know_text .= '<a href="http://www.tanzil.net/#trans/en.sahih/12:21" target="_blank" style="color:'.$color.'">(12:21)</a>';
     $people_do_not_know_text  .= '</'.$tag.'>';

     return $people_do_not_know_text;
     
 }
 
  function qpmp_people_argue_18_54_shortcode($atts){
       extract(shortcode_atts(array(
           'size' => "40px",
            'tag' => "p",
            'color' => "#000"
          ),$atts));

     $people_argue_text  = '<'.$tag.' style="font-size:'.$size.';color:'.$color.';font-family:al_qalam_quranregular" dir="rtl">';
     $people_argue_text .= '..';
     $people_argue_text .= 'أَكْثَرَ شَيْءٍ جَدَلً';
     $people_argue_text .= '..';
     $people_argue_text .= '<a href="http://www.tanzil.net/#trans/en.sahih/18:54" target="_blank" style="color:'.$color.'">(18:54)</a>';
     $people_argue_text  .= '</'.$tag.'>';

     return $people_argue_text;
     
 }
 
  
?>
<?php

$size = get_sub_field('section_image_sizes','false');

$classes = '';
$style = '';
$headingStyle = '';


$sectionBG = get_sub_field('section_bg');
$sectionBGMode = get_sub_field('section_bg_mode');
$sectionBGColor= get_sub_field('section_background_color');
$sectionTextColor= get_sub_field('section_text_color');
$sectionHeadingColor= get_sub_field('section_heading_color');
$sectionSubHeadingColor= get_sub_field('section_subheading_color');

if( !empty($sectionBG) ):

if( !empty($sectionBGMode) &&  $sectionBGMode == "image"):
$classes .= ' background-image';
endif;

$style .= "background-image: url('" . $sectionBG['url'] . "');";

endif;

if( !empty($sectionBGMode) ):

$patternBG = "   background-attachment: fixed; ";
$coverBG = " background-size: cover;background-position: center; ";
$imageBG = " background-repeat: no-repeat;background-size: cover;background-attachment: fixed; ";
$style .= $sectionBGMode == "pattern" ? $patternBG : '';
$style .= $sectionBGMode == "image" ? $imageBG : '';
$style .= $sectionBGMode == "cover" ? $coverBG : '';

endif;

if( !empty($sectionBGColor) ):

$style .= 'background-color: ' . $sectionBGColor . ' !important;';

endif;

if( !empty($sectionTextColor) ):

$style .= 'color: ' . $sectionTextColor . ' !important;';

endif;

if( !empty($sectionHeadingColor) ):

$headingStyle .= 'color: ' . $sectionHeadingColor . ' !important;';
$headingStyle .= 'color: ' . $sectionSubHeadingColor . ' !important;';

endif;

if( !empty($sectionSubHeadingColor) ):

$subHeadingStyle .= 'color: ' . $sectionSubHeadingColor . ' !important;';

endif;
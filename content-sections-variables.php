<?php

$size = get_sub_field('section_image_sizes','false');

$classes = '';
$style = '';
$headingStyle = '';

$sectionLinkSlug = get_sub_field('section_slug');
$sectionBG = get_sub_field('section_bg');
$sectionBGMode = get_sub_field('section_bg_mode');
$sectionBGColor= get_sub_field('section_background_color');
$sectionBGColor2 = get_sub_field('section_background_color_2');
$sectionTextColor= get_sub_field('section_text_color');
$sectionHeadingColor= get_sub_field('section_heading_color');
$sectionSubHeadingColor= get_sub_field('section_subheading_color');
$sectionHighlightPadding= get_sub_field('image_section_highlight_padding');

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

if( $sectionBGMode == 'gradient' ):

$style .= "background: " . $sectionBGColor . ";";

$style .= "background: -moz-linear-gradient(top, " . $sectionBGColor . " 0%, " . $sectionBGColor2 . " 100%);";
$style .= "background: -webkit-linear-gradient(top, " . $sectionBGColor . " 0%," . $sectionBGColor2 . " 100%);";
$style .= "background: linear-gradient(to bottom, " . $sectionBGColor . " 0%," . $sectionBGColor2 . " 100%);";
$style .= "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='" . $sectionBGColor . "', endColorstr='" . $sectionBGColor2 . "',GradientType=0 );";

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
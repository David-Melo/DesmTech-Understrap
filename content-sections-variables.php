<?php

$size = get_sub_field('section_image_sizes','false');

$classes = '';
$style = '';
$headingStyle = '';

$sectionBG = get_sub_field('section_bg');
$sectionBGColor= get_sub_field('section_background_color');
$sectionTextColor= get_sub_field('section_text_color');
$sectionHeadingColor= get_sub_field('section_heading_color');
$sectionSubHeadingColor= get_sub_field('section_subheading_color');

if( !empty($sectionBG) ):

$classes .= ' background-image';
$style .= "background-image: url('" . $sectionBG['url'] . "');";

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
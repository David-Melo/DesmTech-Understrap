/* -------------------------------------------------------------------------- */

<?php if( get_field('heading_site_bar','option') != 'transparent' ): ?>

header .site-bar {
background-color: <?= get_field('heading_site_bar','option') ?> !important;
}
.nav-section.tablet, .bg-inverse {
background: <?= get_field('heading_site_bar','option') ?> !important;
}
<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('heading_site_bar_text','option') != 'transparent' ): ?>

header .site-bar {
color: <?= get_field('heading_site_bar_text','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('heading_site_bar_link','option') != 'transparent' ): ?>

header .site-bar a {
color: <?= get_field('heading_site_bar_link','option') ?> !important;
}

header .site-bar a:hover {
color: <?= get_field('heading_site_bar_link','option') ?> !important;
}

.nav-section.tablet .menu-link{
color: <?= get_field('heading_site_bar_link','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( !get_field('heading_site_bar_show','option') ): ?>

header .site-bar {
    display: none
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('footer_site_bar','option') != 'transparent' ): ?>

#footer-bar {
background-color: <?= get_field('footer_site_bar','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('footer_site_bar_text','option') != 'transparent' ): ?>

footer .site-bar {
color: <?= get_field('footer_site_bar_text','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('footer_site_bar_link','option') != 'transparent' ): ?>

footer .site-bar a {
color: <?= get_field('footer_site_bar_link','option') ?> !important;
}

footer .site-bar hover {
color: <?= get_field('footer_site_bar_link','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( !get_field('footer_site_bar_show','option') ): ?>

footer .site-bar {
display: none
}
body {
padding-bottom: 0 !important;
}
<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('main_nav_links','option') != 'transparent' ): ?>

.nav-section-wrapper li a {
color: <?= get_field('main_nav_links','option') ?>;
}


<?php endif; ?>

/* -------------------------------------------------------------------------- */


<?php if( get_field('site_highlight_color','option') != 'transparent' ): ?>

.nav-section .active .nav-link, #page-wrapper a {
color: <?= get_field('site_highlight_color','option') ?> !important;
}

.nav-section-nav .active .nav-link {
    color: <?= get_field('site_highlight_color','option') ?>
}

.brand-highlight {
color: <?= get_field('site_highlight_color','option') ?> !important;
}

.btn-highlight {
background-color: <?= get_field('site_highlight_color','option') ?> !important;
border-color: <?= get_field('site_highlight_color','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('main_nav_background','option') != 'transparent' ): ?>

.nav-section-wrapper {
background: <?= get_field('main_nav_background','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('body_overlay','option') != 'transparent' ): ?>

.body-overlay {
background: <?= get_field('body_overlay_color','option') ?>;
opacity: <?= get_field('body_overlay_opacity','option') ?>;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('body_overlay_mode','option') == 'gradient' ): ?>

.body-overlay {
background: -moz-linear-gradient(top,  <?= get_field('body_overlay_color','option') ?> 0%, <?= get_field('body_overlay_color_2','option') ?> 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  <?= get_field('body_overlay_color','option') ?> 0%,<?= get_field('body_overlay_color_2','option') ?> 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  <?= get_field('body_overlay_color','option') ?> 0%,<?= get_field('body_overlay_color_2','option') ?> 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?= get_field('body_overlay_color','option') ?>', endColorstr='<?= get_field('body_overlay_color_2','option') ?>',GradientType=0 ); /* IE6-9 */
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('main_nav_background','option') == 'transparent' ): ?>

.nav-section-wrapper {
background: <?= get_field('main_nav_background','option') ?> !important;
box-shadow: none !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('site_highlight_color','option') ): ?>

.panel-heading a,
.brand-highlight a{
color: <?= get_field('site_highlight_color','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('site_bg','option') ): ?>

html {
background-image: url(<?= get_field('site_bg','option') ?>);
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('site_bg','option') ): ?>

html {
background-color: <?= get_field('html_background_color','option') ?>;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('background_image_mode','option') == 'image' ): ?>

html {
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('paragraphs_align','option') ): ?>

#page p {
text-align: <?= get_field('paragraphs_align','option') ?>;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('section_heading_bg','option') ): ?>

.section-headings h2 span {
background-color: <?= get_field('section_heading_bg','option') ?>;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */



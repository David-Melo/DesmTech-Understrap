/* -------------------------------------------------------------------------- */

<?php if( get_field('main_menu_style','option') == 'independent' ): ?>
.header-section {
    padding-top: 40px !important;
}
<?php endif; ?>

<?php if( get_field('heading_site_bar_show','option') ): ?>
body {
    padding-top: 40px;
}
.nav-section-wrapper {
    top: 40px;
}
@media (max-width: 768px){
.header-section {
    margin-top: 116px;
}
}
.header-section {
    margin-top: 100px;
}
<?php endif; ?>

<?php if( get_field('main_nav_background_shadow','option') ): ?>
.nav-section-wrapper {
    box-shadow: <?= get_field('main_nav_background_shadow','option') ?>;
}
<?php endif; ?>

<?php if( get_field('footer_site_bar_show','option') ): ?>
body {
    padding-bottom: 40px;
}
<?php endif; ?>

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

a {
    color: <?= get_field('site_highlight_color','option') ?>;
    font-weight: 900;
}

.nav-section .active .nav-link, #page-wrapper a:not(.btn) {
    color: <?= get_field('site_highlight_color','option') ?>;
}

.nav-section-nav .active .nav-link {
    color: <?= get_field('site_highlight_color','option') ?>
}

.brand-highlight {
color: <?= get_field('site_highlight_color','option') ?> !important;
}

.btn-highlight {
background-color: <?/*= get_field('site_highlight_color','option') */?> !important;
border-color: <?/*= get_field('site_highlight_color','option') */?> !important;
}

    .menu-toggle i {
        color: <?= get_field('site_highlight_color','option') ?>;
        line-height: 60px;
        font-size: 35px;
    }
    .menu-toggle:hover i {
        color: #FFFFFF;
    }

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('main_nav_background','option') != 'transparent' ): ?>

.nav-section-wrapper {
background-color: <?= get_field('main_nav_background','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */

<?php if( get_field('main_nav_background_image','option') != 'transparent' ): ?>

.nav-section-wrapper {
background-image: url(<?= get_field('main_nav_background_image','option') ?>) !important;
background-size: cover;
background-position: center;
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

<?php if( get_field('html_background_color','option') ): ?>

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

<?php if( get_field('main_menu_style','option') == 'collapsed' ): ?>

.logo-wrapper a {
    padding: 0px 0;
}

.logo-wrapper img {
    height: 60px;
}

@media (max-width: 1321px) {
    .header-section {
        */margin-top: 80px;*/
    }
}


<?php endif; ?>

/* -------------------------------------------------------------------------- */

/* -------------------------------------------------------------------------- */

<?php if( get_field('main_menu_button_color','option') == 'collapsed' ): ?>

.menu-container a.side-bar-toggle {
    color: <?= get_field('main_menu_button_color','option') ?>;
}
.menu-container a.side-bar-toggle:hover {
    color: <?= get_field('site_highlight_color','option') ?>;
}

.menu-container a.side-bar-toggle  .navbar-toggler-icon{
    color: <?= get_field('main_menu_button_color','option') ?>;
}
.menu-container a.side-bar-toggle:hover .navbar-toggler-icon, .menu-toggle i {
    color: <?= get_field('site_highlight_color','option') ?> !important;
}

<?php endif; ?>

/* -------------------------------------------------------------------------- */


<?php if( get_field( 'footer_bg_color', 'option' ) ) : ?>
.footer_bg_color {
    background-color: <?= get_field( 'footer_bg_color', 'option' ); ?>;
}
<?php endif; ?>

<?php if( get_field( 'footer_link_color', 'option' ) ) : ?>
.footer_link_color a {
    color: <?= get_field( 'footer_link_color', 'option' ); ?> !important;
}

<?php endif; ?>

<?php if( get_field( 'footer_text_color', 'option' ) ) : ?>
.footer_text_color {
    color: <?= get_field( 'footer_text_color', 'option' ); ?>;
}
<?php endif; ?>


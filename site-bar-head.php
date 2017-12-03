<section id="header-bar" class="site-bar clearfix">

    <div class="container-fluid">

        <a class="float-sm-left hidden-xs-down" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?= get_field('site_heading','option') ?></a>

        <ul class="social-menu float-md-right d-flex justify-content-between">
            <?php if( get_field('facebook_url','option') ): ?>
                <li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('facebook_url','option'); ?>" title="Find Us On Facebook" target="_blank"><i class="fa fa-facebook"></i> <!--<span class="hidden-md-up">Like Us On Facebook</span>--></a></li>
            <?php endif; ?>
            <?php if( get_field('twitter_url','option') ): ?>
                <li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('twitter_url','option'); ?>" title="Find Us On Twitter" target="_blank"><i class="fa fa-twitter"></i> <!--<span class="hidden-xs-up">Follow Us On Twitter</span>--></a></li>
            <?php endif; ?>
            <?php if( get_field('instagram_url','option') ): ?>
                <li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('instagram_url','option'); ?>" title="Find Us On Instagram" target="_blank"><i class="fa fa-instagram"></i> <!--<span class="hidden-xs-up">View Us On Instagram</span>--></a></li>
            <?php endif; ?>
            <?php if( get_field('youtube_url','option') ): ?>
                <li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('youtube_url','option'); ?>" title="Find Us On YouTube" target="_blank"><i class="fa fa-youtube-square"></i> <!--<span class="hidden-xs-up">Our YouTube Channel</span>--></a></li>
            <?php endif; ?>
            <?php if( get_field('google_url','option') ): ?>
                <li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('google_url','option'); ?>" title="Find Us On Google" target="_blank"><i class="fa fa-google"></i> <!--<span class="hidden-xs-up">Find Us On Google</span>--></a></li>
            <?php endif; ?>
            <?php if( get_field('yelp_url','option') ): ?>
                <li class="menu-item col"><a class="nav-link text-center" href="<?php the_field('yelp_url','option'); ?>" title="Find Us On Yelp" target="_blank"><i class="fa fa-yelp"></i> <!--<span class="hidden-xs-up">Yelp Reviews</span>--></a></li>
            <?php endif; ?>
        </ul>

    </div>

</section>
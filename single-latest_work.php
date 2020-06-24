<?php get_header();?>

<!-- Global Page Section Start -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php the_title(); ?></h2>
                    <div class="portfolio-meta">
                        <span><?php the_time('M d, Y'); ?></span>|
                        <span>Category: <?php the_category(', '); ?></span>|
                        <span>Website: <a href="<?php echo esc_url(site_url()); ?>"><?php bloginfo('name'); ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#Page header-->

<!-- Single Portfolio -->
<section class="portfolio-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if(have_posts()){
                    while(have_posts()) : the_post();
                ?>
                
                <div class="portfolio-single-img">
                    <?php the_post_thumbnail('post-img', array('class' => 'img-responsive')); ?>
                </div>

                <div class="portfolio-content">
                    <?php the_content(); ?>
                </div>

                <?php
                        endwhile;
                    }
                ?>

            </div>
        </div>
    </div>
</section>

<!-- Feature Works Section -->
<?php get_template_part('/temp_part/feature_works');?>

<?php get_footer(); ?>
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
                        <span><?php the_tags(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#Page header-->

<!-- Single Post -->
<section class="single-post single_post_section">
    <div class="container">
        
        <?php
            if(have_posts()){
                while(have_posts()) : the_post();
        ?>

        <div class="row">
            <div class="col-md-12">
                
                <div class="post-img">
                    <?php the_post_thumbnail('post-img', array('class' => 'img-responsive')); ?>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                
                <?php comments_template(); ?>
                
            </div>
        </div>

        <?php
                endwhile;
            }
        ?>
        
    </div>
</section>

<?php get_footer(); ?>
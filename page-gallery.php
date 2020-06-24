<?php get_header();?>

<!-- Global Page Section Start -->
<?php get_template_part('/temp_part/global_page');?>

<!-- Gallery -->
<section id="gallery" class="gallery">
    <div class="container">
        <div class="row">
            
            <?php

                $lw_query = new WP_Query(array(
                    'post_type' => 'latest_work',
                    'posts_per_page' => -1,
                    'order' => 'DSC'
                ));

                if($lw_query -> have_posts()){
                    while($lw_query -> have_posts()) : $lw_query -> the_post();

                    $fancybox_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                    $demo = get_post_meta(get_the_ID(), 'lw_demo_field', true);
                    $fadeInType = get_post_meta(get_the_ID(), 'lw_fadeInType', true);
                    $wow_delay = get_post_meta(get_the_ID(), 'lw_data_wow_delay', true);
            ?>

            <div class="col-md-4 col-sm-6">
                <figure class="wow <?php echo $fadeInType; ?> animated portfolio-item animated" data-wow-duration="500ms"
                    data-wow-delay="<?php echo $wow_delay; ?>"
                    style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms;">
                    <div class="img-wrapper">
                        <?php the_post_thumbnail('custom-post-image', array('class' => 'img-responsive'))?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo $fancybox_img[0]; ?>"><?php echo $demo; ?></a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>

            <?php
                    endwhile;
                }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
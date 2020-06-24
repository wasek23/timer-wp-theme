<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section class="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $timerAgency['featureWorks_title']; ?></h2>
        <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo $timerAgency['featureWorks_slogan']; ?></p>
        <div class="row">
            
            <?php
                $lw_query = new WP_Query(array(
                    'post_type' => 'latest_work',
                    'posts_per_page' => 4,
                    'order' => 'DSC'
                ));

                if($lw_query -> have_posts()){
                    while($lw_query -> have_posts()) : $lw_query -> the_post();

                    $fancybox_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                    $demo = get_post_meta(get_the_ID(), 'lw_demo_field', true);
                    $details = get_post_meta(get_the_ID(), 'lw_details_field', true);
                    $wow_delay = get_post_meta(get_the_ID(), 'lw_data_wow_delay', true);
            ?>
            
            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="<?php echo $wow_delay; ?>">
                    <div class="img-wrapper">
                        <?php the_post_thumbnail('custom-post-image', array('class' => 'img-responsive')); ?>

                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo $fancybox_img[0]; ?>"><?php echo $demo; ?></a>
                                <a target="_blank" href="<?php the_permalink(); ?>"><?php echo $details; ?></a>
                            </div>
                        </div>
                    </div>

                    <figcaption>
                        <h4>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <p><?php the_excerpt(); ?></p>
                    </figcaption>
                </figure>
            </div>

            <?php
                    endwhile;
                }
            ?>
        </div>
    </div>
</section>
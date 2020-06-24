<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php echo $timerAgency['latest_work_title']; ?></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s"><?php echo $timerAgency['latest_work_slogan']; ?></p>
        </div>
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
                    $details = get_post_meta(get_the_ID(), 'lw_details_field', true);
                    $wow_delay = get_post_meta(get_the_ID(), 'lw_data_wow_delay', true);
            ?>
                
            <div class="col-md-4 col-sm-6">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="<?php echo $wow_delay; ?>">
                    <div class="img-wrapper">
                        <?php the_post_thumbnail('custom-post-image', array('class' => 'img-responsive')); ?>

                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo $fancybox_img[0];?>"><?php echo $demo; ?></a>
                                <a target="_blank" href="<?php the_permalink(); ?>"><?php echo $details; ?></a>
                            </div>
                        </div>
                    </div>

                    <figcaption>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

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
</section> <!-- #works -->
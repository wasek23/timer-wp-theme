<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php echo $timerAgency['feature_offer_title']; ?></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s"><?php echo $timerAgency['feature_offer_slogan']; ?></p>
        </div>
        <div class="row">
            <?php
                $of_query = new WP_Query(array(
                    'post_type' => 'feature_offer',
                    'posts_per_page' => -1,
                    'order' => 'DSC'
                ));
                
                if($of_query -> have_posts()){
                    while($of_query -> have_posts()) : $of_query -> the_post();
                    
                    $offer_content = get_post_meta(get_the_ID(), 'offer_content', true);
                    $offer_icon = get_post_meta(get_the_ID(), 'offer_icon', true);
                    $wow_delay = get_post_meta(get_the_ID(), 'offer_data_wow_delay', true);
            ?>
                <div class="col-md-4 col-sm-6">
                    <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="<?php echo $wow_delay; ?>">
                        <div class="media-left">
                            <div class="icon">
                                <i class="ion-ios-<?php echo $offer_icon; ?>"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php the_title(); ?></h4>
                            <p><?php echo $offer_content; ?></p>
                        </div>
                    </div>
                </div>
            <?php
                    endwhile;
                }
            ?>
        </div>
    </div>
</section> <!-- /#feature -->
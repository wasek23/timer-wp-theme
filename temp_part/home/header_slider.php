<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section id="hero-area" style="background-image: url(<?php echo $timerAgency['header_hero_bg_img']['url']; ?>); font-size: 18pt;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                            <span><?php echo $timerAgency['header_hero_title']; ?></span><br>
                            <span class="cd-words-wrapper">
                                <?php
                                    $i = 0;

                                    if(is_array($timerAgency['header_hero_slider'])){
                                        foreach($timerAgency['header_hero_slider'] as $slider_single_item){
                                            $i++;
                                ?>
                                            <b class="<?php if($i == 1){echo "is-visible";}?>"><?php echo $slider_single_item['title']; ?></b>
                                <?php
                                        }
                                    }
                                ?>
                            </span>
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" ><?php echo $timerAgency['header_hero_slogan']; ?></h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="<?php echo esc_url($timerAgency['header_hero_url']); ?>" data-section="<?php echo esc_url($timerAgency['header_hero_url']); ?>"><?php echo $timerAgency['header_hero_btn']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->
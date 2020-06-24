<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $timerAgency['our_client_title']; ?></h2>
                <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms"
                    data-wow-delay=".5s"><?php echo $timerAgency['our_client_slogan']; ?></p>
                <div id="clients-logo" class="owl-carousel">
                    
                    <?php
                        if(is_array($timerAgency['our_client_post'])){
                            foreach($timerAgency['our_client_post'] as $single_client){
                    ?>
                        <div>
                            <img src="<?php echo $single_client['image']; ?>" alt="">
                        </div>
                    <?php
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
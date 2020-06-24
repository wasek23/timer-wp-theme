<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $timerAgency['services_section_title']; ?></h2>
                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo $timerAgency['services_section_slogan']; ?></p>
                    <div class="row service-parts">
                        
                        <?php
                            if(is_array($timerAgency['services_items'])){
                                foreach($timerAgency['services_items'] as $single_service_item){
                        ?>

                        <div class="col-sm-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="800ms">
                                <i class="ion-ios-<?php echo $single_service_item['url']; ?>-outline"></i>
                                <h4><?php echo $single_service_item['title']; ?></h4>
                                <p><?php echo $single_service_item['description']; ?></p>
                            </div>
                        </div>

                        <?php
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block">
                    <img class="img-responsive" src="<?php echo $timerAgency['services_section_img']['url']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
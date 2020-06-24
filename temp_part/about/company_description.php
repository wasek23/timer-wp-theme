<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s">
                <img src="<?php echo $timerAgency['company_description_img']['url']; ?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $timerAgency['company_description_title']; ?></h3>
                    
                    <p class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo $timerAgency['company_description_content']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            
            <?php
                if(is_array($timerAgency['company_features'])){
                    foreach($timerAgency['company_features'] as $single_company_features){
            ?>
                <div style="background-color: #02bdd5;" class="block wow fadeInDown" data-wow-duration="500ms" data-wow-delay="<?php echo $single_company_features['url']; ?>">
                    <h2><?php echo $single_company_features['title']; ?></h2>
                    <p><?php echo $single_company_features['description']; ?></p>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</section>
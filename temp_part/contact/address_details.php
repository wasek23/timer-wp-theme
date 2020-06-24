<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<div class="row address-details">
    
    <?php
        if(is_array($timerAgency['address_details_items'])){
            foreach($timerAgency['address_details_items'] as $single_address_item){
    ?>

    <div class="col-md-3 col-sm-6">
        <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
            <i class="ion-ios-<?php echo $single_address_item['title']; ?>-outline"></i>
            <h5><?php echo $single_address_item['description']; ?></h5>
        </div>
    </div>

    <?php
            }
        }
    ?>
</div>
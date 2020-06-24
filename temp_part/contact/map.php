<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<div class="col-md-6">
    <div class="map-area">
        <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $timerAgency['map_area_title']; ?></h2>
        <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s"><?php echo $timerAgency['map_area_slogan']; ?></p>
        <div class="map">
            <iframe src="<?php echo $timerAgency['map_url']; ?>" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
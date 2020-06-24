<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2><?php echo $timerAgency['about_me_title']; ?></h2>
                    <p><?php echo $timerAgency['about_me_content']; ?></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="<?php echo $timerAgency['about_me_img']['url']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->
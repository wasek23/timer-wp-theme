<?php get_header();?>

<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<!-- 404 Section -->
<section class="moduler wrapper_404">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s"><?php echo $timerAgency['404_page_headline'] ;?></h1>
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s"><?php echo $timerAgency['404_page_title'] ;?></h2>
                    <p class="wow fadeInUp animated" data-wow-delay=".9s"><?php echo $timerAgency['404_page_slogan'] ;?></p>
                    <a href="<?php echo $timerAgency['404_page_url'] ;?>" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s"><?php echo $timerAgency['404_page_btn'] ;?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
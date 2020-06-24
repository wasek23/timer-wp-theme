<?php get_header();?>

<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<!-- Global Page Section Start -->
<?php get_template_part('/temp_part/global_page');?>

<!-- Contact Section Start -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="<?php if("$timerAgency[contact_p_map_area_on_off]" == 1){ echo 'col-md-6'; }else{ echo ''; } ?>">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $timerAgency['contact_form_title']; ?></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s"><?php echo $timerAgency['contact_form_slogan']; ?></p>
                    <div class="contact-form">
                        
                        <?php
                            if(have_posts()){
                                while(have_posts()) : the_post();
                        ?>

                        <?php the_content(); ?>

                        <?php
                                endwhile;
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
            
            <!-- Map Area Section Start -->
            <?php 
                if("$timerAgency[contact_p_map_area_on_off]" == 1){
                    get_template_part('/temp_part/contact/map');
                }else{
                    echo '';
                }
            ?>

        </div>
        
        <!-- Address Details Section Start -->
        <?php 
            if("$timerAgency[contact_p_address_details_on_off]" == 1){
                get_template_part('/temp_part/contact/address_details');
            }else{
                echo '';
            }
        ?>
    </div>
</section>

<?php get_footer(); ?>
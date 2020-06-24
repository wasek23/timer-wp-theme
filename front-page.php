<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<?php get_header();?>

<!-- Header Slider Section -->
<?php get_template_part('/temp_part/home/header_slider');?>

<!-- About Section -->
<?php 
    if("$timerAgency[front_p_about_me_on_off]" == 1){
        get_template_part('/temp_part/home/about_me');
    }else{
        echo '';
    }
?>

<!-- Latest Works Section  -->
<?php 
    if("$timerAgency[front_p_latest_work_on_off]" == 1){
        get_template_part('/temp_part/home/latest_work');
    }else{
        echo '';
    }
?>

<!-- Offer From Me Section -->
<?php 
    if("$timerAgency[front_p_feature_offer_on_off]" == 1){
        get_template_part('/temp_part/home/offer_from_me');
    }else{
        echo '';
    }
?>

<?php get_footer(); ?>
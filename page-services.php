<?php get_header();?>

<!-- Global Page Section -->
<?php get_template_part('/temp_part/global_page');?>

<!-- Service Page Section -->
<?php 
    if("$timerAgency[service_p_service_section_on_off]" == 1){
        get_template_part('/temp_part/services/service_section');
    }else{
        echo '';
    }
?>

<!-- Feature Works Section -->
<?php 
    if("$timerAgency[service_p_feature_works_on_off]" == 1){
        get_template_part('/temp_part/feature_works');
    }else{
        echo '';
    }
?>

<!-- Clients Section -->
<?php 
    if("$timerAgency[service_p_clients_on_off]" == 1){
        get_template_part('/temp_part/clients');
    }else{
        echo '';
    }
?>

<?php get_footer(); ?>
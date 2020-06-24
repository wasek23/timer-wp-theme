<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<?php get_header();?>

<!-- Global Page Section -->
<?php get_template_part('/temp_part/global_page'); ?>

<!-- Company Description Section -->
<?php 
    if("$timerAgency[about_p_company_description_on_off]" == 1){
        get_template_part('/temp_part/about/company_description');
    }else{
        echo '';
    }
?>

<!-- Company Feature Section -->
<?php 
    if("$timerAgency[about_p_company_fearure_on_off]" == 1){
        get_template_part('/temp_part/about/company_fearure');
    }else{
        echo '';
    }
?>

<!-- Team Section -->
<?php 
    if("$timerAgency[about_p_team_members_on_off]" == 1){
        get_template_part('/temp_part/team_members');
    }else{
        echo '';
    }
?>

<!-- Clients Section -->
<?php 
    if("$timerAgency[about_p_clients_on_off]" == 1){
        get_template_part('/temp_part/clients');
    }else{
        echo '';
    }
?>

<?php get_footer(); ?>
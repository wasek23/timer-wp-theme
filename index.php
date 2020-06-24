<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<?php get_header();?>

<!-- Blog -->
<?php 
    if("$timerAgency[blog_page_type]" == 1){
        get_template_part('/temp_part/blog/fullwidth');
    }elseif("$timerAgency[blog_page_type]" == 2){
        get_template_part('/temp_part/blog/left_sidebar');
    }elseif("$timerAgency[blog_page_type]" == 3){
        get_template_part('/temp_part/blog/right_sidebar');
    }else{
        echo '';
    }
?>

<?php get_footer(); ?>
<?php get_header();?>

<!-- Blog Global Section -->
<?php get_template_part('/temp_part/blog/blog_global');?>

<!-- Full Width Blog -->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <!--Blog Loop-->
            <div class="col-md-12">
                <?php get_template_part('/temp_part/blog/blog_loop');?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
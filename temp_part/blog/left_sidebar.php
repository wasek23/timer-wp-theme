<?php get_header();?>

<!-- Blog Global Section -->
<?php get_template_part('/temp_part/blog/blog_global');?>

<!-- Blog Left sidebar -->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>

            <!--Blog Loop-->
            <div class="col-md-8">
                <?php get_template_part('/temp_part/blog/blog_loop');?>
            </div>
        </div>
    </div>
</section>
<!-- End of Blog Left sidebar -->

<?php get_footer(); ?>
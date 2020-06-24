<?php get_header();?>

<!-- Blog Global Section -->
<?php get_template_part('/temp_part/blog/blog_global');?>

<!-- Blog With Right Sidebar -->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <!--Blog Loop-->
            <div class="col-md-8">
                <?php get_template_part('/temp_part/blog/blog_loop');?>
            </div>
            
            <!-- Sidebar -->
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
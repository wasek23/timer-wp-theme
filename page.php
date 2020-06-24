<?php get_header();?>

<!-- Global Page Section Start -->
<?php get_template_part('/temp_part/global_page');?>

<!-- Blog -->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <!--Blog Loop-->
            <div class="col-md-12">

                <?php
                    if(have_posts()){
                        while(have_posts()) : the_post();
                ?>

                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-img', array('class' => 'img-responsive')); ?></a>
                    </div>
                    <div class="blog-content" style="margin-top: 75px;">
                        <p><?php the_content(); ?></p>
                    </div>
                </article>

                <?php
                        endwhile;
                    }
                ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
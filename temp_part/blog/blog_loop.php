<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<?php
    if(have_posts()){
        while(have_posts()) : the_post();
?>

<article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
    <div class="blog-post-image">
        <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-img', array('class' => 'img-responsive')); ?></a>
    </div>
    <div class="blog-content">
        <h2 class="blogpost-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="blog-meta">
            <span><?php the_time('M d, Y'); ?></span>
            <span>by <?php the_author_posts_link(); ?></span>
            <span><?php the_tags(); ?></span>
        </div>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-dafault btn-details"><?php echo $timerAgency['blog_post_read_more_label']; ?></a>
    </div>
</article>

<?php
        endwhile;
    }
?>

<div class="main_pagination">
    <div class="prev btn btn-dafault"><?php previous_posts_link($timerAgency['blog_post_prev_pagination']); ?></div>
    <div class="next btn btn-dafault"><?php next_posts_link($timerAgency['blog_post_next_pagination']); ?></div>
    <div class="clearfix"></div>
</div>
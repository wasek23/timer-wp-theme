<?php if ( have_comments() ) : ?>
	<h2>Comments</h2>

	<div class="comments">
		<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 105,
			) );
		?>
	</div><!-- .comments -->

	<?php
		// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'TimerAgency' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'TimerAgency' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'TimerAgency' ) ); ?></div>
	</nav><!-- .comment-navigation -->
	<?php endif; // Check for comment navigation ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.' , 'TimerAgency' ); ?></p>
	<?php endif; ?>

<?php endif; // have_comments() ?>


<?php if(comments_open()) : ?>
	<div class="post-comment">
		
		<h3>Leave a Reply</h3>

    	<?php if(get_option('comment_registration') && !$user_ID) : ?>  
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
			
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal">

				<?php if($user_ID) : ?>  
					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
				<?php else : ?>

					<div class="form-group">
						<p class="col-md-6"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" class="col-md-12 form-control" placeholder="Name"/>  
						<label for="author" class="sr_only">Name <?php if($req) echo "(required)"; ?></label></p>
						<p class="col-md-6"><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" class="col-md-12 form-control" placeholder="Email"/>
						<label for="email" class="sr_only">Email (will not be published<?php if($req) echo ", required"; ?>)</label></p>
					</div>

				<?php endif; ?>
				
				<div class="form-group">
					<p class="col-md-12"><textarea name="comment" id="comment" rows="8" tabindex="4" class=" form-control" placeholder="Message"></textarea></p>  
				</div>

				<?php //show_subscription_checkbox(); ?>
				<p><input name="submit" type="submit" id="submit" tabindex="5" value="Comment" class="btn btn-send"/>  
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
				<?php do_action('comment_form', $post->ID); ?>  

			</form>

		<?php endif; ?>
	</div>
<?php else : ?>  
    <p>The comments are closed.</p>  
<?php endif; ?>
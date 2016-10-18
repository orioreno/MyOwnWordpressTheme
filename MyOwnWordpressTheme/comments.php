<?php 
//prevent users from posting comments if you’ve set your settings to password protected comments
if ( post_password_required() ) {
	return;
} 
?>
	<div id="comments">
		<div class="comments-wrapper">
			<div class="comments-inner-wrapper">
				<div class="comments-form">
				<?php if ( ! comments_open() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
					<p class="no-comments">
						<i class="fa fa-times-circle" aria-hidden="true"></i> <?php _e( 'Comments are closed.' ); ?>
					</p>
				<?php 
				else: comment_form(); 
				endif; ?>
				</div>
				<div class="comments-number">
					<a href="#comments-list" >
					<?php if ( comments_open() || have_comments() ) : ?>
						<i class="fa fa-comments-o" aria-hidden="true"></i>
						<?php echo get_comments_number() ?>
					<?php else: ?>
						<i class="fa fa-times-circle" aria-hidden="true"></i>
					<?php endif; ?>
					</a>
				</div>
			</div>
			<ul id="comments-list" class="comments-list">
				<?php 
				wp_list_comments( array(
					'short_ping'  => true,
					'avatar_size' => 50,
				) );
				?>
			</ul>
			
		</div>
	</div>
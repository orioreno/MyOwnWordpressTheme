<div class="post">
	<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="post-meta">
		Posted on <span class="post-date"><?php echo get_the_date(); ?> </span>
		<?php if ( comments_open() || get_comments_number() ) : ?>
			&minus; <i class="fa fa-comment-o" aria-hidden="true"></i><a class="post-comment-link" href="<?php comments_link(); ?>">
			<?php
			if (get_comments_number() > 0)
				printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n(get_comments_number() ) );
			else 
				echo "No comment so far, be the first comment<i>!</i>";
			?>
		</a>
		<?php endif; ?>
		
	</div>
	<a href="<?php the_permalink(); ?>">
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	</a>
	<div class="post-content">
		<?php the_excerpt(); ?>
	</div>
</div>
<div class="post">
	<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="post-meta">
		Posted by <a href="#" class="post-author"><?php the_author(); ?></a>
		on <span class="post-date"><?php the_date(); ?></span>
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

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="post-content single-post-content">
		<?php the_content(); ?>
	</div>
</div>

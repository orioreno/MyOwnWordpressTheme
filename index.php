<?php get_header(); ?>
<div id="main">
	<?php get_sidebar(); ?>
	<div id="content">
		<?php 
		if ( have_posts() ) : 
		while ( have_posts() ) : 
			the_post();
			get_template_part( 'content', get_post_format() );
		endwhile; 
		?>
		<div class="pager">
			<?php next_posts_link( 'Older posts' ); ?>
			<?php previous_posts_link( 'Newer posts' ); ?>
		</div>
		<?php
		endif; //if ( have_posts() )
		?>
	</div>
</div>
<?php get_footer(); ?>
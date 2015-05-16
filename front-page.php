<?php get_header(); ?>
<?php get_sidebar(); ?>
		<div id="MainColumn">

            <div id="MainContent" class="ClearFix">
				<?php
				if (have_posts()) :
				  while (have_posts()) :
					the_post();
				    get_template_part('content');

				  endwhile;
				endif;
				?>

            </div>
		</div>
	</div>


<?php get_footer(); ?>

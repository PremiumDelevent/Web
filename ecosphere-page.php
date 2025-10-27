<?php /* Template Name: Ecosphere Template */ 
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content-ecosphere', 'page' );
				endwhile;
		?>
	</main>
</div>
<?php
get_footer();
?>
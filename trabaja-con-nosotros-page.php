<?php /* Template Name: Trabaja Con Nosotros Template */ 
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content-trabaja-con-nosotros', 'page' );
				endwhile;
		?>
	</main>
</div>
<?php
get_footer();
?>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wbsw
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="error-404 not-found container-2">
			<header class="page-header">
                <img src="/wp-content/uploads/2023/09/icon-not-found.png">
				<h1 class="page-title"><?php _e( '404 - No encontrado', 'ws' ); ?></h1>
				<a class="button-generic" href="<?php echo home_url(); ?>"><?php _e( 'Inicio', 'ws' ); ?></a>
			</header>
		</section>
	</main>
	
<?php
get_footer();

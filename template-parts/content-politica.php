<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbsw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="politica-content">
        <div class="container-2">
            <h1><?php the_title(); ?></h1>
            <?php the_field("text_html", false, false); ?>
        </div>
	</section>
</article>
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbsw
 */

$current_lang = apply_filters( 'wpml_current_language', NULL ); 

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container-1">

        <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/icons8-checkmark.svg">

        <div>

            <h1><?php _e( '¡Gracias por contactarnos!', 'ws' ); ?></h1>

            <p><?php _e( 'Nos pondremos en contacto contigo lo antes posible.', 'ws' ); ?></p>

        </div>

        <a class="button-generic" href="<?php echo home_url(); ?>"><?php _e( 'Inicio', 'ws' ); ?></a>

    </section>
    
</article>
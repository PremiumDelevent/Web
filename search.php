<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package wbsw
 */

get_header();

?>

<style>

    .show_more_search { opacity: 0; max-width: fit-content; margin-left: auto; margin-right: auto; margin-top: 20px; }

    .show_more_search.show { opacity: 1; }

    .next, .previous { visibility: hidden; font-size: 35px; text-decoration: none; color: #000; padding: 0 10px; }

    .next.show, .previous.show { visibility: visible; }

    .next:hover, .previous:hover { color: #555; }

</style>

<main id="primary" class="site-main">

    <div class="container-3">

        <?php if ( have_posts() ) : ?>

            <header class="page-header">

                <h1 class="page-title">

                    <?php

                    $cont_prod_search = 0;

                    $searchResultText = _e('Search results for: %s', 'ws');

                    printf( $searchResultText, '<span>' . get_search_query() . '</span>' );

                    ?>

                </h1>

            </header>

            <div class="product-wrap">

                <?php

                while ( have_posts() ) :

                    $cont_prod_search++;

                    the_post();

                    get_template_part( 'template-parts/content', 'search' );

                endwhile;

                ?>

            </div>
            
            <div class="show_more_search">

                <?php

                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                $total_pages = $wp_query->max_num_pages;

                $search_query = get_search_query();

                $next_page = $paged + 1;

                $prev_page = $paged - 1;

                $next_url = add_query_arg( array(

                    'paged' => $next_page,

                    's'     => $search_query,

                ), home_url() );

                $prev_url = add_query_arg( array(

                    'paged' => $prev_page,

                    's'     => $search_query,

                ), home_url() );

                ?>

                <a class="previous" href="<?php echo esc_url( $prev_url ); ?>" <?php if ($paged == 1) echo 'style="visibility:hidden;"'; ?>><</a>
                
                <a class="next" href="<?php echo esc_url( $next_url ); ?>" <?php if ( $paged >= $total_pages ) echo 'style="visibility:hidden;"'; ?>>></a>

            </div>

            <script>

                document.querySelector('.show_more_search').classList.add('show');

                <?php if ( $paged < $total_pages ) : ?>

                    document.querySelector('.next').classList.add('show');

                <?php endif; ?>

                <?php if ( $paged > 1 ) : ?>

                    document.querySelector('.previous').classList.add('show');

                <?php endif; ?>

            </script>

            <?php

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;

        ?>

    </div>

</main>

<?php

get_footer();

?>

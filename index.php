<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbsw
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="container-1 blogdestacado">
            <?php
            $second_query = new WP_Query( array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'meta_query' => array(
                    array(
                        'key' => 'destacado',
                        'value' => true,
                        'compare' => '=='
                    )
                )
            ));

            if($second_query->have_posts()) {
                while ($second_query->have_posts() ) : $second_query->the_post();
                    $postid = get_the_ID(); ?>
                    <a href="<?php the_permalink(); ?>" class="blog-each">
                        <div class="image-wrap">
                            <img src="<?php the_field("portada"); ?>">
                        </div>
                        <p class="title"><?php echo get_the_title(); ?></p>
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <div class="desc"><?php the_excerpt(); ?></div>
                        <p class="boton">+</p>
                    </a>
                <?php
                endwhile; wp_reset_query();
            }

            ?>
        </div>

        <?php

        $years = [];
        $category = [];

        $second_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 100
        ));

        if($second_query->have_posts()) {
            while ($second_query->have_posts() ) : $second_query->the_post();
                $year = get_the_date('Y');
                array_push($years, $year);

                $cats = get_the_category(); 
                array_push($category, $cats[0]->name);
            endwhile;
        }

        $years = array_unique($years, SORT_REGULAR);
        $category = array_unique($category, SORT_REGULAR);
        $years = array_values($years);
        $category = array_values($category);

        ?>

        <div class="blog-header container-1">
            <h1><?php _e( 'Todas las noticias', 'ws' ); ?></h1>
            <div class="blog-header-filters">
            <select name="category" id="category" onchange="filterPosts()">
                <option <?php if (!isset($_GET['cat'])) { echo "selected"; } ?> value="all">Categoria</option>
                <?php
                for ($i = 0; $i < count($category); $i++) {
                    ?>
                    <option <?php if (isset($_GET['cat'])) { if ($_GET['cat'] == $category[$i]) { echo "selected"; } } ?> value="<?php echo $category[$i]; ?>"><?php echo $category[$i]; ?></option>
                    <?php
                }
                ?>
            </select>
            <select name="years" id="years" onchange="filterPosts()">
                <option <?php if (!isset($_GET['y'])) { echo "selected"; } ?> value="all">Año</option>
                <?php
                for ($i = 0; $i < count($years); $i++) {
                    ?>
                    <option <?php if (isset($_GET['y'])) { if ($_GET['y'] == $years[$i]) { echo "selected"; } } ?> value="<?php echo $years[$i]; ?>"><?php echo $years[$i]; ?></option>
                    <?php
                }
                ?>
            </select>
            </div>
        </div>

		<div class="container-1 blogcontent">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            
            $second_query = null;

            if ((isset($_GET['cat'])) && (isset($_GET['y']))) {
                $second_query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 12,
                    'paged'=> $paged,
                    'taxonomy' => $_GET['cat'],
                    'date_query' => array(
                        array(
                            'year' => $_GET['y']
                        ),
                    ),
                    'meta_query' => array(
                        array(
                            'key' => 'destacado',
                            'value' => true,
                            'compare' => '!='
                        )
                    )
                ));
            } else {
                $second_query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 12,
                    'paged' => $paged,
                    'lang' => 'es',
                    'meta_query' => array(
                        array(
                            'key' => 'destacado',
                            'value' => true,
                            'compare' => '!='
                        )
                    )
                ));
            }

            if($second_query->have_posts()) {
                echo "<div class='blog-flex'>";
                while ($second_query->have_posts() ) : $second_query->the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
                echo "</div>";
            } else {
                get_template_part( 'template-parts/content', 'none' );
            }
            
            echo numeric_posts_nav();

	        ?>
		</div>
	</main>

<?php
get_footer();
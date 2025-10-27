<?php

global $post;

?>


<?php if (is_home() || is_archive()) { 
    $postid = get_the_ID(); ?>
    <a href="<?php echo the_permalink(); ?>" class="blog-each io-slideup">
        <div class="image-wrap">
            <img src="<?php the_field("portada"); ?>">
        </div>
        <p class="title"><?php echo get_the_title(); ?></p>
        <p class="date"><?php echo get_the_date(); ?></p>
        <?php if( !have_rows('content-flex', $postid) ) { $i = 0; ?>
            <div class="desc contDefault"><?php the_excerpt(); ?></div>
        <?php } else { ?>
            <?php while( have_rows('content-flex', $postid) ): the_row(); ?>
                <?php if( get_row_layout() == 'texto' ):
                    $temp = get_sub_field("texto", false, false);
                    $temp = str_replace("<a","",$temp);
                    $temp = str_replace("</a>","",$temp);
                    $temp = str_replace("href=","",$temp);
                    ?>
                    <div class="desc contFlex"><?php echo $temp; ?></div>
                <?php break; endif; ?>   
            <?php endwhile; ?>
        <?php } ?>
        <p class="boton">+</p>
    </a>
<?php } else if (is_single()) { ?>
    <div class="container-5">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
    <div class="blog-post-full-wrap">
        <img src="<?php the_field("portada"); ?>">
        <p class="date">— <?php echo get_the_date(); ?></p>
        <div class="blog-post-full">
            <?php the_content(); ?>

            <?php if( have_rows('content-flex') ): $i = 0; ?>
                <?php while( have_rows('content-flex') ): the_row(); ?>
                    <?php if( get_row_layout() == 'texto' ): ?>
                        <div class="texto"><?php the_sub_field("texto", false, false); ?></div>
                    <?php elseif( get_row_layout() == 'subtitulo_h2' ): ?>
                        <h2 class="subtitulo_h2"><?php the_sub_field("texto", false, false); ?></h2>
                    <?php elseif( get_row_layout() == 'subtitulo_h3' ): ?>
                        <h3 class="subtitulo_h3"><?php the_sub_field("texto", false, false); ?></h3>
                    <?php elseif( get_row_layout() == 'texto_imagen' ): ?>
                        <div class="texto_imagen">
                            <img src="<?php the_sub_field("imagen"); ?>">
                            <p class="texto"><?php the_sub_field("texto", false, false); ?></p>
                        </div>
                    <?php elseif( get_row_layout() == 'quote' ): ?>
                        <p class="quote"><?php the_sub_field("texto", false, false); ?></p>
                    <?php endif; ?>   
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!--
         <div class="blog-post-info">
            <img src="https://i.pinimg.com/736x/86/63/78/866378ef5afbe8121b2bcd57aa4fb061.jpg">
            <div>
                <p class="author-nombre"><?php echo get_the_author(); ?></p>
                <p class="author-cargo"></p>
            </div>
         </div>

        -->
         
    </div>  
<?php } ?>
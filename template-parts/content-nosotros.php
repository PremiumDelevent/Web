<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wbsw
 */

if(have_rows('disposicion')) {
    while( have_rows('disposicion')) : the_row();
    $popmake = get_sub_field("popmake");
    endwhile;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    if(have_rows('introduccion')) {
        while( have_rows('introduccion')) : the_row();
        ?>   
        <section class="introduccion" style="background-image: url(<?php the_sub_field("imagen"); ?>);">
            <div class="container-2">
                <h1><?php the_sub_field("titulo"); ?></h1>
                <p><?php the_sub_field("descripcion"); ?></p>
                <a href="#proveedor">
                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">
                </a>
            </div>
        </section>
        <?php
        endwhile;
    }
    ?>

    <section class="proveedor" id="proveedor">
        <div class="container-1">
            <?php
            if(have_rows('proveedor')) {
                while( have_rows('proveedor')) : the_row();
                ?>
                <div class="proveedor-intro">
                    <div>
                        <h2><?php the_sub_field("titulo"); ?></h2>
                        <a class="button-generic d-desktop <?php echo $popmake; ?>"><?php the_sub_field("boton"); ?></a>
                    </div>
                    <div class="faq-wrap">
                         <?php
                        if(have_rows('faq')) {
                            $i = 0;
                            while( have_rows('faq')) : the_row();
                            ?>
                            <div class="faq-each">
                                <div class="faq-button <?php if ($i == 0) { echo "faq-active"; } ?>">
                                    <p class="title"><?php the_sub_field("titulo"); ?></p>
                                </div>
                                <div class="faq-each-content" <?php if ($i == 0) { echo "style='display: block;'"; } ?>>
                                    <p class="desc"><?php the_sub_field("descripcion"); ?></p>
                                </div>                            
                            </div>
                            <?php
                            $i++;
                            endwhile;
                        }
                        ?>
                    </div>
                    <a class="button-generic d-mobil <?php echo $popmake; ?>" ><?php the_sub_field("boton"); ?></a>
                </div>
                <div class="proveedor-numbers">
                    <?php
                    if(have_rows('numeros')) {
                        while( have_rows('numeros')) : the_row();
                        ?>
                        <div>
                            <p class="number count"><?php the_sub_field("cifra"); ?></p>
                            <p class="desc"><?php the_sub_field("texto"); ?></p>
                        </div>
                        <?php
                        endwhile;
                    }
                    ?>
                </div>
                <?php
                endwhile;
            }
            ?>
        </div>
    </section>

    <script>

    $(document).ready(function() {
        var anterior = null;
        $('.faq-wrap .faq-button').click(function(){
            if (anterior == this) {
                anterior = null;
            } else {
                $('.faq-wrap .faq-button').removeClass('faq-active')
                $('.faq-wrap .faq-button').next('.faq-each-content').slideUp(400);
            }
            
            $(this).toggleClass('faq-active');
            $(this).next('.faq-each-content').slideToggle(400);
            
            anterior = this;
        });
    });

   // Number Increment
    Number.prototype.format = function(n) {
        var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
        return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
    };

    // Opacity Transition
    document.addEventListener("DOMContentLoaded", function(event) { 
        const targets = document.querySelectorAll('.count');
            const lazyLoad = target => {
            const io = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const item = entry.target;
                        if (item.classList.contains("done")) {

                        } else {
                            $(item).prop('counter', 0).animate({
                                counter: $(item).text()
                            }, {
                                duration: 4000,
                                easing: 'easeOutExpo',
                                step: function (step) {
                                    $(item).text('+' + step.format());
                                }
                            });
                            item.classList.add("done")
                        }
                    }
                });
            });
            io.observe(target);
        };
        targets.forEach(lazyLoad);
    });

    </script>

    <section class="disposicion">
        <div class="container-1">
            <?php
            if(have_rows('disposicion')) {
                while( have_rows('disposicion')) : the_row();
                ?>
                <h2><?php the_sub_field("titulo"); ?></h2>
                <img src="<?php the_sub_field("imagen_principal"); ?>" class="princ-image">
                <div class="disposicion-wrap">
                    <img src="<?php the_sub_field("imagen_secundaria"); ?>" class="sec-image">
                    <div>
                        <?php
                        if(have_rows('valores')) {
                            while( have_rows('valores')) : the_row();
                            ?>
                            <div>
                                <p class="title"><?php the_sub_field("titulo"); ?></p>
                                <p class="desc"><?php the_sub_field("descripcion"); ?></p>
                            </div>
                            <?php
                            endwhile;
                        }
                        ?>
                        <a class="button-generic <?php echo $popmake; ?>"><?php the_sub_field("boton"); ?></a>
                    </div>
                </div>
                <?php
                endwhile;
            }
            ?>
        </div>
    </section>
</article>
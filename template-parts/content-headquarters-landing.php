<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package wbsw

 */



$current_lang = apply_filters( 'wpml_object_id', 14, 'post' );



?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-template-hacemos-page">

        <?php if(have_rows('introduccion')) {

            while( have_rows('introduccion')) : the_row();

            ?>   

            <section class="introduccion" style="background-image: url(<?php the_sub_field("imagen"); ?>);">

                <div class="container-1">

                    <h1><?php the_title(); ?></h1>

                    <p><?php the_sub_field("descripcion"); ?></p>

                    <a href="#headquarter">

                        <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

                    </a>

                </div>

            </section>

            <?php

            endwhile;

        } ?>

        <?php if(have_rows('headquarter')) {

            while( have_rows('headquarter')) : the_row(); ?>   

                <section class="headquarter" id="headquarter">

                    <div class="container-1">

                        <h2><?php the_sub_field("titulo1"); ?></h2>

                        <p><?php the_sub_field("descripcion1"); ?></p>

                        <h2><?php the_sub_field("titulo2"); ?></h2>

                        <p><?php the_sub_field("descripcion2"); ?></p>

                       <div class="cards">

                            <div class="counter-item">

                                <div class="count" data-target="10000">0</div>

                                <p><?php _e('Served furniture: ', 'ws'); ?></p>

                            </div>

                            <div class="counter-item">

                                <div class="count" data-target="3000">0</div>

                                <p><?php _e('Events held: ', 'ws'); ?></p>

                            </div>

                        </div>

                        <script>

                            document.addEventListener("DOMContentLoaded", () => {

                            const counters = document.querySelectorAll(".count");

                            const animateCounter = (counter) => {

                                const target = +counter.getAttribute("data-target");

                                const duration = 2000;

                                const increment = target / (duration / 16);

                                let current = 0;

                                const updateCounter = () => {

                                current += increment;

                                if (current < target) {

                                    counter.textContent = "+" + Math.floor(current).toLocaleString();

                                    requestAnimationFrame(updateCounter);

                                } else {

                                    counter.textContent = "+" + target.toLocaleString();

                                }

                                };

                                updateCounter();

                            };

                            const observer = new IntersectionObserver(

                                (entries) => {

                                entries.forEach(entry => {

                                    if (entry.isIntersecting) {

                                    animateCounter(entry.target);

                                    observer.unobserve(entry.target);

                                    }

                                });

                                },

                                { threshold: 0.5 }

                            );

                            counters.forEach(counter => observer.observe(counter));

                            });

                        </script>

                    </div>

                </section>

            <?php

            endwhile;

        } ?>
    
    </div>

</article>
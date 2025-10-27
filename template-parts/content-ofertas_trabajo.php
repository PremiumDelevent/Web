<section class="container-oferta">

    <div class="container-1">

        <h1> <?php echo get_the_title(); ?> </h1>

        <div class="container-button">

            <a class="button-generic d-desktop" href = "#formulario" style = " width: 40%; color: white; "> <?php _e("Apply", "ws") ?> </a>

            <a class="button-generic d-mobil" href = "#formulario" style = " width: 100%; color: white; " > <?php _e("Apply", "ws") ?> </a>

        </div>

        <div class="resumen">

            <h2> <?php _e("Overview", "ws") ?> </h2>

            <p> <?php echo the_field('descripcion_empresa'); ?> </p>

        </div>

        <div class="descripcion">

            <h2> <?php _e("Description", "ws") ?> </h2>

            <p> <?php echo the_field('descripcion_empleo'); ?> </p>

        </div>

        <?php

        if(have_rows('responsabilidades')) { ?>
            
            <div class="responsabilidades">

                <h2> <?php _e("Responsibilities", "ws") ?> </h2>

                <?php

                while( have_rows('responsabilidades')) : the_row(); ?>

                    <li> <?php echo the_sub_field('texto') ?> </li>

                <?php

                endwhile;
            
            ?>

            </div>

            <?php

        } ?>

        <?php

        if(have_rows('que_ofrecemos')) { ?>
            
            <div class="que-ofrecemos">

                <h2> <?php _e("What do we offer?", "ws") ?> </h2>

                <?php

                while( have_rows('que_ofrecemos')) : the_row(); ?>

                    <li> <?php echo the_sub_field('texto') ?> </li>

                <?php

                endwhile;

                ?>

            </div>

            <?php

        } ?>

        

        <?php

        if(have_rows('requisitos')) { ?>
            
            <div class="requisitos">

                <h2> <?php _e("Requirements", "ws") ?> </h2>

                <?php

                while( have_rows('requisitos')) : the_row(); ?>

                    <li> <?php echo the_sub_field('texto') ?> </li>

                <?php

                endwhile;

                ?>

            </div>

            <?php

        } ?>

        <section class = "formulario" id = "formulario">

            <h1> <?php _e("Personal information", "ws") ?> </h1>

            <?php echo do_shortcode(__("[contact-form-7 id='4516a46' title='Formulario Trabaja con Nosotros - EN']", "ws")); ?>

        </section>

        <script>

            $button_send = document.querySelector('.wpcf7-form-control.wpcf7-submit');

            $button_send.onclick = function (){

                $button_send.value = <?php echo json_encode(__("Sending...", "ws")); ?>;

            }

            document.addEventListener('wpcf7invalid', function (event) {

                const submitButton = event.target.querySelector('[type="submit"]');
                
                if (submitButton) {

                    submitButton.value = <?php echo json_encode(_e("Send", "ws")); ?>;

                }

            }, false);
            
            document.querySelector('.wpcf7-form-control-wrap.zl-form-control-wrap.your-multifile').style = "display: none;";

        </script>

    </div>

</section>
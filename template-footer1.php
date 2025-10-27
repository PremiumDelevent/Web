<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wbsw
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
					<div class="max-content">
		<div class="menus-footer-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 pl-0 pr-0">
        <div class="logo-footer-content  col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 pr-0 pl-0"><?php the_custom_logo(); ?>
        <div class="descripcion-footer">
          <?php $idHome = $pageID = get_option('page_on_front');
      //echo $idHome; 
      if( have_rows('bloque_footer', $idHome) ): ?>
        <?php while( have_rows('bloque_footer', $idHome) ): the_row(); 
          $descripcion = get_sub_field('descripcion_footer'); ?>
            <?php if($descripcion){  echo $descripcion;  }  ?>
          
        <?php endwhile; ?>
      <?php endif; ?>
        </div>


      </div>
  
        <div class="menus-footer-content col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-12 pr-0 pl-0">
          <div class="menu-footer menu-footer-1  col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 pr-0 pl-0">
             <?php
              wp_nav_menu( array( 
                  'theme_location' => 'menu-footer-1', 
                  'container_class' => 'menu-footer-1' ) ); 
              ?>
          </div>
          <div class="menu-footer menu-footer-2  col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 pr-0 pl-0">
             <?php
              wp_nav_menu( array( 
                  'theme_location' => 'menu-footer-2', 
                  'container_class' => 'menu-footer-2' ) ); 
              ?>
          </div>
          <div class="menu-footer menu-footer-2  col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 pr-0 pl-0">
             <?php
              wp_nav_menu( array( 
                  'theme_location' => 'menu-footer-3', 
                  'container_class' => 'menu-footer-3' ) ); 
              ?>
          </div>
     <div class="redes-footer-content  col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 col-6 pr-0 pl-0">
        <div class="container-redes">
          <?php if( have_rows('bloque_redes_footer', $idHome) ): ?>
        <?php while( have_rows('bloque_redes_footer', $idHome) ): the_row(); 
          $titulo = get_sub_field('titulo'); ?>

            <?php if($titulo){  echo '<h3 class="titulo-redes d-none d-sm-none d-md-block d-lg-block d-xl-block">'.$titulo.'</h3>';  }  ?>
               <?php if( have_rows('redes', $idHome) ): ?>
        <?php while( have_rows('redes', $idHome) ): the_row(); 
          $icono = get_sub_field('icono'); $enlace = get_sub_field('enlace'); ?>
          <?php if($enlace) { ?>
                                  <a class="enlace-red" href="<?php echo $enlace; ?>"><img class="icono-footer" src="<?php echo $icono['url']; ?>" alt="<?php echo $icono['alt']; ?>" /></a>
                              <?php } ?>
           <?php endwhile; ?>
      <?php endif; ?>
          
        <?php endwhile; ?>
      <?php endif; ?>
        </div>


      </div>

        </div>
        <div class="copyright-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 pr-0 pl-0">
          <p>© <?php echo date("Y"); ?> Texto copy</p>
          <div class="menu-footer-politicas col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 pr-0 pl-0">
             <?php
              wp_nav_menu( array( 
                  'theme_location' => 'menu-footer-4', 
                  'container_class' => 'menu-footer-4' ) ); 
              ?>
          </div>

        </div>
      </div>
	</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

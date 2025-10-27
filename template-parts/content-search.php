<?php

/**

 * Template part for displaying results in search pages

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package wbsw

 */



global $product; 



if(isset($product)) {



?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php



	$ogid = apply_filters( 'wpml_object_id', $product->id, 'product', false, 'es' );

	$ogproduct = wc_get_product( $ogid );



	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->id ), 'single-post-thumbnail' );

	$color = $ogproduct->get_attribute( 'color' );

	$color = explode(" | ", $color);

	$familia = $ogproduct->get_attribute( 'familia' );

	$familia = explode(" | ", $familia);

	$material = $ogproduct->get_attribute( 'material' );

	$material = explode(" | ", $material);

	$tamano = $ogproduct->get_attribute( 'tamano' );

	$tamano = explode(" | ", $tamano);

	$tipo = $ogproduct->get_attribute( 'tipo' );

	$tipo = explode(" | ", $tipo);

	$video = $ogproduct->get_attribute( 'video' );

	$video = explode(" | ", $video);

	$product_type = $ogproduct->get_type();

	$modelo3D = $ogproduct->get_attribute('modelo_3d');

	$img_en_evento = $ogproduct->get_gallery_image_ids();

	$img_en_evento = !empty($img_en_evento) ? wp_get_attachment_url($img_en_evento[0]) : '';

	?>

	<div tamano="<?php for($i = 0; $i < count($tamano); $i++) { echo $tamano[$i].","; } ?>" 

	     variations="<?php if ( $ogproduct->is_type( "variable" ) ) { 
			echo "<p>"; 
				_e( 'Variaciones', 'ws' ); 
			echo "</p>"; 
			echo "<div class='variations-wrap'>"; 
				$temp42 = []; 
				foreach ( $ogproduct->get_children( false ) as $child_id ) { 
					$variation = wc_get_product( $child_id );  
					if ( ! $variation || ! $variation->exists() ) { continue; } 
					$image_id = $variation->get_image_id(); 
					$image_array = wp_get_attachment_image_src($image_id, 'full'); 
					$image_src = $image_array[0]; 
					$modelo3D = get_post_meta( $variation->get_id(), 'rudr_text', true );
					if (in_array($variation->get_attribute( 'color' ), $temp42)) { 
						echo "<div class='display-none' 
						sku='".$variation->get_sku().
						"' children='has' tamano='".$variation->get_attribute( 'tamano' ).
						"' color='".$variation->get_attribute( 'color' ).
						"' material='".$variation->get_attribute( 'material' ).
						"' modelo3D='".$variation->get_attribute( 'rudr_text' ).
						"' image='".$image_src."' 
						onclick='updateProductPopupImage(this, false, event)'>"; 
					} 
					else { 
						echo "<div sku='".$variation->get_sku().
						"' tamano='".$variation->get_attribute( 'tamano' ).
						"' color='".$variation->get_attribute( 'color' ).
						"' material='".$variation->get_attribute( 'material' ).
						"' modelo3D='".$modelo3D.
						"' image='".$image_src."' 
						onclick='updateProductPopupImage(this, false, event)'>"; 
						array_push($temp42, $variation->get_attribute( 'color' )); 
					} 
					
					echo "<p class='variation-color'>
						<span class='".$variation->get_attribute( 'color' )."'>&nbsp;</span>".
						$variation->get_attribute( 'color' ).
					"</p>"; 
			echo "</div>"; } 
			echo "</div>"; } ?>" 
		 
		 variaciones_temp = "<?php 

				if ($ogproduct->is_type('variable')) { 

					$temp57 = []; // Inicializamos el array para almacenar los colores existentes

					// Recorremos las variaciones para obtener los colores en el orden en que aparecen
					foreach ($ogproduct->get_children(false) as $child_id) {
						$variation = wc_get_product($child_id);
						if (!$variation || !$variation->exists()) { continue; }

						$color_variation= $variation->get_attribute('color');

						if (!empty($color_variation) && !in_array($color_variation, $temp57)) {
							$temp57[] = $color_variation;
						}

					}

					// Ahora $temp57 contiene los colores en el mismo orden que las variaciones del producto
					if (!empty($temp57)) { ?>
						<div class='contenedor-dimensiones'>
							<p> <strong> Color: </strong></p>
							<div class='filter-each'>
								<select name='color_sel' id='color_sel' class='color_sel' onchange='updateProductVariations(this)'>
								<?php
								// Recorremos las variaciones y mostramos las opciones de color
								$i = 0;
								foreach ($ogproduct->get_children(false) as $child_id) {
									$variation = wc_get_product($child_id);
									if (!$variation || !$variation->exists()) { continue; }

									$tamano = $variation->get_attribute('tamano');
									$color_variation= $variation->get_attribute('color');
									$sku = $variation->get_sku();
									$modelo3D = get_post_meta($variation->get_id(), 'rudr_text', true);
									$image_id = $variation->get_image_id();
									$image_array = wp_get_attachment_image_src($image_id, 'full');
									$image_src = $image_array[0];
									$imagen_irl_variation = $ogproduct->get_gallery_image_ids();
									$imagen_irl_variation = !empty($imagen_irl_variation) ? wp_get_attachment_url($imagen_irl_variation[$i]) : '';
									
									// Mostrar la opción de color con el orden correcto
									echo "<option value='".$color_variation.
										"' tamano='".$tamano.
										"' sku='".$sku.
										"' modelo3D='".$modelo3D.
										"' image='".$image_src.
										"' imagen_irl_variation='".$imagen_irl_variation."'>";
									echo $color_variation;
									echo "</option>";
									$i++;
								}
								?>
								</select>
							</div>
						</div>
					<?php } else { // Si no hay variaciones de color, mostramos el selector de tamaño ?>
							<div class='contenedor-dimensiones'>
								<p> <strong> <?php _e('Dimensions: ', 'ws'); ?> </strong> </p>
								<div class='filter-each'>
									<select name='dim_sel' id='dim_sel' class='dim_sel' onchange='updateProductVariations(this)'>
										<?php
										$i = 0;
										foreach ($ogproduct->get_children(false) as $child_id) {
											$variation = wc_get_product($child_id);
											if (!$variation || !$variation->exists()) { continue; }

											$tamano = $variation->get_attribute('tamano');
											
											$sku = $variation->get_sku();
											
											$modelo3D = get_post_meta($variation->get_id(), 'rudr_text', true);
											$image_id = $variation->get_image_id();
											$image_array = wp_get_attachment_image_src($image_id, 'full');
											$image_src = $image_array[0];
											$imagen_irl_variation = $ogproduct->get_gallery_image_ids();
											$imagen_irl_variation = !empty($imagen_irl_variation) ? wp_get_attachment_url($imagen_irl_variation[$i]) : '';
											$i++;

											echo "<option value='".$tamano.
													"' tamano='".$tamano.
													"' sku='".$sku.
													"' modelo3D='".$modelo3D.
													"' image='".$image_src.
													"' imagen_irl_variation='".$imagen_irl_variation."'>";
												echo $tamano;
												echo "</option>";
										}
										?>
									</select>
								</div>
							</div>
						<?php } // Fin de la condición principal
				} ?>";
		 onclick="productPopup(this)" 
		 color="<?php for($i = 0; $i < count($color); $i++) { echo $color[$i].","; } ?>" 
		 gallery="<?php $attachment_ids = $product->get_gallery_image_ids(); foreach( $attachment_ids as $attachment_id )  { echo wp_get_attachment_url( $attachment_id )."," ; }?>" 
		 ref="<?php if($ogproduct->get_sku() !== "" && $ogproduct->get_sku() !== null) { echo $ogproduct->get_sku(); } ?>" 
		 nombre="<?php the_title(); ?>" 
		 desc="<?php echo $product->post->post_excerpt; ?>" 
		 imagen="<?php echo $image[0]; ?>" 
		 tipo="<?php for($i = 0; $i < count($tipo); $i++) { echo $tipo[$i].","; } ?>" 
		 material="<?php for($i = 0; $i < count($material); $i++) { echo $material[$i].","; } ?>" 
		 familia="<?php for($i = 0; $i < count($familia); $i++) { echo $familia[$i].","; } ?>"
		 video = "<?php for($i = 0; $i < count($video); $i++) { echo $video[$i].","; } ?>"
		 product_type = "<?php echo $product_type ?>"
		 modelo3D = "<?php echo $modelo3D?>"
		 img_en_evento = "<?php echo $img_en_evento; ?>"
	>

		<?php

		if ( $ogproduct->is_type( 'variable' ) ) {

			if ($image[0] == null || $image[0] == "") {

				$image[0] = "";

			}

			?>

			<img class="image" onerror="this.onerror=null; this.src='https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png'" src="<?php echo $image[0]; ?>">

			<?php

		} else {

			?>

			<img class="image" onerror="this.onerror=null; this.src='https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png'" src="<?php echo $image[0]; ?>">

			<?php

		}

		?>

	    <p class="nombre"><?php the_title(); ?></p>

	    <?php

	    $size = get_the_excerpt( $product->get_id() );

	    if ($size == "" || $size == null) {

	    	if (isset($tamano[0])) {

	    		$size = $tamano[0];

	    	}

	    }

		?>



	    <p class="sizes d-mobil"><?php echo $size; ?></p>

	    <div class="product-hover">

	    	<p class="nombre"><?php the_title(); ?></p>

			<p class="sizes"><?php echo $size; ?></p>

	    </div>

	</div>



</article>



<?php

}

?>
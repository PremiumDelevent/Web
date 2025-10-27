<?php

get_header();

$category = get_queried_object();

function Unaccent($string) {

	return preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'));

}

?>

<style>
				
	.tax-product_cat.term-oncengo .productos > div > a:hover,

	.tax-product_cat.term-oncengo .soluciones .repeater > a:hover,

	.tax-product_cat.term-oncengo .ejemplos > div > a:hover,

	.tax-product_cat.term-oncengo .soluciones .text > a:hover { background-color: #da6b23 !important; }


	.boton_galeria_container { margin: 0 auto; width: 150px; height: 45px; display: flex; justify-content: center; align-items: center; }

	.boton_galeria { width: 100%; height: 100%; background-color: rgba(57,146,183,255); border: none; color: white; cursor: pointer; text-align: center; }


	.tax-product_cat.term-eventure-en .productos .productos-grid .product-hover {background-color: rgba(210,58,48,0.9);}

	.tax-product_cat.term-eventure-2 .productos .productos-grid .product-hover {background-color: rgba(210,58,48,0.9);}

	.tax-product_cat.term-probaeventuretiming .productos .productos-grid .product-hover {background-color: rgba(210,58,48,0.9);}

	.tax-product_cat.term-ecosphere-ca .productos .productos-grid .product-hover {background-color: rgba(78,167,102,0.9);}

	.tax-product_cat.term-oncengo .productos .productos-grid .product-hover {background-color: rgba(239,128,55,0.9);}

	.tax-product_cat .productos .productos-grid {display: grid; grid-auto-rows: auto; grid-template-columns: repeat(auto-fill, minmax(260px, 1fr)); gap: 20px; margin-top: 40px; }

	.tax-product_cat .productos .container-1 { max-width: 1400px; }

	.productos_destacados { padding: 80px 0 0 0; background-color: #f2f4f5; margin-bottom: 20px; }

	.productos_destacados .productos-wrap0 { display: flex; flex-direction: column-reverse; gap: 30px;  overflow: hidden; text-align: center}

	.container-filtros { max-width: 1440px; width: 100%; margin-right: auto; margin-left: auto; position: relative; padding: 0 20px; padding: 80px 0 0 0;}

	.container-filtros .productos-wrap1 { display: flex; flex-direction: column-reverse; gap: 30px;  overflow: hidden; text-align: center }

	.container-filtros .productos-wrap1 .productos-filter h2{ font-weight: bold; font-size: 30px; max-width: 300px; }
	
	.productos_destacados .productos-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }

	.productos_destacados .productos-grid .producto_destacado:hover {cursor: pointer;}

	.productos_destacados .productos-grid .producto_destacado .imagen{transition: all 0.25s ease-in-out;}

	.productos_destacados .productos-grid .producto_destacado:hover .imagen{transform: scale(1.05); transition: all 0.25s ease-in-out;}

	.productos_destacados .productos-grid .imagen img { width: 100%; height: 450px; object-fit: cover; }

	.productos_destacados .productos-grid .estrella { padding-right: clamp(150px, 20vw, 400px); }

	.title_best_sellers { font-size: 36px; line-height: 1; font-weight: bold; color: black; margin-bottom: 50px !important; max-width: 500px; }

	

	@media ( max-width: 1450px ){

		.productos_destacados .productos-grid .imagen img { width: 100%; height: auto; max-height: none; object-fit: contain; }

	}

	@media (max-width: 650px) {

		.productos_destacados .productos-grid { grid-template-columns: 1fr; }

		.productos_destacados .productos-grid .estrella { padding-right: 400px; }

	}

	@media (max-width: 485px) {

		.productos_destacados .productos-grid .estrella { padding-right: 350px; }

	}

	@media (max-width: 430px) {

		.productos_destacados .productos-grid .estrella { padding-right: 300px; }

	}

	@media (max-width: 380px) {

		.productos_destacados .productos-grid .estrella { padding-right: 250px; }

	}

	@media (max-width: 320px) {

		.productos_destacados .productos-grid .estrella { padding-right: 200px; }

	}

	@media (max-width: 280px) {

		.productos_destacados .productos-grid .estrella { padding-right: 150px; }

	}

</style>


<div id="primary" class="content-area" style="--themecolor: <?php the_field('color', $category); ?>;">

	<main id="main" class="site-main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php

			if(have_rows('introduccion', $category)) {

				while( have_rows('introduccion', $category)) : the_row();

				?>

				<section class="introduccion" style="background-image:url(<?php the_sub_field('imagen_fondo'); ?>);">

					<div class="container-1">

						<img class="logos" src="<?php the_sub_field('icono'); ?>">

						<img class="logos" src="<?php the_sub_field('logo'); ?>">

						<p><?php the_sub_field('titulo_principal'); ?></p>
						
						<a href="#soluciones" class="arrow"><img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg"></a>

					</div>

				</section>

				<?php

				endwhile;

			}


			if(have_rows('soluciones', $category)) {

				while( have_rows('soluciones', $category)) : the_row();

				?>

				<section class="soluciones" id="soluciones">

					<div class="container-1">

						<div class="text">

							<div>

								<h1 style="--themecolor: <?php the_field('color', $category); ?>;"><?php the_sub_field('titulo_secundario', false, false); ?></h1>

								<p class="desc"><?php the_sub_field('descripcion'); ?></p>

							</div>

							<?php

							if(have_rows('boton')) {

								while( have_rows('boton')) : the_row();

								?>

									<a class="button-generic d-desktop <?php _e("popmake-13230", "ws") ?>"><?php the_sub_field('texto'); ?></a>

								<?php

								endwhile;

							}

							?>

						</div>

						<div class="repeater">

							<?php

							if(have_rows('ventajas')) {

								while( have_rows('ventajas')) : the_row(); ?>

									<h2><?php the_sub_field('titulo'); ?></h2>

									<?php

									if(have_rows('repetidor')) {

										while( have_rows('repetidor')) : the_row();

										?>

										<div>

											<img src="<?php the_sub_field('icono'); ?>">

											<p><?php the_sub_field('texto'); ?></p>

										</div>

										<?php

										endwhile;

									}

								endwhile;

							}

							if(have_rows('boton')) {

								while( have_rows('boton')) : the_row();

								?>

									<a class="button-generic d-mobil <?php _e("popmake-13230", "ws") ?>"><?php the_sub_field('texto'); ?></a>

								<?php

								endwhile;

							}

							?>

						</div>

					</div>

					<script>

						function videoslider(links){

							document.querySelector(".video_principal").src = links;

						}

						function show_carousel() {

							document.querySelector(".carousel-container").style.display = "block";
							
							let desktopButton = document.querySelector(".d-desktop.boton_galeria");

							let mobileButton = document.querySelector(".d-mobil.boton_galeria");

							if (desktopButton) {

								desktopButton.onclick = opacity_carousel;

								desktopButton.textContent = '<?php _e("Hide", "ws") ?>';

							}
							
							if (mobileButton) {

								mobileButton.onclick = opacity_carousel;

								mobileButton.textContent = '<?php _e("Hide", "ws") ?>';

							}
							
						}

						function opacity_carousel() {

							document.querySelector(".carousel-container").style.display = "none";
							
							let desktopButton = document.querySelector(".d-desktop.boton_galeria");

							let mobileButton = document.querySelector(".d-mobil.boton_galeria");

							if (desktopButton) {

								desktopButton.onclick = show_carousel;

								desktopButton.textContent = '<?php _e("See", "ws") ?>';

							}
							
							if (mobileButton) {

								mobileButton.onclick = show_carousel;

								mobileButton.textContent = '<?php _e("See", "ws") ?>';

							}
							
						}

					</script>

					<?php

						$count = 0;

						if (have_rows('videos_carousel')) {

							while (have_rows('videos_carousel')) : the_row();

								if (get_sub_field('titulo') != "") { ?>

									<section>

										</br>

										</br>

										</br>

										<h2 class="titulo_carousel"><?php the_sub_field('titulo'); ?></h2>
										
										<div class="boton_galeria_container" style = "margin: 0 auto; margin-bottom: 30px;">

											<a class="button-generic brown d-desktop boton_galeria" onclick="show_carousel()" style = "background-color: rgba(57,146,183,255); margin: 0 auto;"><?php _e("See", "ws") ?></a>
											
											<a class="button-generic d-mobil boton_galeria" onclick="show_carousel()" style = "background-color: rgba(57,146,183,255); margin: 0 auto;"><?php _e("See", "ws") ?></a>
										
										</div>
								
										<div class="carousel-container" style="display: none;">
											
											<iframe allowfullscreen src="<?php the_sub_field('video_principal'); ?>" class="video_principal"></iframe>

											<?php

											if ($count == 0) {

												?>

												<ul>

												<?php

												$count++;

											}

											if (have_rows('video')) { ?>

												<?php

												while (have_rows('video')) : the_row();
												
													?>

													<li onclick="videoslider('<?php the_sub_field('url_video'); ?>')"><img src="<?php the_sub_field('portada_video'); ?>" class="video_waiting"></li>
												
												<?php

												endwhile; ?>

												</ul>

											<?php

											} ?>
											
										</div>

										</section>
									
								<?php

								}

							endwhile;

						}

						?>

				</section>

				<?php

				endwhile;

			}

			/*

				PRODUCTOS DESTACADOS
				¿Como Cambiar productos? En el panel de Wordpress ir a Productos > Categorias > Productos Destacados
				Nota: Solo cambiar los productos en español 
			
			*/ 

			$category_id_espanol = apply_filters('wpml_object_id', $category->term_id, 'product_cat', false, 'es');

			if ($category_id_espanol) {

				if ( have_rows('productos_destacados1', 'product_cat_' . $category_id_espanol) ) {

					while ( have_rows('productos_destacados1', 'product_cat_' . $category_id_espanol) ) : the_row();

						$productos_dest = get_sub_field('productos_dest');

						if ($productos_dest) { ?>

							<div class="productos_destacados">

								<div class="container-1">

								<div class="title_best_sellers" >

									<?php _e("Featured products", "ws"); ?>

								</div>

									<div class="productos-wrap0">

										<div class="productos-grid">
											
											<?php
											
											$star_icon = get_sub_field('icono');
											
											
												foreach ($productos_dest as $producto) {

													$titulo_producto = get_the_title($producto->ID);

													$imagen_id = get_post_thumbnail_id($producto->ID);

													$imagen_url = wp_get_attachment_image_url($imagen_id, 'full');

													$producto_destino = wc_get_product($producto->ID);

													$tamano = $producto_destino->get_attribute('tamano');

													$color = $producto_destino->get_attribute('color');

													$material = $producto_destino->get_attribute('material');

													$tipo = $producto_destino->get_attribute('tipo');

													$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->id ), 'single-post-thumbnail' );

													$ref = $producto_destino->get_sku();

													$video = $producto_destino->get_attribute('video');

													$video_media = $producto_destino->get_attribute('video_media');
													
													$product_type = $producto_destino->get_type();

													$modelo3D = $producto_destino->get_attribute('modelo_3d');

													$img_en_evento = $producto_destino->get_gallery_image_ids();

													$category_slug = $category->slug;

													$tamano = explode(" | ", $tamano);

													$color = explode(" | ", $color);

													$material = explode(" | ", $material);

													$tipo = explode(" | ", $tipo);

													$video = explode(" | ", $video);

													$video_media = explode(" | ", $video_media);

													$img_en_evento = !empty($img_en_evento) ? wp_get_attachment_url($img_en_evento[0]) : '';
													
													?>

													<div class="producto_destacado"

															onclick = "productPopup(this)" 
													
															tamano = "<?php echo implode(", ", $tamano); ?>"

															tipo="<?php for($i = 0; $i < count($tipo); $i++) { $temp53 = str_replace(" ","-",$tipo[$i]); $temp53 = Unaccent($temp53); echo $temp53.","; } ?>"

															color="<?php for($i = 0; $i < count($color); $i++) { $temp54 = str_replace(" ","-",$color[$i]); $temp54 = Unaccent($temp54); echo $temp54.","; } ?>" 

															material="<?php for($i = 0; $i < count($material); $i++) { $temp55 = str_replace(" ","-",$material[$i]); $temp55 = Unaccent($temp55); echo $temp55.","; } ?>"

															gallery = ""

															imagen = "<?php echo $imagen_url ?>"

															ref = "<?php echo $ref; ?>"

															nombre = "<? echo $titulo_producto ?>"

															variaciones_temp = "<?php 

															if ($producto_destino->is_type('variable')) { 

																$temp56 = []; // Inicializamos el array para almacenar los colores existentes

																// Recorremos las variaciones del producto

																foreach ($producto_destino->get_children(false) as $child_id) {

																	$variation = wc_get_product($child_id);

																	if (!$variation || !$variation->exists()) { continue; }

																	$color = $variation->get_attribute('color');

																	// Si la variación tiene un color y aún no está en el array, lo añadimos

																	if (!empty($color) && !in_array($color, $temp56)) { $temp56[] = $color; }

																}

																// Si hay colores en las variaciones, priorizamos mostrar el selector de color

																if (!empty($temp56)) { ?>

																	<div class='contenedor-dimensiones'>

																		<p> <strong> Color: </strong></p>

																		<div class='filter-each'>

																			<select name='color_sel' id='color_sel' class='color_sel' onchange='updateProductVariations(this)'>

																			<?php

																				$i = 0;

																				foreach ($producto_destino->get_children(false) as $child_id) {

																					$variation = wc_get_product($child_id);

																					if (!$variation || !$variation->exists()) { continue; }

																					$tamano = $variation->get_attribute('tamano');

																					$sku = $variation->get_sku();

																					$color = $variation->get_attribute('color');

																					$material = $variation->get_attribute('material');

																					$modelo3D = get_post_meta($variation->get_id(), 'rudr_text', true);

																					$image_id = $variation->get_image_id();

																					$image_array = wp_get_attachment_image_src($image_id, 'full');

																					$image_src = $image_array[0];

																					$imagen_irl_variation = $producto_destino->get_gallery_image_ids();

																					$imagen_irl_variation = !empty($imagen_irl_variation) ? wp_get_attachment_url($imagen_irl_variation[$i]) : '';
																					
																					$i++;

																					echo "<option value='".$tamano.

																						"' tamano='".$tamano.

																						"' sku='".$sku.

																						"' color='".$color.

																						"' material='".$material.

																						"' modelo3D='".$modelo3D.

																						"' image='".$image_src.

																						"' imagen_irl_variation='".$imagen_irl_variation."'>";

																					echo $color;

																					echo "</option>";

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

																				foreach ($producto_destino->get_children(false) as $child_id) {

																					$variation = wc_get_product($child_id);

																					if (!$variation || !$variation->exists()) { continue; }

																					$tamano = $variation->get_attribute('tamano');

																					$sku = $variation->get_sku();

																					$color = $variation->get_attribute('color');

																					$material = $variation->get_attribute('material');

																					$modelo3D = get_post_meta($variation->get_id(), 'rudr_text', true);

																					$image_id = $variation->get_image_id();

																					$image_array = wp_get_attachment_image_src($image_id, 'full');

																					$image_src = $image_array[0];

																					$imagen_irl_variation = $producto_destino->get_gallery_image_ids();

																					$imagen_irl_variation = !empty($imagen_irl_variation) ? wp_get_attachment_url($imagen_irl_variation[$i]) : '';
																					
																					$i++;

																					echo "<option value='".$tamano.

																						"' tamano='".$tamano.

																						"' sku='".$sku.

																						"' color='".$color.

																						"' material='".$material.

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

															video = "<?php for($i = 0; $i < count($video); $i++) { echo $video[$i].","; } ?>"

															video_media = "<?php for($i = 0; $i < count($video_media); $i++) { echo $video_media[$i].","; } ?>"

															product_type = "<?php echo $product_type ?>"

															modelo3D = "<?php echo $modelo3D?>"

															category_slug = "<?php echo $category_slug?>"

															img_en_evento = "<?php echo $img_en_evento; ?>"

													>
														
														<div class="estrella">

															<img src="<?php echo esc_url($star_icon); ?>" width="35" height="35">

														</div>

														<?php if ($imagen_url) { ?>

															<div class="imagen">

																<img class="image" src="<?php echo esc_url($imagen_url); ?>" alt="<?php echo esc_attr($titulo_producto); ?>">
															
															</div>

														<?php } else { ?>

															<img class="image" src="https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png" alt="No image available">
														
														<?php } ?>
														
														<br>
														
														<p><b><?php echo esc_html($titulo_producto); ?></b></p>

													</div>

													<?php
													
												}

											?>

										</div>

									</div>

								</div>

								</br>

								</br>

								</br>

								</br>

							</div>

						<?php

						}

					endwhile;

				}

			}

			?>

			<div class="container-filtros">

				<div class="productos-wrap1">
					
				</div>

			</div>
			
			<?php

			if(have_rows('productos', $category)) {

				while( have_rows('productos', $category)) : the_row();

				?>

				<section class="productos">

					<div class="container-1">

						<?php

						$second_query = null;

						if ( defined( 'ICL_LANGUAGE_CODE' ) ) {

							if(ICL_LANGUAGE_CODE == "es"){

								$second_query = new WP_Query( array(

									'post_type' => 'product',

									'posts_per_page' => 1120,

									'orderby' => 'menu_order',

									'tax_query' => array( 

										array(

											'taxonomy' => 'product_cat',

											'field'    => 'slug',

											'terms'    => $category->slug,

											'operator' => 'IN',

										)	 

									)

								));

							}
							
							if(ICL_LANGUAGE_CODE == "en"){

								$second_query = new WP_Query( array(

									'post_type' => 'product',

									'lang' => 'en',

									'posts_per_page' => 1120,

									'orderby' => 'menu_order',

									'tax_query' => array( 

										array(

											'taxonomy' => 'product_cat',

											'field'    => 'slug',

											'terms'    => $category->slug,

											'operator' => 'IN',

										)	 

									)

								));

							}

							if(ICL_LANGUAGE_CODE == "ca"){

								$second_query = new WP_Query( array(

									'post_type' => 'product',

									'lang' => 'ca',

									'posts_per_page' => 1120,

									'orderby' => 'menu_order',

									'tax_query' => array( 

										array(

											'taxonomy' => 'product_cat',

											'field'    => 'slug',

											'terms'    => $category->slug,

											'operator' => 'IN',

										)	 

									)

								));

							}

							if(ICL_LANGUAGE_CODE == "pt"){

								$second_query = new WP_Query( array(

									'post_type' => 'product',

									'lang' => 'pt',

									'posts_per_page' => 1120,

									'orderby' => 'menu_order',

									'tax_query' => array( 

										array(

											'taxonomy' => 'product_cat',

											'field'    => 'slug',

											'terms'    => $category->slug,

											'operator' => 'IN',

										)	 

									)

								));

							}

						}
						
						$attribute_taxonomies = wc_get_attribute_taxonomies(); 

						$taxonomy_terms = array();

						

						if ($attribute_taxonomies) :

							foreach ($attribute_taxonomies as $tax) :

								if (taxonomy_exists(wc_attribute_taxonomy_name($tax->attribute_name))) :

									$taxonomy_terms[$tax->attribute_name] = get_terms(wc_attribute_taxonomy_name($tax->attribute_name), 'orderby=name&hide_empty=0');

								endif;

							endforeach;

						endif;
						
						$show_only = 16;

						$array_rev = array_reverse($second_query->posts);

						$second_query->posts = $array_rev;

						$total_productos = $second_query->post_count;

						$productos_grid_proba = $second_query->posts;
						
						$productos_iniciales = array_slice($productos_grid_proba, 0, $total_productos);
						
						?>

						<div class="productos-wrap" id="productos-wrap">

							<div class="productos-grid" id="productos-grid">

								<?php foreach ($productos_iniciales as $post) : setup_postdata($post); ?>

									<?php

									// Obtiene el ID del producto en español

									$ogid = apply_filters('wpml_object_id', $post->ID, 'product', false, 'es');

									// Obtiene el producto correspondiente

									$ogproduct = wc_get_product($ogid);

									// Ahora puedes obtener cualquier atributo personalizado como el tamaño, color, material, etc.

									$tamano = $ogproduct->get_attribute('tamano'); // Atributo de tamaño

									$color = $ogproduct->get_attribute('color');   // Atributo de color

									$material = $ogproduct->get_attribute('material'); // Atributo de material

									$tipo = $ogproduct->get_attribute('tipo');

									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->id ), 'single-post-thumbnail' );

									$ref = $ogproduct->get_sku();

									$video = $ogproduct->get_attribute( 'video' );

									$video_media = $ogproduct->get_attribute( 'video_media' );

									$product_type = $ogproduct->get_type();

									$modelo3D = $ogproduct->get_attribute('modelo_3d');

									$category_slug = $category->slug;

									$img_en_evento = $ogproduct->get_gallery_image_ids();

									// Divide los valores en caso de que haya más de uno

									$tamano = explode(" | ", $tamano);

									$color = explode(" | ", $color);

									$material = explode(" | ", $material);

									$tipo = explode(" | ", $tipo);

									$video = explode(" | ", $video);

									$video_media = explode(" | ", $video_media);

									$img_en_evento = !empty($img_en_evento) ? wp_get_attachment_url($img_en_evento[0]) : '';

									?>

									<div class = "io-slideup io-slideup-active" 

										 onclick = "productPopup(this)" 

										 tamano = "<?php echo implode(", ", $tamano); ?>"

										 tipo="<?php for($i = 0; $i < count($tipo); $i++) { $temp53 = str_replace(" ","-",$tipo[$i]); $temp53 = Unaccent($temp53); echo $temp53.","; } ?>" 

										 color="<?php for($i = 0; $i < count($color); $i++) { $temp54 = str_replace(" ","-",$color[$i]); $temp54 = Unaccent($temp54); echo $temp54.","; } ?>" 

										 material="<?php for($i = 0; $i < count($material); $i++) { $temp55 = str_replace(" ","-",$material[$i]); $temp55 = Unaccent($temp55); echo $temp55.","; } ?>"

										 gallery = ""

										 imagen = "<?php echo $image[0]; ?>"

										 ref = "<?php echo $ref; ?>"
										 
										 nombre = "<?php echo get_the_title(); ?>"

										 variaciones_temp = "<?php 

															if ($ogproduct->is_type('variable')) { 

																$temp56 = []; // Inicializamos el array para almacenar los colores existentes

																// Recorremos las variaciones del producto

																foreach ($ogproduct->get_children(false) as $child_id) {

																	$variation = wc_get_product($child_id);

																	if (!$variation || !$variation->exists()) { continue; }
																	
																	$color = $variation->get_attribute('color');

																	// Si la variación tiene un color y aún no está en el array, lo añadimos
																	
																	if (!empty($color) && !in_array($color, $temp56)) { $temp56[] = $color; }

																}

																// Si hay colores en las variaciones, priorizamos mostrar el selector de color

																if (!empty($temp56)) { ?>

																	<div class='contenedor-dimensiones'>

																		<p> <strong> Color: </strong></p>

																		<div class='filter-each'>

																			<select name='color_sel' id='color_sel' class='color_sel' onchange='updateProductVariations(this)'>

																			<?php

																				$i = 0;

																				foreach ($ogproduct->get_children(false) as $child_id) {

																					$variation = wc_get_product($child_id);

																					if (!$variation || !$variation->exists()) { continue; }


																					$tamano = $variation->get_attribute('tamano');

																					$sku = $variation->get_sku();

																					$color = $variation->get_attribute('color');

																					$material = $variation->get_attribute('material');

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

																						"' color='".$color.

																						"' material='".$material.

																						"' modelo3D='".$modelo3D.

																						"' image='".$image_src.

																						"' imagen_irl_variation='".$imagen_irl_variation."'>";

																					echo $color;

																					echo "</option>";

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

																					$color = $variation->get_attribute('color');

																					$material = $variation->get_attribute('material');

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

																						"' color='".$color.

																						"' material='".$material.

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

										 video = "<?php for($i = 0; $i < count($video); $i++) { echo $video[$i].","; } ?>"

										 video_media = "<?php for($i = 0; $i < count($video_media); $i++) { echo $video_media[$i].","; } ?>"

										 product_type = "<?php echo $product_type ?>"

										 modelo3D = "<?php echo $modelo3D?>"

										 category_slug = "<?php echo $category_slug?>"

										 img_en_evento = "<?php echo $img_en_evento; ?>"

									>

										<?php 

											$thumbnail = get_the_post_thumbnail($post->ID, 'single-post-thumbnail');

											if (!$thumbnail) {

												$thumbnail = '<img class="image" src="https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png" alt="No image available">';
											
											}

											echo $thumbnail; 

										?>

										<p class = "nombre"> <?php echo get_the_title(); ?> </p>
										
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

								<?php endforeach; wp_reset_postdata(); ?>

							</div>

						</div>
										
							<div class="productos-filter">

								<h2><?php the_sub_field('titulo'); ?></h2>

								<?php
								
								$color = get_field('color', $category);

                                /*

								usort($taxonomy_terms["tipo"], function($a, $b) {

									return get_field('orden', $a) - get_field('orden', $b);

								});

								*/

								if (!empty($taxonomy_terms["tipo"])) {

									echo "<div class='filter-each'>";

									echo "<select name='tipo_sel' id='tipo_sel' onchange='filterProducts()'>";

									echo "<option value='all' selected>"; _e( 'Todos los tipos', 'ws' ); echo "</option>";
									
									for ($i = 0; $i < count($taxonomy_terms["tipo"]); $i++) {

										if (!empty($taxonomy_terms["tipo"][$i]->name) && $taxonomy_terms["tipo"][$i]->name != null && $taxonomy_terms["tipo"][$i]->name != "") {

											$slug = $taxonomy_terms["tipo"][$i]->slug;

											//$slug = str_replace("-en","",$slug);

											echo "<option value='".$slug."'>".$taxonomy_terms["tipo"][$i]->name."</option>";

										}

									}

									echo "</select>";

									echo '<svg style="--themecolor: '.$color.';" version="1.1" class="arrow" id="Capa_1" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 89.7 48.09" style="enable-background:new 0 0 89.7 48.09;" xml:space="preserve"><g transform="translate(0,-952.36218)"><path d="M45,999.33c1.16-0.06,2.27-0.52,3.12-1.31l39-36c2.03-1.88,2.15-5.05,0.27-7.08c-1.88-2.03-5.05-2.15-7.08-0.27c0,0,0,0,0,0l-35.59,32.84L9.12,954.68c-2.03-1.88-5.2-1.76-7.08,0.26c-1.88,2.03-1.76,5.2,0.26,7.08c0,0,0,0,0,0l39,36C42.31,998.94,43.64,999.41,45,999.33L45,999.33z"/></g></svg>';

									echo "</div>";

								}

								if (!empty($taxonomy_terms["color"])) {

									echo "<div class='filter-each'>";

									echo "<select name='color_sel' id='color_sel' onchange='filterProducts()'>";

									echo "<option value='all' selected>"; _e( 'Todos los colores', 'ws' ); echo "</option>";

									for ($i = 0; $i < count($taxonomy_terms["color"]); $i++) {

										if (!empty($taxonomy_terms["color"][$i]->name) && $taxonomy_terms["color"][$i]->name != null && $taxonomy_terms["color"][$i]->name != "") {

											$slug = $taxonomy_terms["color"][$i]->slug;

											$slug = str_replace("-en","",$slug);

											echo "<option value='".$slug."'>".$taxonomy_terms["color"][$i]->name."</option>";

										}

									}

									echo "</select>";

									echo '<svg style="--themecolor: '.$color.';" version="1.1" class="arrow" id="Capa_1" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 89.7 48.09" style="enable-background:new 0 0 89.7 48.09;" xml:space="preserve"><g transform="translate(0,-952.36218)"><path d="M45,999.33c1.16-0.06,2.27-0.52,3.12-1.31l39-36c2.03-1.88,2.15-5.05,0.27-7.08c-1.88-2.03-5.05-2.15-7.08-0.27c0,0,0,0,0,0l-35.59,32.84L9.12,954.68c-2.03-1.88-5.2-1.76-7.08,0.26c-1.88,2.03-1.76,5.2,0.26,7.08c0,0,0,0,0,0l39,36C42.31,998.94,43.64,999.41,45,999.33L45,999.33z"/></g></svg>';

									echo "</div>";

								}

								if (!empty($taxonomy_terms["material"])) {

									echo "<div class='filter-each'>";

									echo "<select name='material_sel' id='material_sel' onchange='filterProducts()'>";

									echo "<option value='all' selected>"; _e( 'Todos los materiales', 'ws' ); echo "</option>";

									for ($i = 0; $i < count($taxonomy_terms["material"]); $i++) {

										if (!empty($taxonomy_terms["material"][$i]->name) && $taxonomy_terms["material"][$i]->name != null && $taxonomy_terms["material"][$i]->name != "") {

											$slug = $taxonomy_terms["material"][$i]->slug;

											$slug = str_replace("-en","",$slug);

											echo "<option value='".$slug."'>".$taxonomy_terms["material"][$i]->name."</option>";

										}

									}

									echo "</select>";

									echo '<svg style="--themecolor: '.$color.';" version="1.1" class="arrow" id="Capa_1" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:cc="http://creativecommons.org/ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 89.7 48.09" style="enable-background:new 0 0 89.7 48.09;" xml:space="preserve"><g transform="translate(0,-952.36218)"><path d="M45,999.33c1.16-0.06,2.27-0.52,3.12-1.31l39-36c2.03-1.88,2.15-5.05,0.27-7.08c-1.88-2.03-5.05-2.15-7.08-0.27c0,0,0,0,0,0l-35.59,32.84L9.12,954.68c-2.03-1.88-5.2-1.76-7.08,0.26c-1.88,2.03-1.76,5.2,0.26,7.08c0,0,0,0,0,0l39,36C42.31,998.94,43.64,999.41,45,999.33L45,999.33z"/></g></svg>';

									echo "</div>";

								}

								?>

							</div>

						</div>

						<hr>

						<!--<div class="showMore" id="showMore" onclick="showMore(this)">

							<p style="color:<?php the_field('color', $category); ?>;"><?php _e( 'Cargar más productos', 'ws' ); ?></p>

							<svg xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:svg="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 125;" xml:space="preserve">

								<style type="text/css">

								.st0{fill-rule:evenodd;clip-rule:evenodd;fill:<?php the_field('color', $category); ?>;}

								</style>

								<g transform="translate(0,-952.36218)">

									<path class="st0" d="M49.8,992.4c1.2,0.1,2.3-0.3,3.2-1l39.9-30c2.2-1.6,2.7-4.8,1.1-7s-4.8-2.7-7-1.1c0,0-0.1,0.1-0.1,0.1   L50,981.1l-36.9-27.7c-2.2-1.7-5.3-1.3-7,0.9s-1.3,5.3,0.9,7c0,0,0.1,0.1,0.1,0.1l39.9,30C47.8,992,48.8,992.3,49.8,992.4   L49.8,992.4z"></path>

									<path class="st0" d="M49.8,1077.4c1.2,0.1,2.3-0.3,3.2-1l39.9-30c2.2-1.6,2.7-4.8,1.1-7c-1.6-2.2-4.8-2.7-7-1.1   c0,0-0.1,0.1-0.1,0.1L50,1066.1l-36.9-27.7c-2.2-1.7-5.3-1.3-7,0.9c-1.7,2.2-1.3,5.3,0.9,7c0,0,0.1,0.1,0.1,0.1l39.9,30   C47.8,1077,48.8,1077.3,49.8,1077.4z"></path>

									<path class="st0" d="M49.8,1034.9c1.2,0.1,2.3-0.3,3.2-1l39.9-30c2.2-1.6,2.7-4.8,1.1-7s-4.8-2.7-7-1.1c0,0-0.1,0.1-0.1,0.1   L50,1023.6l-36.9-27.7c-2.2-1.7-5.3-1.3-7,0.9s-1.3,5.3,0.9,7c0,0,0.1,0.1,0.1,0.1l39.9,30C47.8,1034.5,48.8,1034.8,49.8,1034.9   L49.8,1034.9z"></path>

								</g>

							</svg>

						</div>-->
					
					</div>

				</section>

				<?php

				endwhile;

			}
			
			?>

			<script>

			document.addEventListener("DOMContentLoaded", function() {

				// Selecciona el contenedor de filtros y el contenedor de productos

				const filtros = document.querySelector('.productos-filter');

				const productosWrap = document.querySelector('.productos-wrap1');

				// Mueve los filtros antes de los productos

				productosWrap.insertBefore(filtros, productosWrap.firstChild);

			});

			function filterProducts() {

				var productosDiv = document.querySelector(".productos");

				var products = productosDiv.querySelectorAll(".productos-grid > div");

				//document.getElementById("showMore").classList.add("display-none")

				for (let i = 0; i < products.length; i++) {

					products[i].classList.remove("display-none")

				}

				var color_filter = null

				var familia_filter = null

				var material_filter = null

				var tipo_filter = null

				if (document.getElementById("color_sel")) {

					color_filter = document.getElementById("color_sel").value

				}

				if (document.getElementById("material_sel")) {

					material_filter = document.getElementById("material_sel").value

				}

				if (document.getElementById("tipo_sel")) {

					tipo_filter = document.getElementById("tipo_sel").value

				}

				for (let i = 0; i < products.length; i++) {

					var color_flag = false;

					var material_flag = false;

					var tipo_flag = false;

					var color = products[i].getAttribute("color").split(',')

					var material = products[i].getAttribute("material").split(',')

					var tipo = products[i].getAttribute("tipo").split(',')

					if (color_filter != null) {

						for (let j = 0; j < color.length; j++) {

							if (color[j].toLowerCase() == color_filter.toLowerCase()) {

								color_flag = true

							}

							if (color_filter == "all") {

								color_flag = true

							}

						}

					} else {

						color_flag = true;

					}

					if (material_filter != null) {

						for (let j = 0; j < material.length; j++) {

							if (material[j].toLowerCase() == material_filter.toLowerCase()) {

								material_flag = true

							}

							if (material_filter == "all") {

								material_flag = true

							}

						}

					} else {

						material_flag = true;

					}

					if (tipo_filter != null) {

						for (let j = 0; j < tipo.length; j++) {

							if (tipo[j].toLowerCase() == tipo_filter.toLowerCase()) {

								tipo_flag = true

							}

							if (tipo_filter == "all") {

								tipo_flag = true

							}

						}

					} else {

						tipo_flag = true;

					}

					if (color_flag == false || material_flag == false || tipo_flag == false) {

						products[i].classList.add("display-none")

					} else if (color_flag == true && material_flag == true && tipo_flag == true) {

						products[i].classList.remove("display-none")

					}

				}

			}

			var show_index = 16;

			var prod = null;

			document.addEventListener("DOMContentLoaded", function(event) { 

				window.event.stopPropagation();

				prod = document.querySelectorAll(".tax-product_cat .productos .productos-grid > div")

			});

			function showMore(dom) {

				if (show_index > prod.length) {

					dom.classList.add("display-none")

				}

				for (let i = 0; i < show_index; i++) {

					prod[i].classList.remove("display-none")

				}

				show_index += 16;

			}

			</script>

			<section class="descripcion-baras">

				<div class="container-2">

					<p><?php the_field("descripcion", $category); ?></p>

				</div>

			</section>

			<?php

			if(have_rows('ejemplos', $category)) {

				while( have_rows('ejemplos', $category)) : the_row();

				?>

				<section class="ejemplos">

					<div class="container-1">

						<div class="general-flex">

							<h2><?php the_sub_field('titulo', false, false); ?></h2>

							<hr>

						</div>

						<div class="general-grid">

						<?php

						if(have_rows('repetidor')) {

							while( have_rows('repetidor')) : the_row();

							?>

							<a href="<?php the_sub_field('enlace'); ?>" style="background-image:url(<?php the_sub_field('imagen'); ?>);">

								<p><?php the_sub_field('texto'); ?></p>

							</a>

							<?php

							endwhile;

						}

						?>

						</div>

						<?php /*

						if(have_rows('boton')) {

							while( have_rows('boton')) : the_row();

							

								<a class="button-generic" href="<?php the_sub_field('enlace'); "><?php the_sub_field('texto'); </a>

							<?php

							endwhile;

						}

						*/ ?>

					</div>

				</section>

				<?php

				endwhile;

			}

			?>

			<script>

			$(document).ready(function(){

				if (window.matchMedia("(max-width: 768px)").matches) {

				$('.ejemplos .general-grid').slick({

						infinite: true,

						autoplay:false,

						autoplaySpeed:3000,

						speed: 300,

						slidesToShow: 1,

						centerMode: false,

						variableWidth: true,

						dots: false,

						prevArrow: false,

						nextArrow: false,

						mobileFirst: true,

						responsive: [{

						breakpoint: 768,

						settings: {

							settings: "unslick"

						}

						}]

					});

				} 

			});

			// Filtros hidden

			document.addEventListener("DOMContentLoaded", function(event) { 

				var fls = document.querySelectorAll(".productos-filter select");

				var els = document.querySelectorAll(".tax-product_cat .productos .productos-grid > div");

				for (let i = 0; i < fls.length; i++) {

					var chd = fls[i].querySelectorAll("option")

					for (let j = 0; j < chd.length; j++) {

						var flag = true;

						for (let k = 0; k < els.length; k++) {

							if ((els[k].getAttribute("color").toLowerCase()).includes(chd[j].value.toLowerCase())) {

								flag = false;

							}

							if ((els[k].getAttribute("tipo").toLowerCase()).includes(chd[j].value.toLowerCase())) {

								flag = false;

							}

							if ((els[k].getAttribute("material").toLowerCase()).includes(chd[j].value.toLowerCase())) {

								flag = false;

							}

						}

						if (chd[j].value == "all") {

							flag = false;

						}

						if (flag) {

							chd[j].classList.add("display-none")

						}

					}

				}

			});

			</script>

			<style>

				.bloques_seo h2, .bloques_seo h3, .bloques_seo p, .bloques_seo li { padding-top: 30px; }

				.bloques_seo p strong, .bloques_seo h2 strong, .bloques_seo h3 strong, .bloques_seo li strong { color: black; }

				.bloques_seo ul { list-style: none; }

				.bloques_seo li img{ width: 32px; padding-right: 10px; }

			</style>

			<section id='bloques_seo' class='bloques_seo'>

				<div class="container-1">

					<?php if( get_field("titulo_h2.1", $category) ): ?>

						<h2><?php the_field("titulo_h2.1", $category); ?></h2>

					<?php endif; ?>
					
					<?php if( get_field("texto_p.1", $category) ): ?>

						<p><?php the_field("texto_p.1", $category); ?></p>

					<?php endif; ?>
				
					<?php if( get_field("titulo_h3.1", $category) ): ?>

						<h3><?php the_field("titulo_h3.1", $category); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.2", $category) ): ?>

						<p><?php the_field("texto_p.2", $category); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h3.2", $category) ): ?>

						<h3><?php the_field("titulo_h3.2", $category); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.3", $category) ): ?>

						<p><?php the_field("texto_p.3", $category); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h3.3", $category) ): ?>

						<h3><?php the_field("titulo_h3.3", $category); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.4", $category) ): ?>

						<p><?php the_field("texto_p.4", $category); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h2.2", $category) ): ?>

						<h2><?php the_field("titulo_h2.2", $category); ?></h2>

					<?php endif; ?>

					<?php if( get_field("texto_p.5", $category) ): ?>

						<p><?php the_field("texto_p.5", $category); ?></p>

					<?php endif; ?>

					<?php if( get_field("titulo_h3.4", $category) ): ?>

						<h3><?php the_field("titulo_h3.4", $category); ?></h3>

					<?php endif; ?>

					<?php if( get_field("texto_p.6", $category) ): ?>

						<p><?php the_field("texto_p.6", $category); ?></p>

					<?php endif; ?>

					<?php if( have_rows('lista', $category) ): ?>

						<ul>

							<?php while( have_rows('lista', $category) ): the_row(); ?>

								<li><img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-black-right.svg"><?php the_sub_field('elemento_lista'); ?></li>
							
							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

				</div>

			</section>

		</article>

	</main>

</div>

<?php

get_footer();

?>
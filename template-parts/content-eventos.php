<?php

/**
 * 
 * Template part para mostrar el contenido de eventos individuales
 * 
 * Archivo: content-eventos.php
 * 
 */

?>

<style>

.single main { padding-top: 0px; }


/* INTRODUCCIÓN */

.page-template-single-eventos .introduccion { background-repeat: no-repeat; background-size: cover; background-position: center; position: relative; }

.page-template-single-eventos .introduccion::before { background: rgb(0,0,0); background: -moz-linear-gradient(0deg, rgba(0,0,0,0.8363678234965861) 0%, rgba(0,0,0,0.6150793080904237) 14%, rgba(0,0,0,0.1612977954853817) 36%, rgba(0,0,0,0) 100%); background: -webkit-linear-gradient(0deg, rgba(0,0,0,0.8363678234965861) 0%, rgba(0,0,0,0.6150793080904237) 14%, rgba(0,0,0,0.1612977954853817) 36%, rgba(0,0,0,0) 100%); background: linear-gradient(0deg, rgba(0,0,0,0.8363678234965861) 0%, rgba(0,0,0,0.6150793080904237) 14%, rgba(0,0,0,0.1612977954853817) 36%, rgba(0,0,0,0) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#000000",endColorstr="#000000",GradientType=1);  content:""; width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: 2; }

.page-template-single-eventos .introduccion > div { display: flex; flex-direction: column; align-items: center; justify-content: flex-end; gap: 24px; height: 100%; padding-bottom: 32px; position: relative; z-index: 3; }

.page-template-single-eventos .introduccion h1 { text-transform: uppercase; font-size: 64px; color: white; text-align: center; margin: 0 auto !important; font-weight: bold; max-width: 900px;}

.page-template-single-eventos .introduccion p { max-width: 900px; font-size: 24px; color: white; text-align: center; margin: 0 auto !important; }

.page-template-single-eventos .introduccion img { height: 34px; width: fit-content; object-fit: contain; }

@media (max-width: 960px) {

    .page-template-single-eventos .introduccion h1 { text-transform: uppercase; font-size: 32px; color: white; text-align: center; margin: 0 auto !important; font-weight: bold; max-width: 250px;}

    .page-template-single-eventos .introduccion p { max-width: 400px; font-size: 20px; color: white; text-align: center; margin: 0 auto !important; line-height: 1.3; }

}


/* PRODUCTOS FORM */

.page-template-single-eventos .productos-form { padding-top: 100px;  }

.page-template-single-eventos .productos-form h3 strong{ color: black }


/* PRODUCTO GRID */

.page-template-single-eventos .productos-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; padding-top: 50px;}

@media (max-width: 565px) {

    .page-template-single-eventos .productos-grid { grid-template-columns: repeat(2, 1fr); }

}

@media (max-width: 360px) {

    .page-template-single-eventos .productos-grid { grid-template-columns: repeat(1, 1fr); }

}


/* PRODUCTO ITEM */

.page-template-single-eventos .producto-item { padding: 1rem; text-align: center; border-radius: 6px; opacity: 0; transform: translateY(30px); transition: opacity 0.6s ease, transform 0.6s ease;}

.producto-item.visible { opacity: 1; transform: translateY(0);}


/* PRODUCTO ITEM - SIN STOCK */

.page-template-single-eventos .producto-item.sin-stock { opacity: 0.6; background: #f8f9fa; border-color: #dee2e6; pointer-events: none; }

.page-template-single-eventos .producto-item.sin-stock:hover { box-shadow: none; border-color: #dee2e6; }

.page-template-single-eventos .producto-item.sin-stock .producto-precio { color: #6c757d; }

.page-template-single-eventos .producto-item.sin-stock .producto-info .nombre { color: #6c757d; }

.page-template-single-eventos .producto-item.sin-stock .cantidad-input { background: #e9ecef; cursor: not-allowed;}

.page-template-single-eventos .mensaje-sin-stock { color: #dc3545 !important; font-weight: bold; font-size: 14px; margin-top: 5px; padding: 4px 8px; background: #f8d7da; border: 1px solid #f5c6cb; border-radius: 4px; display: inline-block; }

.page-template-single-eventos .producto-item.sin-stock .producto-imagen img { mix-blend-mode: multiply; }


/* PRODUCTO ITEM - SELECTED / HOVER */

.page-template-single-eventos .producto-item.selected { border: 2px solid rgb(37, 163, 12); border-radius: 6px; }

.page-template-single-eventos .producto-item:hover { transform: translateY(-6px); box-shadow: 0 8px 20px rgba(0,0,0,0.15);}


/* PRODUCTO ITEM - IMAGEN */

.page-template-single-eventos .producto-item .producto-imagen { width: 200px;  height: 200px;  display: flex; align-items: center; justify-content: center; margin: 0 auto; }

.page-template-single-eventos .producto-item .producto-imagen img {  width: 100%;  height: 100%;  object-fit: cover; }

@media (max-width: 800px) {

    .page-template-single-eventos .producto-item .producto-imagen { width: 100px;  height: 100px; }

}


/* PRODUCTO ITEM - INFO */

.page-template-single-eventos .nombre strong {color : black; }

.page-template-single-eventos .producto-info .categoria { color: #666; font-size: 13px; background: #f1f3f4; padding: 3px 8px; border-radius: 12px; display: inline-block; }


/* PRECIO TOTAL */

.page-template-single-eventos .total-section { padding: 20px; border-radius: 8px; margin: 30px 0; text-align: center; }

.page-template-single-eventos .total-amount { font-size: 24px; font-weight: bold; color:rgb(37, 163, 12); }

</style>

<?php 

get_header();

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('page-template-single-eventos'); ?>>

    <section class="introduccion" style="background-image: url(<?php the_field("imagen"); ?>);">

        <div class="container-1">

            <h1><?php echo get_the_title(); ?></h1>

            <?php if(get_field('fecha')): ?>

                <p>📅 Fecha: <?php the_field('fecha'); ?></p>

            <?php endif; ?>
            
            <?php if(get_field('sitio')): ?>

                <p>📍 Sitio: <?php the_field('sitio'); ?></p>

            <?php endif; ?>

            <a href="#productos-form">

                <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/arrow-white-bottom.svg">

            </a>

        </div>

    </section>

    <section class="evento-content">

        <div class="container-1">
            
            <!-- Formulario de productos -->

            <div id="productos-form" class="productos-form">

                <h3> <strong> <?php _e("Select products", "ws") ?> </strong> </h3>

                    <?php wp_nonce_field('pedido_evento_action', 'pedido_evento_nonce'); ?>

                    <input type="hidden" name="evento_id" value="<?php echo get_the_ID(); ?>">
                    
                    <!-- Lista de productos disponibles -->

                    <div class="productos-grid">

                        <?php

                        // Usar la función helper para obtener productos seleccionados

                        $productos_seleccionados = get_event_selected_products(get_the_ID());
                        
                        
                        if (!empty($productos_seleccionados)) :
                           
                            // Obtener credenciales para las imágenes

                            $token = get_bc_access_token(); 

                            $company_id = BC_COMPANY_ID;

                            $environment = BC_ENVIRONMENT;

                            $tenant_id = BC_TENANT_ID;

                            foreach ($productos_seleccionados as $producto) :
                                
                                // Obtener stock guardado

                                $stock_disponible_num = get_post_meta(get_the_ID(), '_bc_stock_' . $producto['id'], true);

                                $stock_disponible_num = $stock_disponible_num ? intval($stock_disponible_num) : 0;
                                
                                // Obtener precio guardado

                                $precio_guardado = get_post_meta(get_the_ID(), '_bc_price_' . $producto['id'], true);

                                $precio_guardado = $precio_guardado ? floatval($precio_guardado) : 0.00;

                                // Obtener cantidad minima

                                $cantidad_minima = get_post_meta(get_the_ID(), '_bc_min_' . $producto['id'], true);

                                $cantidad_minima = $cantidad_minima ? intval($cantidad_minima) : 0;

                                // Obtener cantidad máxima

                                $cantidad_maxima = get_post_meta(get_the_ID(), '_bc_max_' . $producto['id'], true);

                                $cantidad_maxima = $cantidad_maxima ? intval($cantidad_maxima) : 99;

                                // Solo determinar si hay stock o no para mostrar

                                $producto_disponible = true; // Permitir siempre seleccionar

                                $producto_class = '';
                                
                        ?>

                                <div class="producto-item <?php echo $producto_class; ?>" 
                                     data-precio="<?php echo intval($precio_guardado * 100); ?>"
                                     data-stock="<?php echo $stock_disponible_num; ?>"
                                     data-max-original="<?php echo $cantidad_maxima; ?>">
                              
                                    <!-- Imagen del producto -->

                                    <div class="producto-imagen">

                                    <?php
                                        
                                        // Obtener la imagen del producto usando la función helper

                                        $image_content = get_bc_product_image_simple($producto['id'], $token, $company_id, $environment, $tenant_id);
                                        
                                        // Codificación base64

                                        if ($image_content) {

                                            $image_type = strpos($image_content, '/9j/') === 0 ? 'image/jpeg' : 'image/png';

                                            echo '<img src="data:' . $image_type . ';base64,' . $image_content . '" alt="' . esc_attr($producto['displayName']) . '">';
                                        
                                        // Sin imagen

                                        } else {

                                            echo '<div class="no-image"><img src="https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png" alt="Sin imagen"></div>';

                                        }
                                        
                                        ?>

                                    </div>
                                    
                                    <div class="producto-info">

                                        <!-- Nombre y categoría del producto -->

                                        <div class="nombre"><strong><?php echo esc_html($producto['displayName']); ?></strong></div>

                                        <div class="categoria">

                                            <?php echo isset($producto['itemCategoryCode']) ? esc_html($producto['itemCategoryCode']) : 'General'; ?>

                                        </div>

                                        <!-- Mostrar stock -->

                                        <div class="producto-stock"></div>

                                    </div>

                                    <div class="producto-precio">€<?php echo number_format($precio_guardado, 2, ',', '.'); ?></div>

                                    <div class="producto-cantidad">

                                        <label>Cantidad:</label>

                                        <select name="productos[<?php echo esc_attr($producto['id']); ?>]" 

                                                class="cantidad-input"

                                                data-product-id="<?php echo esc_attr($producto['id']); ?>">

                                                <?php for ($i = $cantidad_minima; $i <= $cantidad_maxima; $i++): ?>

                                                    <option value="<?php echo $i; ?>" <?php echo ($i == 0) ? 'selected' : ''; ?>>

                                                        <?php echo $i; ?>

                                                    </option>

                                                <?php endfor; ?>

                                    </select>

                                    </div>

                                </div>

                        <?php endforeach;

                        else: ?>

                            <p style="text-align: center; color: #666; font-style: italic;">No hay productos disponibles para este evento.</p>

                        <?php 

                        endif; 

                        ?>

                    </div>

                    <?php if (!empty($productos_seleccionados)): ?>

                    <!-- Precio total -->

                    <div class="total-section">

                        <div class="total-amount">

                            <?php _e("Total", "ws"); ?>: <span id="total-precio">€0.00</span>

                        </div>

                    </div>

                    <?php endif; ?>

            </div>

            <?php echo do_shortcode('[contact-form-7 id="3f203b0" title="Formulario para evento"]'); ?>
            
        </div>

    </section>

</article>

<script>

document.addEventListener('DOMContentLoaded', function() {

    // Get Form

    const form = document.querySelector('.wpcf7 form');

    if (!form) return;

    // Función para limpiar campos hidden anteriores

    function limpiarCamposHidden() {

        const camposExistentes = form.querySelectorAll('input[name^="producto_"], input[name="productos_seleccionados"], input[name="total_pedido"]');

        camposExistentes.forEach(campo => campo.remove());

    }

    // Función para crear campos hidden dinámicamente

    function crearCamposProductos() {

        limpiarCamposHidden();
        
        const productosSeleccionados = [];

        document.querySelectorAll('.producto-item').forEach(function(item) {

            const cantidadInput = item.querySelector('.cantidad-input');

            const cantidad = parseInt(cantidadInput.value) || 0;
            
            if (cantidad > 0) {

                // Obtener datos del producto

                const nombre = item.querySelector('.nombre').innerText.trim();

                const precio = (parseInt(item.dataset.precio) / 100).toFixed(2);

                const categoria = item.querySelector('.categoria') ? item.querySelector('.categoria').innerText.trim() : 'General';

                // Crear la línea del producto para envío mail

                const lineaProducto = `· ${nombre} - Cantidad: ${cantidad} - Precio: €${precio}`;

                productosSeleccionados.push(lineaProducto);

            }

        });

        // Campo hidden [productos_seleccionados] con todos los productos separados por saltos de línea

        if (productosSeleccionados.length > 0) {

            const campoProductos = document.createElement('input');

            campoProductos.type = 'hidden';

            campoProductos.name = 'productos_seleccionados';

            campoProductos.value = productosSeleccionados.join('\n');

            form.appendChild(campoProductos);

        }

        // Campo hidden [total_pedido] con el total del pedido

        const totalPedido = document.getElementById('total-precio');

        if (totalPedido) {

            const campoTotalPrecio = document.createElement('input');

            campoTotalPrecio.type = 'hidden';

            campoTotalPrecio.name = 'total_pedido';

            campoTotalPrecio.value = totalPedido.textContent;

            form.appendChild(campoTotalPrecio);

        }

        // Crear un campo JSON con las cantidades de cada producto

        const productosJson = {};

        document.querySelectorAll('.producto-item').forEach(function(item) {

            const cantidadInput = item.querySelector('.cantidad-input');

            const cantidad = parseInt(cantidadInput.value) || 0;

            if (cantidad > 0) {

                const productId = cantidadInput.getAttribute('data-product-id');

                productosJson[productId] = cantidad;

            }

        });

        // Campo hidden [productos_solicitados] con el JSON de productos solicitados

        if (Object.keys(productosJson).length > 0) {

            const campoProductosSolicitados = document.createElement('input');

            campoProductosSolicitados.type = 'hidden';

            campoProductosSolicitados.name = 'productos_solicitados';

            campoProductosSolicitados.value = JSON.stringify(productosJson);

            form.appendChild(campoProductosSolicitados);

        }

    }

    // Actualizar campos cuando cambian las cantidades

    const cantidadInputs = document.querySelectorAll('.cantidad-input');

    cantidadInputs.forEach(input => {

        input.addEventListener('change', crearCamposProductos);

        input.addEventListener('input', crearCamposProductos);

    });

    // Crear campos antes del envío

    form.addEventListener('submit', function(e) {

        crearCamposProductos();

    });

    // Crear campos iniciales

    crearCamposProductos();

});

// Script para actualizar precio total

document.addEventListener('DOMContentLoaded', function() {

    const cantidadInputs = document.querySelectorAll('.cantidad-input');

    const totalElement = document.getElementById('total-precio');
    
    if (cantidadInputs.length > 0 && totalElement) {

        function actualizarTotal() {

            let total = 0;

            let hayProductos = false;
            
            cantidadInputs.forEach(input => {

                const cantidad = parseInt(input.value) || 0;

                const productoItem = input.closest('.producto-item');

                const precio = parseInt(productoItem.dataset.precio) || 0;

                const stock = parseInt(productoItem.dataset.stock) || 0;

                if (cantidad > 0 && stock > 0) {
                    
                    hayProductos = true;

                    productoItem.classList.add('selected');

                    total += cantidad * precio;
                    
                } else {

                    productoItem.classList.remove('selected');

                }

            });
            
            totalElement.textContent = '€' + (total / 100).toFixed(2);

        }
        
        cantidadInputs.forEach(input => {

            input.addEventListener('input', actualizarTotal);

            input.addEventListener('change', actualizarTotal);

        });
        
        // Inicializar total

        actualizarTotal();

    }

});


// Script para limitar cantidad según stock y desactivar productos sin stock

document.addEventListener('DOMContentLoaded', function() {

    const cantidadInputs = document.querySelectorAll('.cantidad-input');
    
    cantidadInputs.forEach(input => {

        const productoItem = input.closest('.producto-item');

        const stockDisponible = parseInt(productoItem.dataset.stock) || 0;

        const maxOriginal = parseInt(productoItem.dataset.maxOriginal) || 99;

        const productId = input.getAttribute('data-product-id');
                
        // Si no hay stock, desactivar completamente el producto

        if (stockDisponible === 0) {

            // Desactivar el select

            input.disabled = true;
            
            // Agregar clase visual para producto sin stock

            productoItem.classList.add('sin-stock');
            
            // Asegurar que esté en cantidad 0

            input.value = 0;
            
            // Opcional: Agregar mensaje de "Sin stock"

            let mensajeSinStock = productoItem.querySelector('.mensaje-sin-stock');

            if (!mensajeSinStock) {

                mensajeSinStock = document.createElement('div');

                mensajeSinStock.className = 'mensaje-sin-stock';

                mensajeSinStock.textContent = 'Sin stock';

                mensajeSinStock.style.cssText = 'color: #dc3545; font-weight: bold; font-size: 14px; margin-top: 5px;';
                
                // Insertar después del stock info

                const stockElement = productoItem.querySelector('.producto-stock');

                if (stockElement) {

                    stockElement.insertAdjacentElement('afterend', mensajeSinStock);

                }

            }
            
        }

        // Si hay stock pero es limitado

        else if (stockDisponible < maxOriginal && stockDisponible > 0) {

            // Remover opciones que excedan el stock

            const options = input.querySelectorAll('option');

            options.forEach(option => {

                const valor = parseInt(option.value);

                if (valor > stockDisponible) {

                    option.remove();

                }

            });
            
        }

    });

});

// Script Enviando text

document.addEventListener('DOMContentLoaded', function() {

    $button_send = document.querySelector('.wpcf7-form-control.wpcf7-submit');
    
    $button_send.onclick = function (){

        $button_send.value = <?php echo json_encode(__("Sending...", "ws")); ?>;

    }

});


// Script para animar los productos al cargar

document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.producto-item');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    items.forEach(item => {
        observer.observe(item);
    });
});

</script>
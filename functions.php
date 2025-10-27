<?php
/**
 * wbsw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wbsw
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.16' );
}

if ( ! function_exists( 'wbsw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wbsw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wbsw, use a find and replace
		 * to change 'wbsw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wbsw', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'wbsw' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wbsw_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'wbsw_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wbsw_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wbsw_content_width', 640 );
}
add_action( 'after_setup_theme', 'wbsw_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wbsw_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wbsw' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wbsw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wbsw_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wbsw_scripts() {
	wp_enqueue_style( 'wbsw-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wbsw-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wbsw-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wbsw_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );

// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

// Añadir menus al footer y top

function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'menu-footer-1' => __( 'menu-footer-1' ),
      'menu-footer-2' => __( 'menu-footer-2' ),
      'menu-nav-1' => __( 'menu-nav-1' ),
      'menu-nav-2' => __( 'menu-nav-2' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );


//Añadir ACF como clase en el body
add_filter('body_class','acf_body_class');
function acf_body_class( $classes ) {
$clase_custom = get_field('clase_body');
if($clase_custom){
  $classes[] = $clase_custom;
}
// return the $classes array
return $classes;
}

//Añadir sidebar custom
function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Sidebar filtros', 'wbsw' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'wbsw' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );


// Añadir Paginacion
function numeric_posts_nav() {

	if( is_singular() ) {
		return;
	}

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 ) {
		return;
	}

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 ) {
		$links[] = $paged;
	}

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() ) {
		printf( '<li class="arrow">%s</li>' . "\n", get_previous_posts_link('<i class="my-left-arrow"></i>') );
	}

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li class="points">…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) ) {
			echo '<li class="points">…</li>' . "\n";
		}

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() ) {
		printf( '<li class="arrow"/>%s</li>' . "\n", get_next_posts_link('<i class="my-right-arrow"></i>') );
	}

	echo '</ul></div>' . "\n";
}
 
// Search Products
function get_wc_products() {
	$html = "";

    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 10,
        's' => $_POST["keyword"]
    );
	
	$query = new WP_Query($args);

    if ($query->have_posts()) {
    	$html .= "<div class='product-wrap'>";
        while ($query->have_posts()) {
			$query->the_post();
			global $product;
			$html .= "<a href='".get_permalink()."'>
				<img onerror=\"this.onerror=null; this.src='https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png'\" src='".get_the_post_thumbnail_url( get_the_ID() )."'>
				<p class='title'>".get_the_title()."</p>
			<a/>";
        }
        $html .= "</div>";
    } else {
        $html.= '<p>No se ha encontrado el producto '.$_POST["keyword"].'</p>';
    }

    echo json_encode($html);
    wp_die();
}

add_action("wp_ajax_get_wc_products", "get_wc_products");
add_action("wp_ajax_nopriv_get_wc_products", "get_wc_products");

// Custom search
function wp_custom_pagination($args = [], $class = 'pagination') {

    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

    $args = wp_parse_args( $args, [
        'mid_size'           => 2,
        'prev_next'          => false,
        'prev_text'          => __('Older posts', 'textdomain'),
        'next_text'          => __('Newer posts', 'textdomain'),
        'screen_reader_text' => __('Posts navigation', 'textdomain'),
    ]);

    $links     = paginate_links($args);
    $next_link = get_previous_posts_link($args['next_text']);
    $prev_link = get_next_posts_link($args['prev_text']);
    $template  = apply_filters( 'the_so37580965_navigation_markup_template', '
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s<div class="page-numbers-container">%4$s</div>%5$s</div>
    </nav>', $args, $class);

    echo sprintf($template, $class, $args['screen_reader_text'], $prev_link, $links, $next_link);

}

/* Bloquear acceso Rest API wp-json si no estas conectado */

/*
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( true === $result || is_wp_error( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error(
            'rest_not_logged_in',
            __( 'You are not currently logged in.' ),
            array( 'status' => 401 )
        );
    }
    return $result;
});
*/
/* Creación Custom Fields Modelo 3D Variaciones Productos*/

add_action( 'woocommerce_variation_options_pricing', 'rudr_fields', 10, 3 );

function rudr_fields( $loop, $variation_data, $post ) {

	woocommerce_wp_text_input(
		array(
			'id'            => 'text_field[' . $loop . ']',
			'label'         => 'Modelo 3D',
			'wrapper_class' => 'form-row',
			'placeholder'   => 'Link sketchfab...',
			'desc_tip'      => 'true',
			'description'   => 'We can add some description for a field.',
			'value'         => get_post_meta( $post->ID, 'rudr_text', true )
		)
	);

}

/* Guardar Valores Modelo 3D Variaciones Productos*/

add_action( 'woocommerce_save_product_variation', 'rudr_save_fields', 10, 2 );

function rudr_save_fields( $variation_id, $loop ) {

	$text_field = ! empty( $_POST[ 'text_field' ][ $loop ] ) ? $_POST[ 'text_field' ][ $loop ] : '';
	update_post_meta( $variation_id, 'rudr_text', sanitize_text_field( $text_field ) );

}

/* GET BC Products */

function get_bc_access_token() {
    $tenant_id     = BC_TENANT_ID;
    $client_id     = BC_CLIENT_ID;
    $client_secret = BC_CLIENT_SECRET;

    $url = "https://login.microsoftonline.com/$tenant_id/oauth2/v2.0/token";

    $response = wp_remote_post($url, [
        'body' => [
            'grant_type'    => 'client_credentials',
            'client_id'     => $client_id,
            'client_secret' => $client_secret,
            'scope'         => 'https://api.businesscentral.dynamics.com/.default',
        ],
    ]);

    if (is_wp_error($response)) return null;

    $body = json_decode(wp_remote_retrieve_body($response), true);
    return $body['access_token'] ?? null;
}

function get_bc_products() {
    $token        = get_bc_access_token();
    $company_id   = BC_COMPANY_ID;
    $environment  = BC_ENVIRONMENT;
    $tenant_id    = BC_TENANT_ID;
    $url = "https://api.businesscentral.dynamics.com/v2.0/$tenant_id/$environment/api/v2.0/companies($company_id)/items";
    $response = wp_remote_get($url, [
        'headers' => [
            'Authorization' => "Bearer $token",
            'Accept'        => 'application/json',
        ],
        'timeout' => 60,
    ]);
    if (is_wp_error($response)) {
        return [];
    }
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    if (!isset($data['value'])) {
        return [];
    }
    $products = $data['value'];
    return $products;
}

function get_bc_product_image_simple($product_id, $token, $company_id, $environment, $tenant_id) {
    // Usar cache simple de WordPress que WP Fastest Cache puede manejar
    $cache_key = 'bc_img_' . md5($product_id);
    $cached_image = wp_cache_get($cache_key, 'bc_images');
    
    if ($cached_image !== false) {
        return $cached_image === 'no_image' ? null : $cached_image;
    }
    
    // Probar endpoints para obtener la imagen
    $endpoints = [
        "https://api.businesscentral.dynamics.com/v2.0/$tenant_id/$environment/api/v2.0/companies($company_id)/items($product_id)/picture",
        "https://api.businesscentral.dynamics.com/v2.0/$tenant_id/$environment/api/v1.0/companies($company_id)/items($product_id)/picture"
    ];
    
    foreach ($endpoints as $url) {
        $response = wp_remote_get($url, [
            'headers' => [
                'Authorization' => "Bearer $token",
                'Accept'        => 'application/json',
            ],
            'timeout' => 8,
        ]);
        
        if (is_wp_error($response) || wp_remote_retrieve_response_code($response) !== 200) {
            continue;
        }
        
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        
        $media_read_link = null;
        
        if (isset($data['pictureContent@odata.mediaReadLink'])) {
            $media_read_link = $data['pictureContent@odata.mediaReadLink'];
        }
        
        if (!$media_read_link && isset($data['value']) && is_array($data['value']) && !empty($data['value'])) {
            $item = $data['value'][0];
            if (isset($item['content@odata.mediaReadLink'])) {
                $media_read_link = $item['content@odata.mediaReadLink'];
            }
        }
        
        if ($media_read_link) {
            $image_response = wp_remote_get($media_read_link, [
                'headers' => [
                    'Authorization' => "Bearer $token",
                ],
                'timeout' => 8,
            ]);
            
            if (!is_wp_error($image_response) && wp_remote_retrieve_response_code($image_response) === 200) {
                $image_body = wp_remote_retrieve_body($image_response);
                $base64_image = base64_encode($image_body);
                
                // Usar cache de WordPress compatible con WP Fastest Cache
                wp_cache_set($cache_key, $base64_image, 'bc_images', 3600); // 1 hora
                return $base64_image;
            }
        }
    }
    
    // Cachear que no hay imagen para evitar reintentos
    wp_cache_set($cache_key, 'no_image', 'bc_images', 1800); // 30 minutos
    return null;
}

/* Meta Box de Productos BC para CPT Eventos - Con Stock y Precio */

// Agregar Meta Box al CPT Eventos
add_action('add_meta_boxes', 'add_bc_products_meta_box');

function add_bc_products_meta_box() {
    add_meta_box(
        'bc_products_meta_box',
        '🛍️ Productos de Business Central',
        'bc_products_meta_box_callback',
        'eventos', 
        'normal',
        'high'
    );
}

// Callback para mostrar el contenido del meta box - OPTIMIZADO CON MIN/MAX
function bc_products_meta_box_callback($post) {
    // Añadir nonce para seguridad
    wp_nonce_field('bc_products_meta_box_nonce', 'bc_products_meta_box_nonce');

    // Verificar que la configuración necesaria existe
    if (!function_exists('get_bc_access_token') || 
        !defined('BC_COMPANY_ID') || 
        !defined('BC_ENVIRONMENT') || 
        !defined('BC_TENANT_ID')) {
        echo '<p style="color:red;">❌ Error: configuración de Business Central no encontrada.</p>';
        return;
    }

    // Obtener productos seleccionados actuales
    $selected_products = get_post_meta($post->ID, '_bc_selected_products', true);
    if (!is_array($selected_products)) {
        $selected_products = [];
    }

    // Obtener todos los productos de BC directamente
    $all_products = get_bc_products();

    if (!is_array($all_products)) {
        echo '<p style="color:red;">❌ Error al obtener los productos de Business Central.</p>';
        return;
    }

    echo '<div style="margin: 15px 0;">';
    echo '<p><strong>Selecciona los productos que estarán disponibles en este evento:</strong></p>';

    if (empty($all_products)) {
        echo '<p style="color: #d63384;">⚠️ No se encontraron productos.</p>';
    } else {
        // Agrupar productos por categoría
        $products_by_category = [];

        foreach ($all_products as $product) {
            $category = !empty($product['itemCategoryCode']) ? $product['itemCategoryCode'] : 'Sin categoría';
            if (!isset($products_by_category[$category])) {
                $products_by_category[$category] = [];
            }
            $products_by_category[$category][] = $product;
        }

        echo '<div style="max-height: 400px; overflow-y: auto; border: 1px solid #ddd; padding: 15px; background: #fafafa;">';

        // Botones de selección rápida
        echo '<div style="margin-bottom: 15px;">';
        echo '<button type="button" onclick="selectAllProducts()" class="button">✅ Seleccionar todos</button> ';
        echo '<button type="button" onclick="deselectAllProducts()" class="button">❌ Deseleccionar todos</button>';
        echo '</div>';

        // Campo oculto para almacenar datos JSON de productos seleccionados
        $selected_products_data = [];
        foreach ($selected_products as $product_id) {
            $stock = get_post_meta($post->ID, '_bc_stock_' . $product_id, true);
            $price = get_post_meta($post->ID, '_bc_price_' . $product_id, true);
            $min_qty = get_post_meta($post->ID, '_bc_min_' . $product_id, true);
            $max_qty = get_post_meta($post->ID, '_bc_max_' . $product_id, true);
            
            $selected_products_data[$product_id] = [
                'selected' => true,
                'stock' => $stock ? intval($stock) : 0,
                'price' => $price ? floatval($price) : 0.00,
                'min_qty' => $min_qty ? intval($min_qty) : 0,
                'max_qty' => $max_qty ? intval($max_qty) : 99
            ];
        }
        echo '<input type="hidden" id="selected_products_data" name="selected_products_data" value="' . esc_attr(json_encode($selected_products_data)) . '">';

        // Mostrar productos por categoría
        foreach ($products_by_category as $category => $products) {
            echo '<div style="margin-bottom: 20px;">';
            echo '<h4 style="margin: 10px 0 5px 0; padding: 8px; background: #007cba; color: white; border-radius: 4px;">📂 ' . esc_html($category) . ' (' . count($products) . ' productos)</h4>';

            foreach ($products as $product) {
                $product_id = isset($product['id']) ? $product['id'] : '';
                if (empty($product_id)) continue;

                $product_name = isset($product['displayName']) ? $product['displayName'] : 'Sin nombre';
                $product_number = isset($product['number']) ? $product['number'] : '';
                $is_selected = in_array($product_id, $selected_products);
                
                $stock_value = 0;
                $price_value = 0.00;
                $min_qty_value = 0;
                $max_qty_value = 99;
                
                if ($is_selected) {
                    $saved_stock = get_post_meta($post->ID, '_bc_stock_' . $product_id, true);
                    $saved_price = get_post_meta($post->ID, '_bc_price_' . $product_id, true);
                    $saved_min = get_post_meta($post->ID, '_bc_min_' . $product_id, true);
                    $saved_max = get_post_meta($post->ID, '_bc_max_' . $product_id, true);
                    
                    $stock_value = $saved_stock ? $saved_stock : 0;
                    $price_value = $saved_price ? $saved_price : 0.00;
                    $min_qty_value = $saved_min ? $saved_min : 0;
                    $max_qty_value = $saved_max ? $saved_max : 99;
                }

                echo '<label style="display: block; margin: 5px 0; padding: 8px; background: white; border-radius: 4px; border: 1px solid #ddd;">';
                echo '<input type="checkbox" class="product-checkbox" data-product-id="' . esc_attr($product_id) . '" data-product-name="' . esc_attr($product_name) . '" data-product-number="' . esc_attr($product_number) . '" ' . ($is_selected ? 'checked' : '') . ' style="margin-right: 8px;">';
                echo '<strong>' . esc_html($product_name) . '</strong>';
                if ($product_number) {
                    echo ' <span style="color: #666;">(#' . esc_html($product_number) . ')</span>';
                }

                // Contenedor para campos - solo visible si el producto está seleccionado
                echo '<div class="product-fields" data-product-id="' . esc_attr($product_id) . '" style="margin-top: 10px; ' . ($is_selected ? '' : 'display: none;') . '">';
                
                // Primera fila: Stock y Precio
                echo '<div style="display: flex; gap: 20px; margin-bottom: 10px;">';
                echo '<div style="flex: 1;"> Stock disponible: ';
                echo '<input type="number" class="stock-value" value="' . esc_attr($stock_value) . '" style="width: 80px;" min="0">';
                echo '</div>';
                echo '<div style="flex: 1;"> Precio (€): ';
                echo '<input type="number" class="price-value" value="' . esc_attr($price_value) . '" style="width: 100px;" min="0" step="0.01">';
                echo '</div>';
                echo '</div>';
                
                // Segunda fila: Mínimo y Máximo
                echo '<div style="display: flex; gap: 20px;">';
                echo '<div style="flex: 1;"> Cantidad mínima: ';
                echo '<input type="number" class="min-qty-value" value="' . esc_attr($min_qty_value) . '" style="width: 80px;" min="0">';
                echo '</div>';
                echo '<div style="flex: 1;"> Cantidad máxima: ';
                echo '<input type="number" class="max-qty-value" value="' . esc_attr($max_qty_value) . '" style="width: 80px;" min="1">';
                echo '</div>';
                echo '</div>';
                
                echo '</div>';

                echo '</label>';
            }

            echo '</div>';
        }

        echo '</div>';

        // Contador de productos seleccionados
        echo '<div style="margin-top: 15px; padding: 10px; background: #d4edda; border-radius: 4px;">';
        echo '<span id="selected-count">📊 Productos seleccionados: <strong>' . count($selected_products) . '</strong></span>';
        echo '</div>';
    }

    echo '</div>';

    // JavaScript optimizado - maneja productos seleccionados con stock, precio, min y max
    ?>
    <script>
    let selectedProductsData = {};

    // Inicializar datos desde PHP
    try {
        const initialData = document.getElementById('selected_products_data').value;
        if (initialData) {
            selectedProductsData = JSON.parse(initialData);
        }
    } catch(e) {
        selectedProductsData = {};
    }

    function selectAllProducts() {
        const checkboxes = document.querySelectorAll('.product-checkbox');
        checkboxes.forEach(checkbox => {
            if (!checkbox.checked) {
                checkbox.checked = true;
                handleProductToggle(checkbox);
            }
        });
        updateSelectedCount();
        updateHiddenField();
    }

    function deselectAllProducts() {
        const checkboxes = document.querySelectorAll('.product-checkbox');
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                checkbox.checked = false;
                handleProductToggle(checkbox);
            }
        });
        updateSelectedCount();
        updateHiddenField();
    }

    function handleProductToggle(checkbox) {
        const productId = checkbox.dataset.productId;
        const fieldsDiv = document.querySelector(`.product-fields[data-product-id="${productId}"]`);
        const stockInput = fieldsDiv.querySelector('.stock-value');
        const priceInput = fieldsDiv.querySelector('.price-value');
        const minQtyInput = fieldsDiv.querySelector('.min-qty-value');
        const maxQtyInput = fieldsDiv.querySelector('.max-qty-value');

        if (checkbox.checked) {
            // Producto seleccionado
            selectedProductsData[productId] = {
                selected: true,
                stock: parseInt(stockInput.value) || 0,
                price: parseFloat(priceInput.value) || 0.00,
                min_qty: parseInt(minQtyInput.value) || 0,
                max_qty: parseInt(maxQtyInput.value) || 99
            };
            fieldsDiv.style.display = 'block';
        } else {
            // Producto deseleccionado
            if (selectedProductsData[productId]) {
                delete selectedProductsData[productId];
            }
            fieldsDiv.style.display = 'none';
            stockInput.value = 0;
            priceInput.value = 0.00;
            minQtyInput.value = 0;
            maxQtyInput.value = 99;
        }
    }

    function handleStockChange(input) {
        const fieldsDiv = input.closest('.product-fields');
        const productId = fieldsDiv.dataset.productId;
        const newStock = parseInt(input.value) || 0;
        
        if (selectedProductsData[productId]) {
            selectedProductsData[productId].stock = newStock;
            updateHiddenField();
        }
    }

    function handlePriceChange(input) {
        const fieldsDiv = input.closest('.product-fields');
        const productId = fieldsDiv.dataset.productId;
        const newPrice = parseFloat(input.value) || 0.00;
        
        if (selectedProductsData[productId]) {
            selectedProductsData[productId].price = newPrice;
            updateHiddenField();
        }
    }

    function handleMinQtyChange(input) {
        const fieldsDiv = input.closest('.product-fields');
        const productId = fieldsDiv.dataset.productId;
        const newMinQty = parseInt(input.value) || 0;
        
        if (selectedProductsData[productId]) {
            selectedProductsData[productId].min_qty = newMinQty;
            updateHiddenField();
        }
    }

    function handleMaxQtyChange(input) {
        const fieldsDiv = input.closest('.product-fields');
        const productId = fieldsDiv.dataset.productId;
        const newMaxQty = parseInt(input.value) || 99;
        
        if (selectedProductsData[productId]) {
            selectedProductsData[productId].max_qty = newMaxQty;
            updateHiddenField();
        }
    }

    function updateSelectedCount() {
        const count = Object.keys(selectedProductsData).length;
        const countElement = document.getElementById('selected-count');
        if (countElement) {
            countElement.innerHTML = '📊 Productos seleccionados: <strong>' + count + '</strong>';
        }
    }

    function updateHiddenField() {
        const hiddenField = document.getElementById('selected_products_data');
        if (hiddenField) {
            hiddenField.value = JSON.stringify(selectedProductsData);
        }
    }

    // Event listeners
    document.addEventListener('DOMContentLoaded', function() {
        // Configurar event listeners para checkboxes
        const checkboxes = document.querySelectorAll('.product-checkbox');
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                handleProductToggle(this);
                updateSelectedCount();
                updateHiddenField();
            });
        });

        // Configurar event listeners para inputs de stock
        const stockInputs = document.querySelectorAll('.stock-value');
        stockInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                handleStockChange(this);
            });
            input.addEventListener('input', function() {
                handleStockChange(this);
            });
        });

        // Configurar event listeners para inputs de precio
        const priceInputs = document.querySelectorAll('.price-value');
        priceInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                handlePriceChange(this);
            });
            input.addEventListener('input', function() {
                handlePriceChange(this);
            });
        });

        // Configurar event listeners para inputs de cantidad mínima
        const minQtyInputs = document.querySelectorAll('.min-qty-value');
        minQtyInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                handleMinQtyChange(this);
            });
            input.addEventListener('input', function() {
                handleMinQtyChange(this);
            });
        });

        // Configurar event listeners para inputs de cantidad máxima
        const maxQtyInputs = document.querySelectorAll('.max-qty-value');
        maxQtyInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                handleMaxQtyChange(this);
            });
            input.addEventListener('input', function() {
                handleMaxQtyChange(this);
            });
        });

        // Actualizar contador inicial
        updateSelectedCount();
        updateHiddenField();
    });
    </script>
    <?php
}

// Guardar los datos del meta box - OPTIMIZADO CON MIN/MAX
add_action('save_post', 'save_bc_products_meta_box');

function save_bc_products_meta_box($post_id) {
    // Verificar nonce
    if (!isset($_POST['bc_products_meta_box_nonce']) || !wp_verify_nonce($_POST['bc_products_meta_box_nonce'], 'bc_products_meta_box_nonce')) {
        return;
    }
    
    // Verificar permisos
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Evitar auto-guardado
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Obtener datos JSON optimizados
    $selected_products_json = isset($_POST['selected_products_data']) ? $_POST['selected_products_data'] : '{}';
    
    $selected_products_data = json_decode(stripslashes($selected_products_json), true);
    if (!is_array($selected_products_data)) {
        $selected_products_data = [];
    }
    
    // Extraer solo los IDs de productos seleccionados
    $selected_product_ids = array_keys($selected_products_data);
    
    // Guardar lista de productos seleccionados
    update_post_meta($post_id, '_bc_selected_products', $selected_product_ids);
    
    // Limpiar todos los stocks, precios, min y max anteriores
    $all_products = get_bc_products();
    foreach ($all_products as $product) {
        delete_post_meta($post_id, '_bc_stock_' . $product['id']);
        delete_post_meta($post_id, '_bc_price_' . $product['id']);
        delete_post_meta($post_id, '_bc_min_' . $product['id']);
        delete_post_meta($post_id, '_bc_max_' . $product['id']);
    }
    
    // Guardar stocks, precios, min y max solo para productos seleccionados
    foreach ($selected_products_data as $product_id => $data) {
        $product_id = sanitize_text_field($product_id);
        
        if (isset($data['stock'])) {
            $stock_value = intval($data['stock']);
            update_post_meta($post_id, '_bc_stock_' . $product_id, $stock_value);
        }
        
        if (isset($data['price'])) {
            $price_value = floatval($data['price']);
            update_post_meta($post_id, '_bc_price_' . $product_id, $price_value);
        }

        if (isset($data['min_qty'])) {
            $min_qty_value = intval($data['min_qty']);
            update_post_meta($post_id, '_bc_min_' . $product_id, $min_qty_value);
        }

        if (isset($data['max_qty'])) {
            $max_qty_value = intval($data['max_qty']);
            update_post_meta($post_id, '_bc_max_' . $product_id, $max_qty_value);
        }
    }
}

// Función helper para obtener productos seleccionados de un evento

function get_event_selected_products($event_id) {
    $selected_product_ids = get_post_meta($event_id, '_bc_selected_products', true);
    
    if (empty($selected_product_ids) || !is_array($selected_product_ids)) {
        return [];
    }
    
    $all_products = get_bc_products();
    $selected_products = [];
    
    foreach ($all_products as $product) {
        if (in_array($product['id'], $selected_product_ids)) {
            $selected_products[] = $product;
        }
    }
    
    return $selected_products;
}

// Añadir ID Evento en el formulario como campo hidden

add_filter('wpcf7_form_hidden_fields', function ($hidden_fields) {
    if (is_singular('eventos')) {
        $hidden_fields['evento_id'] = get_the_ID();
    }
    return $hidden_fields;
});

// Recuperar nombre producto a partir de id

function get_bc_product_name_by_id($product_id) {
    $token = get_bc_access_token();
    $company_id = BC_COMPANY_ID;
    $environment = BC_ENVIRONMENT;
    $tenant_id = BC_TENANT_ID;

    $url = "https://api.businesscentral.dynamics.com/v2.0/$tenant_id/$environment/api/v2.0/companies($company_id)/items($product_id)";

    $response = wp_remote_get($url, [
        'headers' => [
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json',
        ],
        'timeout' => 60,
    ]);

    if (is_wp_error($response)) {
        return "Producto ID: {$product_id}";
    }

    $body = json_decode(wp_remote_retrieve_body($response), true);
    return $body['displayName'] ?? "Producto ID: {$product_id}";
}


// Actualizar stock envio mail

add_action('wpcf7_mail_sent', 'bc_update_stock_after_cf7_submission');

function bc_update_stock_after_cf7_submission($contact_form) {
    
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) return;

    $data = $submission->get_posted_data();
    
    if (empty($data['evento_id']) || empty($data['productos_solicitados'])) {
        return; // No hay datos para procesar
    }
    
    $evento_id = intval($data['evento_id']);
    $productos_solicitados = json_decode(stripslashes($data['productos_solicitados']), true);

    if (!is_array($productos_solicitados)) return;

    foreach ($productos_solicitados as $product_id => $cantidad_solicitada) {
        $cantidad_solicitada = intval($cantidad_solicitada);
        $meta_key = '_bc_stock_' . sanitize_text_field($product_id);
        
        $stock_actual = intval(get_post_meta($evento_id, $meta_key, true));
        $nuevo_stock = max(0, $stock_actual - $cantidad_solicitada);
        
        update_post_meta($evento_id, $meta_key, $nuevo_stock);
        
        if ($nuevo_stock == 0) {
			// Recuperar nombre del evento
			$evento_title = get_the_title($evento_id);

			// Recuperar nombre del producto desde BC en tiempo real
			$product_name = get_bc_product_name_by_id($product_id);

			$to = 'jofre.coll@premiumdelevent.com';
			$subject = 'Stock agotado: ' . $product_name;
			$message = '
				<html>
				<head>
					<meta name="viewport" content="width=device-width" />
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
				</head>
				<body>
				<table bgcolor="#fafafa" style="width: 100%; background-color: #fafafa; padding: 20px; font-family: Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6;" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center">
							<table bgcolor="#FFFFFF" style="border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; width: 100%; max-width:600px; margin: 0 auto;" cellspacing="0" cellpadding="0">
								<tr>
									<td style="padding: 20px;">
										<table width="100%" cellspacing="0" cellpadding="0">
											<tr>
												<td align="center" style="padding-bottom: 10px; border-bottom: 1px solid #dddddd;">
													<img src="https://www.premiumdelevent.com/wp-content/uploads/2024/11/logojpeg.png" width="100" height="170" alt="Logo" style="display: block; margin: 0 auto;"/>
												</td>
											</tr>
											<tr>
												<td>
													<h1 style="font-weight: 200; font-size: 24px; margin: 20px 0; color: #333333; text-align: center;">🚨 Stock agotado 🚨</h1>

													<h2 style="font-weight: 400; font-size: 18px; margin: 20px 0; color: #333333;">Producto: <span style="color:#555555;">' . esc_html($product_name) . '</span></h2>

													<h2 style="font-weight: 400; font-size: 18px; margin: 20px 0; color: #333333;">Evento: <span style="color:#555555;">' . esc_html($evento_title) . '</span></h2>

													<p style="margin: 20px 0; font-size: 16px; color: #666666;">Este producto ha alcanzado un nivel de stock <strong>0</strong> tras la última solicitud registrada.</p>

													<p style="text-align: center; padding-top:20px; font-weight: bold; margin-top:30px; color: #666666; border-top:1px solid #dddddd;">PREMIUM DELEVENT</p>

													<table width="100%" align="center" style="margin-top: 20px; text-align: center;">
														<tr>
															<td>
																<a href="https://www.instagram.com/premium_delevent/" style="text-decoration: none;">
																	<img src="https://www.premiumdelevent.com/wp-content/uploads/2024/11/logo_instagram_brown.png" width="30" height="30" alt="Instagram Logo" style="margin: 0 10px;" />
																</a>
																<a href="https://www.linkedin.com/company/premiumdelevent/" style="text-decoration: none;">
																	<img src="https://www.premiumdelevent.com/wp-content/uploads/2024/11/logo_linkedin_brown.png" width="30" height="30" alt="LinkedIn Logo" style="margin: 0 10px;" />
																</a>
																<a href="https://www.premiumdelevent.com/" style="text-decoration: none;">
																	<img src="https://www.premiumdelevent.com/wp-content/uploads/2024/11/logo_web_brown-1.png" width="30" height="30" alt="Website Logo" style="margin: 0 10px;" />
																</a>
															</td>
														</tr>
													</table>

													<br>

													<table width="100%" align="center" style="margin-top: 20px; text-align: center;">
														<tr>
															<td>
																<a href="https://www.premiumdelevent.com/">
																	<img src="https://www.premiumdelevent.com/wp-content/uploads/2024/11/GifLineasTrabajoV5.gif" style="width:100%; max-width:550px; height:auto; display: block;" width="550" alt="Gif de líneas de trabajo">
																</a>
															</td>
														</tr>
													</table>

												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				</body>
				</html>';

			$headers = ['Content-Type: text/html; charset=UTF-8'];

			wp_mail($to, $subject, $message, $headers);
		}
    }
}
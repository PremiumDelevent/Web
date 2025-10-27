<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package wbsw

 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/quicklink/2.3.0/quicklink.umd.js"></script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

	<link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- Google Tag Manager -->

	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

	})(window,document,'script','dataLayer','GTM-NPLMXWF6');</script>

	<!-- End Google Tag Manager -->

    <link rel="stylesheet" href="https://www.premiumdelevent.com/wp-content/themes/wbsw/styles/header.css">


</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->

<noscript>

<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPLMXWF6"

height="0" width="0" style="display:none;visibility:hidden"></iframe>

</noscript>

<!-- End Google Tag Manager (noscript) -->

<style>

    .product-popup-new-display{ display: flex !important; }

    .product-popup-new-opacity{ opacity: 1 !important; }

    .product-popup-new{ justify-content: center; align-items: center; transform: translateY(130px);}

    .product-popup-content-new{ background-color: white; width: calc(100vw - 200px); height: calc(100vh - 150px); position: relative; display: flex; justify-content: space-between; align-items: center; padding: 20px; }

    .product-popup-close-new { position: absolute; top: 10px; right: 15px; font-size: 35px; cursor: pointer; }

    .container-change-img { height: 90%; display: flex; flex-direction: column; align-items: center; justify-content: space-between; gap: 20px; width: 23vw; }

    .img-product, .img-product-irl, .img-3D { width: 100%; height: 33%; display: flex; justify-content: center; align-items: center; padding: 0; }

    .img-product img, .img-product-irl img, .img-3D img { width: 90%; height: 90%; object-fit: contain; cursor: pointer; }

    .container-img-product { width: 95vw; height: 99%; display: flex; justify-content: center; align-items: center; padding: 20px; }

    .container-img-product img{ width: 100%; height: 100%; object-fit: contain; }

    .container_img_product_catalogo img{ width: 80%; height: 80%;  object-fit: contain; }

    .container_img_product_irl img{ width: 100%; height: 100%; object-fit: contain; }

    .container-info-product{ width: 70vw; }

    .container-info-product h1 { --size-factor: (0.00188323 * 100vw); font-size: calc(12 * var(--size-factor)); font-weight: bold; padding-bottom: 20px; }

    .container-info-product p { --size-factor: (0.00188323 * 100vw); font-size: calc(6 * var(--size-factor)); line-height: 2.5; }

    .container-info-product div p { --size-factor: (0.00188323 * 100vw); font-size: calc(6 * var(--size-factor)); line-height: 2.5; }

    .container-info-product div strong { --size-factor: (0.00188323 * 100vw); font-size: calc(6 * var(--size-factor)); line-height: 2.5; }

    .container-info-product strong{ color: black; }

    #product-popup-attr-new { padding-top: 10px; margin-top: 10px !important; }

    .container-info-product .filter-each select{ --size-factor: (0.00188323* 100vw); font-size: calc(6* var(--size-factor)); line-height: 2.5; }

    .contenedor-dimensiones{ display: flex; align-items: center; gap: 10px; }

    .container_img_product_catalogo{ display: flex; justify-content: center; align-items: center; }

    .container_img_product_irl{ display: flex; justify-content: center; align-items: center; }

    @media (max-width: 1120px) {

        .container-change-img { height: 70%; }

    }
    
    @media (max-width: 960px) {

        .product-popup-content-new { flex-direction: column-reverse; padding: 0px; }

        .container-change-img { flex-direction: row; width: auto; height: 12vh; }

        .container-img-product { width: auto; height: 30vh; padding-bottom: 10px; }

        .container_img_product_catalogo { width: auto; height: 30vh; padding-bottom: 10px; }

        .container_img_product_irl { width: auto; height: 30vh; padding-bottom: 10px; }

        .container-info-product { width: auto; padding-top: 50px; }

        .img-product, .img-product-irl, .img-3D { height: 100%; }

        .container_img_product_catalogo img { width: 100%; height: 100%; object-fit: contain; }

    }

    @media (max-width: 650px) {

        .product-popup-content-new { width: calc(100vw - 50px); height: calc(100vh - 200px); }

        .container-info-product h1 { font-size: 15px; }

        .container-info-product p { font-size: 10px; }   

        .container-info-product div p { font-size: 10px; }

        .container-info-product div strong { font-size: 10px; }

        .container-info-product .filter-each select{ font-size: 10px; }
    
    }

</style>

<?php 

$category = get_queried_object();

?>

    <div id="menu-overlay" class="menu-overlay">

        <div id="product-popup-new" class="product-popup-new">

            <div class="product-popup-content-new" id="product-popup-content-new">

                <span id="product-popup-close-new" class="product-popup-close-new">&times;</span>

                <div class="container-change-img">

                </div>

                <div class="container-img-product">

                    <div class="container_img_product_catalogo">

                        <img src="">

                    </div>

                    <div class="container_img_product_irl">

                        <img src="">

                    </div>
                    
                    <div class="sketchfab sketchfab-embed-wrapper" style="height:80%; width: 80%; display: none;">

                        <iframe width="100%" height="100%" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src=""> </iframe> 
                    
                    </div>

                </div>

                <div class="container-info-product">

                </div>

                <div id="product-popup-title"></div>

                <div id="product-popup-desc"></div>

                <div id="product-popup-attr-new"></div>

                <div class="container-img-variations">
                    
                    <div class="container_img">

                        <div class = "changer_img_3d" style = "display: none">

                            <img class = "icon_photo" src="https://www.premiumdelevent.com/wp-content/uploads/2025/01/image-fill.svg" />

                            <img class = "icon_3D" src="https://www.premiumdelevent.com/wp-content/uploads/2025/01/badge-3d.svg" />

                        </div>

                        <img onerror="this.onerror=null; this.src='https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png'" id="product-popup-image" src="https://www.premiumdelevent.com/wp-content/uploads/2023/09/no-image.png" style="display: none">
                        
                        <div class="container3D" style = "display: none;">

                            <div class="sketchfab sketchfab-embed-wrapper" style="height: 200px; width: 200px;">

                                <iframe width="100%" height="100%" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src=""> </iframe> 
                            
                            </div>
                        
                        </div>

                    </div>
                
                </div>

                <iframe width="0" height="0" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="product-popup-video"></iframe>

                <div id="product-popup-gallery-list"></div>

            </div>

        </div>

    </div>

<?php wp_body_open(); ?>

<div id="page" class="site">

    <header id="masthead" class="site-header">

        <div class="container-4">

            <a href="<?php echo home_url(); ?>">

                <img src="<?php the_field("logo_color", 14); ?>">

            </a>

            <div class="nav-options">

                <?php

                wp_nav_menu(

                    array(

                        'menu_id' => 'menu-nav-1',

                        'theme_location' => 'menu-nav-1',

                        'container'       => 'false',

                    )

                );

                ?>

                <div class="language">

                    <?php echo do_shortcode('[wpml_language_switcher]'); ?>

                </div>

                <div class="search-icon" onclick="searchDialog()">

                    <img src="https://www.premiumdelevent.com/wp-content/uploads/2023/12/icon-search.svg">

                </div>

            </div>

            <div id="nav-icon3" onclick="menudropper()">

                <span></span>

                <span></span>

                <span></span>

                <span></span>

            </div>

        </div>

    </header>

    <div class="search-box" id="search-box">

        <div class="container-3">

            <div class="search-wrap" id="search-wrap">

                <?php get_search_form(); ?>

            </div>

        </div>

    </div>

    <div class="menu-responsive" id="menu-responsive">

        <?php

        wp_nav_menu(

            array(

                'menu_id' => 'menu-nav-2',

                'theme_location' => 'menu-nav-2',

                'container'       => 'false',

            )

        );

        ?>

        <div class="language">

            <?php echo do_shortcode('[wpml_language_switcher]'); ?>

        </div>

    </div>
    
    <!--<script src="https://www.premiumdelevent.com/wp-content/themes/wbsw/js/header.js"></script>-->

    <style>

        .container3D{ display: none; justify-content: center; align-items: center;}

        .changer_img_3d { display: flex; justify-content: center; align-items: center; gap: 10px; height: 100px; }

        .changer_img_3d img { max-width: 50px;  max-height: 50px; width: 25px; cursor: pointer; }

        #menu-overlay { top: 0px; }

        .product-popup{ top: 8%; max-height: 700px;}

        .product-popup-content{ width: calc(100% - 300px); height: calc(100% - 150px);}

        #product-popup-image{ max-width: none; max-height: none; width: 370px; height: 300px;}

        .container-img-variations { display: flex; align-items: flex-start; gap: 100px; padding-top: 35px;}

        .variations-wrap { height: auto; transform: translateY(20px); }

        .children-wrap { position: static; transform: translateX(-20%); display: block; padding: 0px; background-color: transparent; overflow-y: visible; overflow-x: visible; }

        .product-popup-video { margin: 0 auto; }

        @media  (max-width: 960px) { .product-popup{ max-height: 600px;} #product-popup-image{ max-width: 300px; max-height: 300px; width: 200px; height: 200px; }}

        @media  (max-width: 800px) { .product-popup-content{ width: calc(100% - 100px); } }

        @media  (max-width: 600px) { .container-img-variations { display: block; padding-top: 0px;} #product-popup-image{ width: 300px; height: 300px;} .changer_img_3d {height: 100px;}}

        @media  (max-width: 425px) { #product-popup-image{ max-width: 200px; } }

    </style>

    <script>

        var submenu = document.querySelector(".wpml-ls-sub-menu");

        submenu.style.height = "110px";

        var idiomaActual = document.querySelector(".wpml-ls-native").textContent;

        if(idiomaActual == "ES"){ var tamanotext = "Tamaño"; }

        if(idiomaActual == "EN"){ var tamanotext = "Size"; }

        if(idiomaActual == "CAT"){ var tamanotext = "Mida"; }

        var variationtext = "<?php _e('Variaciones', 'ws'); ?>";

        // Auto 100% height

        var temp = null;

        document.addEventListener("DOMContentLoaded", function(event) {

            temp = window.innerHeight;

            if (document.querySelector(".introduccion")) { 
                
                document.querySelector(".introduccion").style.height = temp + "px";
                
                document.querySelector(".introduccion").style.minHeight = temp + "px";
            }

        });

        // Menu Mobil dropper

        document.addEventListener("DOMContentLoaded", function(event) {

            var submenus = document.querySelectorAll(".menu-responsive ul li.menu-item-has-children")

            for (let i = 0; i < submenus.length; i++) {

                submenus[i].addEventListener("click", function() {

                    submenus[i].querySelector("ul.sub-menu").classList.toggle("active")

                })

            }

        });

        // Language color

        var languageArrow = document.querySelector('.js-wpml-ls-item-toggle.wpml-ls-item-toggle');

        var languageText = document.querySelector('.wpml-ls-native');

        var texttest = document.querySelector('.js-wpml-ls-item-toggle wpml-ls-item-toggle');

        $(document).scroll(function() {

                if ($(window).scrollTop() <= 200) { languageArrow.style.color = 'white'; languageText.style.color = 'white'; } 
                
                else { languageArrow.style.color = '#a68067'; languageText.style.color = '#a68067'; }

        });

        // Menu not on top

        document.addEventListener("DOMContentLoaded", function(event) {

            var menu = document.getElementById("masthead");
            
            var queHacemosLinkNav1 = Array.from(document.querySelectorAll('#menu-nav-1 a')).find(el => el.textContent.includes("Nuestros servicios") || el.textContent.includes("Our services") || el.textContent.includes("Els nostres serveis") || el.textContent.includes("Nossos serviços"));
            
            var actualidadLinkNav1 = Array.from(document.querySelectorAll('#menu-nav-1 a')).find(el => el.textContent.includes("Actualidad") || el.textContent.includes("Updates") || el.textContent.includes("Actualitat") || el.textContent.includes("Atualidade"));
            
            var linkQueHacemos = queHacemosLinkNav1.href;
            
            var linkActualidad = actualidadLinkNav1.href;
            
            $(document).scroll(function() {

                if ($(window).scrollTop() <= 200) {

                    menu.classList.remove("menu-status");

                    queHacemosLinkNav1.setAttribute('href', linkQueHacemos);

                    actualidadLinkNav1.setAttribute('href', linkActualidad);

                } else {

                    menu.classList.add("menu-status");

                    queHacemosLinkNav1.setAttribute('href', '#');

                    actualidadLinkNav1.setAttribute('href', '#');

                }

            });

        });

        // Menu toggle

        function menudropper() {

            var menuOverlay = document.getElementById("menu-overlay");
            
            var masthead = document.getElementById("masthead");

            var menuResponsive = document.getElementById("menu-responsive");

            var menuhaschildren = document.querySelectorAll(".menu-item-has-children");

            menuhaschildren.forEach(function(menuItem) {

                var link = menuItem.querySelector('a');

                if (link) {

                    link.setAttribute('href', '#');

                }

            });

            var queHacemosLink = document.querySelector('#menu-nav-2 .menu-item-766 > a');
            
            var actualidadLink = document.querySelector('#menu-nav-2 .menu-item-760 > a');

            var navIcon = document.getElementById("nav-icon3");

            var body = document.body;

            var introElements = document.querySelector('.introduccion');

            var categoriesElements = document.querySelector('.categories');

            var exitosElements = document.querySelector('.exito');

            function toggleBehindOverlay(add) {

                if (add) {

                    introElements.classList.add('behind-overlay');

                    categoriesElements.classList.add('behind-overlay');

                    exitosElements.classList.add('behind-overlay');

                } else {

                    introElements.classList.remove('behind-overlay');

                    categoriesElements.classList.remove('behind-overlay');

                    exitosElements.classList.remove('behind-overlay');

                }

            }

            body.classList.toggle("lock");

            navIcon.classList.toggle("open");

            menuResponsive.classList.toggle("open");

            if (menuOverlay.classList.contains("menu-overlay-opacity")) {

                masthead.classList.remove("menu-status");

                menuOverlay.classList.toggle("menu-overlay-opacity");

                setTimeout(function() {

                    menuOverlay.classList.toggle("menu-overlay-display");

                    body.classList.remove("no-scroll"); // Allow scroll again

                    toggleBehindOverlay(false); // Remove behind-overlay class

                }, 250);

            } else {
                
                masthead.classList.add("menu-status");

                menuOverlay.classList.toggle("menu-overlay-display");

                setTimeout(function() {

                    menuOverlay.classList.toggle("menu-overlay-opacity");

                    body.classList.add("no-scroll"); // Disable scroll

                    toggleBehindOverlay(true); // Add behind-overlay class

                }, 250);
            }

            // Desactivar enlaces en formato móvil

            queHacemosLink.setAttribute('href', '#');

            actualidadLink.setAttribute('href', '#'); // Desactivar enlace Actualidad

            // Desactivar todos los enlaces de los elementos con submenús
            
            menuResponsive.classList.toggle("open");
        }

        // Colores links linias de negocio

        document.addEventListener("DOMContentLoaded", function() {

            const menuItems1 = document.querySelectorAll('#menu-nav-1 .menu-item a');

            const menuItems2 = document.querySelectorAll('#menu-nav-2 .menu-item a');

            function addColorClass(menuItems) {

                menuItems.forEach(item => {

                    if (item.textContent.includes('Eventure')) { item.parentElement.classList.add('color-red'); } 
                    
                    else if (item.textContent.includes('Koverall')) { item.parentElement.classList.add('color-yellow'); } 
                    
                    else if (item.textContent.includes('Ephymere')) { item.parentElement.classList.add('color-blue'); } 
                    
                    else if (item.textContent.includes('Ecosphere')) { item.parentElement.classList.add('color-green'); } 
                    
                    else if (item.textContent.includes('Once&Go')) { item.parentElement.classList.add('color-orange'); }

                });

            }

            addColorClass(menuItems1);

            addColorClass(menuItems2);

        });

        // Search Dialog

        function searchDialog(isMobile) {

            if (isMobile) {

                menudropper();

            }

            var menuOverlay = document.getElementById("menu-overlay");

            var masthead = document.getElementById("masthead");

            var searchBox = document.getElementById("search-box");

            var body = document.body;

            var introElements = document.querySelector('.introduccion');

            var categoriesElements = document.querySelector('.categories');

            var exitosElements = document.querySelector('.exito');

            var productPopup = document.querySelector('.product-popup-new');

            productPopup.style.display = "none";

            function toggleBehindOverlay(add) {

                if (add) {

                    introElements.classList.add('behind-overlay');

                    categoriesElements.classList.add('behind-overlay');

                    exitosElements.classList.add('behind-overlay');

                } else {

                    introElements.classList.remove('behind-overlay');

                    categoriesElements.classList.remove('behind-overlay');

                    exitosElements.classList.remove('behind-overlay');

                }

            }

            if (menuOverlay.classList.contains("menu-overlay-opacity")) {

                menuOverlay.removeAttribute("href");

                menuOverlay.setAttribute("onclick", "");

                masthead.classList.remove("menu-status");

                menuOverlay.classList.toggle("menu-overlay-opacity");

                setTimeout(function() {

                    menuOverlay.classList.toggle("menu-overlay-display");

                    body.classList.remove("no-scroll"); 

                    toggleBehindOverlay(false); 

                }, 250);

            } else {

                menuOverlay.setAttribute("onclick", "searchDialog()");

                masthead.classList.add("menu-status");

                menuOverlay.classList.toggle("menu-overlay-display");

                setTimeout(function() {

                    menuOverlay.classList.toggle("menu-overlay-opacity");

                    body.classList.add("no-scroll");

                    toggleBehindOverlay(true); 

                }, 250);

            }

            searchBox.classList.toggle("open");
        }

        // Variable to disable click events temporarily

        let disableClose = false;

        // Product Popup

        function productPopup(dom, close = false) {

            if (close) {               
                
                if (document.getElementById("product-popup-new") != null){

                    if(document.getElementById("product-popup-new").classList.contains("product-popup-new-display")){

                        document.body.classList.remove("lock2");

                        document.getElementById("menu-overlay").classList.toggle("menu-overlay-opacity");
                        
                        document.getElementById("product-popup-new").classList.toggle("product-popup-new-opacity");

                        setTimeout(function() {

                            document.getElementById("menu-overlay").classList.toggle("menu-overlay-display");

                            document.getElementById("product-popup-new").classList.toggle("product-popup-new-display");

                        }, 250);
                        
                        document.getElementById("product-popup-title").style.display = "flex";

                        document.getElementById("product-popup-attr-new").style.display = "flex";

                        document.getElementById("product-popup-desc").style.display = "flex";

                        document.getElementById("product-popup-gallery-list").style.display = "flex";

                        document.querySelector(".container-img-variations").style.display = "flex";

                        document.querySelector(".product-popup-video").style.display = "flex";

                    }    

                }

            } else {

                document.body.classList.add("lock2");

                document.getElementById("menu-overlay").classList.toggle("menu-overlay-display");

                document.getElementById("product-popup-new").classList.toggle("product-popup-new-display");

                document.querySelector(".container-img-product img").style.display = "flex";

                document.querySelector(".sketchfab").style.display = "none";

                document.querySelector(".container_img_product_irl img").style.display = "none";

                document.getElementById("product-popup-title").style.display = "none";

                document.getElementById("product-popup-attr-new").style.display = "none";

                document.getElementById("product-popup-desc").style.display = "none";

                document.getElementById("product-popup-gallery-list").style.display = "none";

                document.querySelector(".container-img-variations").style.display = "none";

                document.querySelector(".product-popup-video").style.display = "none";

                setTimeout(function() {

                    document.getElementById("menu-overlay").classList.toggle("menu-overlay-opacity");

                    document.getElementById("product-popup-new").classList.toggle("product-popup-new-opacity");

                }, 250);
                
                var attr_container_img = "";

                if(dom.getAttribute("imagen") != ""){

                    attr_container_img += "<div class='img-product'>";

                    attr_container_img += "<img id = 'img-product' src='";

                    attr_container_img += dom.getAttribute("imagen");

                    attr_container_img += "' onclick = updateProduct(this)> </div>";

                }

                if(dom.getAttribute("img_en_evento") != ""){

                    attr_container_img += "<div class='img-product-irl'>";

                    attr_container_img += "<img id = 'img-product-irl' src='";

                    attr_container_img += dom.getAttribute("img_en_evento");

                    attr_container_img += "' onclick = updateProduct(this)> </div>";

                }

                function ajustarAltura() {

                    let container = document.querySelector(".container-change-img");

                    if (!container) return;

                    if (dom.getAttribute("modelo3D") != "") {

                        container.style.height = window.innerWidth > 960 ? "90%" : "12vh";

                    } else {
                        
                        container.style.height = window.innerWidth > 960 ? "auto" : "12vh";

                    }
                }

                window.addEventListener("resize", ajustarAltura);

                ajustarAltura();

                if (dom.getAttribute("modelo3D") != "") {

                    attr_container_img += "<div class='img-3D'>";

                    attr_container_img += "<img id='img-3D' src='https://www.premiumdelevent.com/wp-content/uploads/2025/02/logo_modelo_3D.svg' onclick='updateProduct(this)'></div>";
                
                }

                document.querySelector(".container-change-img").innerHTML = attr_container_img;

                document.querySelector(".container-img-product img").setAttribute("src", dom.getAttribute("imagen"));

                document.querySelector(".container-img-product iframe").setAttribute("src", dom.getAttribute("modelo3D"));
                
                var attr_info_product = "";

                if((dom.getAttribute("nombre") != "") && (dom.getAttribute("nombre") != ",")){
                    
                    attr_info_product += "<h1>";

                    attr_info_product += dom.getAttribute("nombre");

                    attr_info_product += "</h1>";

                }

                if((dom.getAttribute("tipo") != "") && (dom.getAttribute("tipo") != ",")){

                    attr_info_product += "<p> <strong> <?php _e('Product type: ', 'ws'); ?> </strong>";

                    attr_info_product += dom.getAttribute("tipo");

                    attr_info_product += "</p>";

                }

                if((dom.getAttribute("material") != "") && (dom.getAttribute("material") != ",")){

                    attr_info_product += "<p> <strong> Material: </strong>";

                    attr_info_product += dom.getAttribute("material");

                    attr_info_product += "</p>";

                }

                if(dom.getAttribute("product_type") == "simple"){

                    if((dom.getAttribute("color") != "") && (dom.getAttribute("color") != ",")){

                        attr_info_product += "<p> <strong> Color: </strong>";

                        attr_info_product += dom.getAttribute("color");

                        attr_info_product += "</p>";

                    }

                }

                if(dom.getAttribute("product_type") == "simple"){

                    if(dom.getAttribute("tamano")){

                        attr_info_product += "<p> <strong> Dimensiones: </strong>";

                        attr_info_product += dom.getAttribute("tamano");

                        attr_info_product += "</p>";

                    }

                }

                if (dom.getAttribute("variaciones_temp")) {

                    attr_info_product += dom.getAttribute("variaciones_temp");

                }
                
                if(dom.getAttribute("product_type") == "simple"){

                    if((dom.getAttribute("ref") != "") && (dom.getAttribute("ref") != ",")){

                        attr_info_product += "<div style = 'display: flex; align-items: center; gap: 10px;'> <strong> <?php _e('Reference: ', 'ws'); ?> </strong> </p> <p class = 'ref'>";
                        
                        attr_info_product += dom.getAttribute("ref");

                        attr_info_product += "</div> </p>";

                    }
                }

                else {

                    const variaciones_temp_html = dom.getAttribute("variaciones_temp");

                    const tempContainer = document.createElement('div');
                    tempContainer.innerHTML = variaciones_temp_html;

                    const select = tempContainer.querySelector('.dim_sel');

                    if (select && select.options.length > 0) {
                        const firstOption = select.options[0];
                        const sku = firstOption.getAttribute('sku');

                        attr_info_product += "<div style='display: flex; align-items: center; gap: 10px;'> <strong> <?php _e('Reference: ', 'ws'); ?> </strong> <p class='sku'>";
                        attr_info_product += sku;
                        attr_info_product += "</p></div>";
                    }

                }
                

                document.querySelector(".container-info-product").innerHTML = attr_info_product;

                const paragraphs = document.querySelectorAll('.container-info-product p');

                paragraphs.forEach(p => {

                    p.innerHTML = p.innerHTML.replace(/,/g, '');
                    
                    p.innerHTML = p.innerHTML.replace(/-/g, ' ');

                });

            }

            if (window.innerWidth > 600) {

                var product_type = dom.getAttribute("product_type");

                var container_img_variations = document.querySelector(".container-img-variations");

                if (product_type == "variable") {

                    container_img_variations.style.display = "flex";

                } else {

                    container_img_variations.style.display = "block";

                }

                //document.querySelector(".sketchfab").style.width = "370px";

                //document.querySelector(".sketchfab").style.height = "300px";
                
            }

            else{

                //document.querySelector(".sketchfab").style.width = "300px";

                //document.querySelector(".sketchfab").style.height = "300px";

            }

            function moveVariationsToWrap() {

                const variationsWrap = document.querySelector(".variations-wrap");
                
                const childrenWrap = variationsWrap.querySelector(".children-wrap");

                // Recupera todos los div dentro de .children-wrap

                const childrenDivs = childrenWrap.querySelectorAll(".children-variation");

                // Itera sobre los divs encontrados

                childrenDivs.forEach(child => { variationsWrap.appendChild(child); });

                // Elimina el contenedor .children-wrap si ya no lo necesitas

                variationsWrap.firstElementChild.remove();

                childrenWrap.remove();

            }

            moveVariationsToWrap();

            

        }

        /* Close popup */

        if(document.getElementById('product-popup-close') != null){
            
            document.getElementById('product-popup-close').addEventListener('click', function() {

                productPopup(null, true);

            });
        }

        if(document.getElementById('product-popup-close-new') != null){
            
            document.getElementById('product-popup-close-new').addEventListener('click', function() {

                productPopup(null, true);

            });
        }

        document.getElementById('menu-overlay').addEventListener('click', function() {

            productPopup(null, true);

        });

        /* Prevent popup content clicks from closing popup */

        if(document.querySelector('.product-popup-content') != null){

            document.querySelector('.product-popup-content').addEventListener('click', function(event) {

                event.stopPropagation();

            }); 

        }

        /* Prevent popup content clicks from closing popup */

        if(document.querySelector('.product-popup-content-new') != null){

            document.querySelector('.product-popup-content-new').addEventListener('click', function(event) {

                event.stopPropagation();

            }); 

        }

        function updateProduct (dom){

            if(dom.id == "img-product"){

                document.querySelector(".container_img_product_catalogo img").style.display = "flex";

                document.querySelector(".sketchfab").style.display = "none";

                document.querySelector(".container_img_product_irl img").style.display = "none";

                document.querySelector(".container_img_product_catalogo img").setAttribute("src", dom.src);

                // Seleccionar siempre la primera opción del select
                let select_dim = document.querySelector(".contenedor-dimensiones .dim_sel");

                if (select_dim) {

                    select_dim.selectedIndex = 0; // Establece la primera opción como seleccionada

                    updateProductVariations(select_dim); // Llama a la función para actualizar la imagen

                }

                let select_color = document.querySelector(".contenedor-dimensiones .color_sel");

                if (select_color) {

                    select_color.selectedIndex = 0; // Establece la primera opción como seleccionada

                    updateProductVariations(select_color); // Llama a la función para actualizar la imagen

                }

            }

            else if(dom.id == "img-product-irl"){

                document.querySelector(".container_img_product_irl img").style.display = "flex";

                document.querySelector(".sketchfab").style.display = "none";

                document.querySelector(".container_img_product_catalogo img").style.display = "none";

                document.querySelector(".container_img_product_irl img").setAttribute("src", dom.src);

                // Seleccionar siempre la primera opción del select
                
                let select_dim = document.querySelector(".contenedor-dimensiones .dim_sel");

                if (select_dim) {

                    select_dim.selectedIndex = 0; // Establece la primera opción como seleccionada

                    updateProductVariations(select_dim); // Llama a la función para actualizar la imagen

                }

                let select_color = document.querySelector(".contenedor-dimensiones .color_sel");

                if (select_color) {

                    select_color.selectedIndex = 0; // Establece la primera opción como seleccionada

                    updateProductVariations(select_color); // Llama a la función para actualizar la imagen

                }

            }

            else{

                document.querySelector(".container_img_product_irl img").style.display = "none";

                document.querySelector(".container_img_product_catalogo img").style.display = "none";

                document.querySelector(".sketchfab").style.display = "flex";
                
                // Seleccionar siempre la primera opción del select
                let select_dim = document.querySelector(".contenedor-dimensiones .dim_sel");

                if (select_dim) {

                    select_dim.selectedIndex = 0; // Establece la primera opción como seleccionada

                }

                let select_color = document.querySelector(".contenedor-dimensiones .color_sel");

                if (select_color) {

                    select_color.selectedIndex = 0; // Establece la primera opción como seleccionada

                }

            }

        }

        function updateProductVariations(dom) {

            let selectedOption = dom.options[dom.selectedIndex]; // Obtener la opción seleccionada
            
            document.querySelector(".container_img_product_catalogo img").setAttribute("src", selectedOption.getAttribute("image"));

            document.querySelector(".container_img_product_irl img").setAttribute("src", selectedOption.getAttribute("imagen_irl_variation"));

            document.querySelector(".container-info-product .sku").innerHTML = selectedOption.getAttribute("sku");

        }



        function updateProductPopupImage(dom, children = false, event) {

            if (!e) var e = window.event;

            e.cancelBubble = true;

            if (e.stopPropagation) e.stopPropagation();

            if (document.querySelector(".variations-wrap > div:not(.separator).active")) {

                document.querySelector(".variations-wrap > div:not(.separator).active").classList.remove("active")

            }

            if (document.querySelector(".children-variation.active")) {

                document.querySelector(".children-variation.active").classList.remove("active")

            }

            var childom = null;

            var ider = null;

            if (!children) { 

                var color = dom.getAttribute("color")

                childom = document.querySelectorAll(".variations-wrap > div[color='" + color + "'][children='has']")

                var deleting = document.querySelectorAll(".children-wrap")

                for (let i = 0; i < deleting.length; i++) {

                    deleting[i].remove();

                }

            }

            if (childom !== null && childom.length !== 0) {

                var htmltemp = "<div class='children-wrap'>";

                if (!dom.getAttribute("material")) {

                    htmltemp += "<div ider='tag-0' class='children-variation' sku='" + dom.getAttribute("sku") + "' tamano='" + dom.getAttribute("tamano") + "' image='" + dom.getAttribute("image") + "' onclick='updateProductPopupImage(this, true, event)'>" + dom.getAttribute("tamano") + "</div>";

                } else {

                    htmltemp += "<div ider='tag-0' class='children-variation' sku='" + dom.getAttribute("sku") + "' tamano='" + dom.getAttribute("tamano") + "' image='" + dom.getAttribute("image") + "' onclick='updateProductPopupImage(this, true, event)'>" + dom.getAttribute("material") + "</div>";

                }

                for (let i = 0; i < childom.length; i++) {

                    if (!childom[i].getAttribute("material")) {

                        htmltemp += "<div ider='tag-" + (i+1) + "' class='children-variation' sku='" + childom[i].getAttribute("sku") + "' tamano='" + childom[i].getAttribute("tamano") + "' image='" + childom[i].getAttribute("image") + "' onclick='updateProductPopupImage(this, true, event)'>" + childom[i].getAttribute("tamano") + "</div>";

                    } else {

                        htmltemp += "<div ider='tag-" + (i+1) + "' class='children-variation' sku='" + childom[i].getAttribute("sku") + "' tamano='" + childom[i].getAttribute("tamano") + "' image='" + childom[i].getAttribute("image") + "' onclick='updateProductPopupImage(this, true, event)'>" + childom[i].getAttribute("material") + "</div>";

                    }

                }

                htmltemp += "</div>";

                dom.insertAdjacentHTML("beforeend", htmltemp);

            } else {

                document.getElementById("product-popup-image").setAttribute("src", dom.getAttribute("image"));
                
                document.querySelector(".container3D iframe").setAttribute("src", dom.getAttribute("modelo3D"));

                ider = dom.getAttribute("ider")

            }

            if (children) {

                document.querySelector(".children-variation[ider='" + ider + "']").classList.add("active")

                if (dom.getAttribute("sku") && dom.getAttribute("sku") != "") {

                    document.getElementById("ref-popup").textContent = "REF: " + dom.getAttribute("sku")

                }

                setTimeout(function(){  

                    if (dom.getAttribute("tamano") && dom.getAttribute("tamano") != "" && dom.getAttribute("tamano") != ",") {

                        document.getElementById("tamano-popup").textContent = tamanotext + ": " + dom.getAttribute("tamano")

                    }

                }, 10);

            } else {

                if (dom.getAttribute("sku") && dom.getAttribute("sku") != "") {

                    document.getElementById("ref-popup").textContent = "REF: " + dom.getAttribute("sku")

                }

                if (dom.getAttribute("tamano") && dom.getAttribute("tamano") != "" && dom.getAttribute("tamano") != ",") {

                    document.getElementById("tamano-popup").textContent = tamanotext+ ": " + dom.getAttribute("tamano")

                }

            }

        }

        // Filtrar posts Blog y Exito

        document.addEventListener("DOMContentLoaded", function(event) { 

            if (document.querySelector("body:not(.search-no-results) .no-results.not-found")) {

                document.querySelector("body:not(.search-no-results) .no-results.not-found h1").textContent = "No hay más entradas"

            }

        });

        function filterPosts() {

            var url = window.location.href.split('?')[0];

            var category = document.getElementById("category")

            var years = document.getElementById("years")



            if (category.value != "" && category.value != null && years.value != "" && years.value != null) {

                if(years.value != "all"){

                    url += "?"

                    url += "cat=" + category.value

                    url += "&y=" + years.value

                }
                
                window.location.href = url;

            }

        }

        // Transitions

        // Slide up Transition

        document.addEventListener("DOMContentLoaded", function(event) { 

            const targets = document.querySelectorAll('.io-slideup');

                const lazyLoad = target => {

                const io = new IntersectionObserver((entries, observer) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            const item = entry.target;

                            setTimeout(() => {

                                item.classList.add("io-slideup-active");

                                observer.disconnect();

                            }, 400)

                        }

                    });

                });

                io.observe(target);

            };

            targets.forEach(lazyLoad);

        });

        // Search traduction

        document.addEventListener("DOMContentLoaded", function(event) { 

            if (document.body.classList.contains('search')) {

                if (document.documentElement.lang == "en-US") {

                    document.querySelector(".no-results.not-found .page-header p").textContent = "No products found";

                }

            }

        });

        document.addEventListener('click', function(event) {

            var popup_cat = document.getElementById('popmake-13233'); // El contenedor del popup en catalán

            var popup_en = document.getElementById('popmake-13230'); // El contenedor del popup en inglés

            var overlay = document.querySelector('.pum-overlay'); // El overlay fuera del popup

            if (popup_en && !popup_en.contains(event.target)) {

                PUM.close(13230); // Cierra el popup en inglés

            }

            if (popup_cat && !popup_cat.contains(event.target)) {

                PUM.close(13233); // Cierra el popup en catalán

            }
            
        });

        document.addEventListener('DOMContentLoaded', () => {

            const headerListItems = document.querySelectorAll('header li');

            headerListItems.forEach(item => { item.style.setProperty('font-size', '6px', 'important'); });

        });

        document.addEventListener("DOMContentLoaded", function () {

            document.querySelector(".container3D").style.display = "none";

            var icon_3D = document.querySelector(".icon_3D");

            var icon_photo = document.querySelector(".icon_photo");

            var badge3D = "https://www.premiumdelevent.com/wp-content/uploads/2025/01/badge-3d.svg";

            var badge3DFill = "https://www.premiumdelevent.com/wp-content/uploads/2025/01/badge-3d-fill.svg";

            var cardImage = "https://www.premiumdelevent.com/wp-content/uploads/2025/01/card-image.svg";

            var imageFill = "https://www.premiumdelevent.com/wp-content/uploads/2025/01/image-fill.svg";

            var model3d_charged = false;

            icon_3D.onclick = function () {

                if (icon_3D.src.endsWith("badge-3d.svg")) {

                    icon_3D.src = badge3DFill; 

                    icon_photo.src = cardImage; 

                    document.querySelector(".container3D").style.display = "flex";

                    document.getElementById("product-popup-image").style.display = "none";

                }
                
                if(!model3d_charged){

                    const modelIframe = document.querySelector(".sketchfab-embed-wrapper iframe");

                    modelIframe.src = modelIframe.src + "&autostart=1";

                    model3d_charged = true;
                }

            };

            icon_photo.onclick = function () {

                if (icon_photo.src.endsWith("card-image.svg")) {

                    icon_photo.src = imageFill; 

                    icon_3D.src = badge3D;

                    document.querySelector(".container3D").style.display = "none";

                    document.getElementById("product-popup-image").style.display = "block";

                }

            };

        });

    </script>
var submenu = document.querySelector(".wpml-ls-sub-menu");

        submenu.style.height = "90px";

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
            
            var queHacemosLinkNav1 = Array.from(document.querySelectorAll('#menu-nav-1 a')).find(el => el.textContent.includes("Nuestros productos") || el.textContent.includes("Our products") || el.textContent.includes("Els nostres productes"));
            
            var actualidadLinkNav1 = Array.from(document.querySelectorAll('#menu-nav-1 a')).find(el => el.textContent.includes("Actualidad") || el.textContent.includes("Updates") || el.textContent.includes("Actualitat"));
            
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

        // Diccionario de traducción

        const translations = {
                        
                        "MESA": "TABLE",

                        "MANTEL": "TABLECLOTH",

                        "MOSTRADOR": "COUNTER",

                        "MUEBLE AUXILIAR": "AUXILIARY FURNITURE",

                        "PERCHERO": "COAT RACK",

                        "PIZARRA": "BOARD",

                        "PORTAFOLLETO": "LEAFLET HOLDER",

                        "PORTAPAPEL": "LEAFLET HOLDER",

                        "PEANA": "BASE",

                        "SILLA": "CHAIR",

                        "SILLON": "ARMCHAIR",

                        "TABURETE": "STOOL",

                        "TABURETES": "STOOLS",

                        "SILLAS": "CHAIRS",

                        "TAQUILLA": "LOCKER",

                        "VITRINA": "DISPLAY CABINET",

                        "ZAPATERO": "SHOERACK",

                        "CONJUNTO": "SET",

                        "LAMPARA": "LAMP",

                        "MAMPARA": "SCREEN",

                        "MACETERO": "FLOWERPOT STAND",

                        "CON ENCHUFES": "WITH PLUGS",

                        "DESPACHO": "OFFICE",

                        "CON BRAZOS": "WITH ARMS",

                        "SOMBRILLA": "PARASOL",

                        "CORDON": "CORD",

                        "ESTANTERIA": "SHELVES",

                        "INCLINADA": "INCLINED",

                        "DISPENSADOR GEL DE MANOS": "HAND GEL DISPENSER",

                        "ESPEJO": "MIRROR",

                        "CAMERINO": "DRESSING ROOM",

                        "COLGADOR": "HOOK",

                        "BURRO": "HOOK",

                        "BIOMBO": "SCREEN",

                        "BARRA": "COUNTER",

                        "ATRIL": "LECTERN",

                        "COJIN": "PILLOW",

                        "BANCO": "BENCH",

                        "ALFOMBRA": "RUG",

                        "GRUESA": "THICK",

                        "FINA": "THIN",

                        "MICROONDAS": "MICROWAVE",

                        "FRIGORÍFICO": "FRIDGE",

                        "FRIGORIFICO": "FRIDGE",

                        "CUBO BASURA": "TRASH CAN",

                        "CUBO": "TRASH",

                        "PAPELERA": "TRASH",

                        "CENICERO": "ASHTRAY",

                        "ENCHUFE": "PLUG",

                        "ALTURAS": "HEIGHT",

                        "MADERA": "WOOD",

                        "CREMA": "CREAM",

                        "CRISTAL": "CRYSTAL",

                        "GRIS": "GREY",

                        "NEGRO": "BLACK",

                        "NEGRA": "BLACK",

                        "BLANCO": "WHITE",

                        "ROJO": "RED",

                        "DORADO": "GOLDEN",

                        "CROMADO": "CHROME",

                        "CROMO": "CHROME",

                        "AMARILLO": "YELLOW",

                        "AZUL": "BLUE",

                        "NARANJA": "ORANGE",

                        "VERDE": "GREEN",

                        "LILA": "PURPLE",

                        "ROSA": "PINK",

                        "HIERBA": "GRASS",

                        "VERDE PASTEL": "PASTEL GREEN",

                        "TRANSPARENTE": "TRANSPARENT",

                        "MARRÓN": "BROWN",

                        "CLARO": "LIGHT",

                        "ORO": "GOLD",

                        "Disponible en varias medidas": "Available in various sizes",

                        "Personalizable": "Customizable"

        };

        // Product Popup

        function productPopup(dom, close = false) {

            if (close) {

                if (document.getElementById("product-popup").classList.contains("product-popup-display")) {

                    document.body.classList.remove("lock2");

                    document.getElementById("product-popup-gallery-list").innerHTML = "";

                    document.getElementById("menu-overlay").classList.toggle("menu-overlay-opacity");

                    document.getElementById("product-popup").classList.toggle("product-popup-opacity");

                    document.querySelector(".container3D").style.display = "none";
                    
                    document.querySelector(".icon_3D").src = "https://www.premiumdelevent.com/wp-content/uploads/2025/01/badge-3d.svg";

                    document.querySelector(".icon_photo").src = "https://www.premiumdelevent.com/wp-content/uploads/2025/01/image-fill.svg";

                    setTimeout(function() {

                        document.getElementById("menu-overlay").classList.toggle("menu-overlay-display");

                        document.getElementById("product-popup").classList.toggle("product-popup-display");

                    }, 250);

                    document.querySelector(".product-popup-video").src = "";

                    var containerAttr = document.getElementById('product-popup-attr');

                    var variationsElement = document.querySelector('.variations'); 
                        
                    if (containerAttr && variationsElement) { containerAttr.appendChild(variationsElement); }

                }

            } else {

                console.log("PROBA HEADER.JS");

                document.body.classList.add("lock2");

                var attr_html = "";

                if (dom.getAttribute("tamano") && dom.getAttribute("tamano") != "," && dom.getAttribute("tamano") != "") {

                    attr_html += "<p id='tamano-popup'></p>";

                }

                attr_html += "<span id='ref-popup'></span><br>";

                if (dom.getAttribute("variations")) {

                    attr_html += "<div class='variations'>";

                    attr_html += dom.getAttribute("variations");

                    attr_html += "</div>";

                }

                var images = dom.getAttribute("gallery").split(',');

                for (let i = 0; i < images.length; i++) {

                    if (images[i] != null && images[i] != "") {

                        document.getElementById("product-popup-gallery-list").insertAdjacentHTML("beforeend", "<img src=" + images[i] + ">");

                    }

                }

                document.getElementById("product-popup-image").setAttribute("src", dom.getAttribute("imagen"));

                document.getElementById("product-popup-title").textContent = dom.getAttribute("nombre");

                document.getElementById("product-popup-desc").textContent = dom.getAttribute("desc");

                document.getElementById("product-popup-attr").innerHTML = attr_html;

                document.getElementById("menu-overlay").classList.toggle("menu-overlay-display");

                document.getElementById("product-popup").classList.toggle("product-popup-display");

                setTimeout(function() {

                    document.getElementById("menu-overlay").classList.toggle("menu-overlay-opacity");

                    document.getElementById("product-popup").classList.toggle("product-popup-opacity");

                }, 250);

                document.getElementById("product-popup-image").style.display = 'block';

                if (dom.getAttribute("tamano") && dom.getAttribute("tamano") != "" && dom.getAttribute("tamano") != ",") {

                    document.getElementById("tamano-popup").textContent = tamanotext + ": " + dom.getAttribute("tamano").replace(/,\s*$/, "");

                }

                if (dom.getAttribute("ref") && dom.getAttribute("ref") != "") {

                    document.getElementById("ref-popup").textContent = "REF: " + dom.getAttribute("ref").replace(/,\s*$/, "");

                }

                if (document.querySelector(".variations-wrap > div:not(.separator):first-child")) {

                    document.querySelector(".variations-wrap > div:not(.separator):first-child").click();

                    var children = document.querySelector(".variations-wrap > div:not(.separator):first-child .children-wrap > .children-variation:first-child")

                    if (children) {

                        children.click();

                    }

                }



                if(dom.getAttribute("modelo3D") != ""){

                    var iframe = document.querySelector(".container3D iframe");

                    // Si el producte es variable recuperem el model3D del primer fill de les variacions

                    if(dom.getAttribute("product_type") != "variable"){

                        iframe.src = dom.getAttribute("modelo3D");

                    }

                    document.querySelector(".changer_img_3d").style.display = "flex";

                }

                else{

                    document.querySelector(".container3D").style.display = "none";

                    document.querySelector(".changer_img_3d").style.display = "none";

                }

                /* Video Iframe */

                var videoUrl = dom.getAttribute("video");

                videoUrl = videoUrl.replace(/,/g, "");

                if (videoUrl == "") {

                    document.querySelector(".product-popup-video").src = "";

                    document.querySelector(".product-popup-video").style.display = "none";

                } else {

                    document.querySelector(".product-popup-video").style.display = "flex";

                    document.querySelector(".product-popup-video").src = videoUrl;

                }

                // Función para reordenar elementos según el ancho de pantalla
                
                function reorderElements() {

                    var containerImgVariations = document.querySelector('.container-img-variations');

                    var variationsElement = document.querySelector('.variations');

                    if (containerImgVariations && variationsElement) {

                        if (window.innerWidth < 600) {

                            containerImgVariations.insertBefore(variationsElement, containerImgVariations.firstChild);

                        } else {

                            containerImgVariations.appendChild(variationsElement);

                        }

                    }

                }

                reorderElements();

                //window.addEventListener('resize', reorderElements);

                // Disable close event temporarily

                disableClose = true;

                setTimeout(() => {

                    disableClose = false;

                }, 500); // Adjust delay as needed

            }

            if (document.querySelector(".wpml-ls-native").textContent === "EN") {

                popupTitleElement = document.querySelector("#product-popup-title");

                if (popupTitleElement) {
                    let titleText = popupTitleElement.textContent;

                    // Reemplazar palabras según el diccionario
                    for (const [original, translated] of Object.entries(translations)) {
                        const regex = new RegExp(`\\b${original}\\b`, "g");
                        titleText = titleText.replace(regex, translated);
                    }

                    // Actualizar el texto del título del popup
                    popupTitleElement.textContent = titleText;
                }

            }

            if (window.innerWidth > 600) {

                var product_type = dom.getAttribute("product_type");

                var container_img_variations = document.querySelector(".container-img-variations");

                if (product_type == "variable") {

                    container_img_variations.style.display = "flex";

                } else {

                    container_img_variations.style.display = "block";

                }

                document.querySelector(".sketchfab").style.width = "370px";

                document.querySelector(".sketchfab").style.height = "300px";
                
            }

            else{

                document.querySelector(".sketchfab").style.width = "300px";

                document.querySelector(".sketchfab").style.height = "300px";

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

        document.getElementById('product-popup-close').addEventListener('click', function() {

            productPopup(null, true);

        });

        document.getElementById('menu-overlay').addEventListener('click', function() {

            productPopup(null, true);

        });

        /* Prevent popup content clicks from closing popup */

        document.querySelector('.product-popup-content').addEventListener('click', function(event) {

            event.stopPropagation();

        });

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


        document.addEventListener("DOMContentLoaded", () => {
            
            if (document.querySelector(".wpml-ls-native").textContent === "EN") {

                const elements = document.querySelectorAll("*:not(script):not(style)");

                elements.forEach((el) => {

                    el.childNodes.forEach((node) => {

                        if (node.nodeType === Node.TEXT_NODE) {

                            let text = node.nodeValue;

                            for (const [original, translated] of Object.entries(translations)) {

                                const regex = new RegExp(`\\b${original}\\b`, "g");

                                text = text.replace(regex, translated);
                                
                            }

                            node.nodeValue = text;
                        }

                    });

                });
                
            }

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
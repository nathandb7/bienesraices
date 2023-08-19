<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.avif" type="image/avif">
            <source srcset="build/img/destacada.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dignissimos aut, nostrum modi dolore,
                libero velit suscipit aspernatur aliquid, magnam rem? Asperiores, delectus commodi iste totam qui
                illo similique consequuntur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                impedit nulla nobis placeat qui quisquam natus fugiat reiciendis. Magni delectus praesentium
                inventore maxime libero expedita saepe laudantium sequi quae distinctio?
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet similique omnis necessitatibus
                sequi voluptatem nemo repudiandae suscipit blanditiis, error aspernatur pariatur molestias animi
                odit ipsa quam atque voluptas ipsam reprehenderit!
            </p>
        </div>
    </main>

<?php
    incluirTemplate('footer');
?>
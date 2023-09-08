<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.avif" type="image/avif">
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>

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
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore asperiores autem voluptatem facilis
                    ullam quia nesciunt numquam veniam expedita sequi natus saepe tempore aspernatur excepturi
                    reprehenderit, quisquam omnis illo ratione.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore asperiores autem voluptatem facilis
                    ullam quia nesciunt numquam veniam expedita sequi natus saepe tempore aspernatur excepturi
                    reprehenderit, quisquam omnis illo ratione.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore asperiores autem voluptatem facilis
                    ullam quia nesciunt numquam veniam expedita sequi natus saepe tempore aspernatur excepturi
                    reprehenderit, quisquam omnis illo ratione.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>
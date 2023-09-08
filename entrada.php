<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.avif" type="image/avif">
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen destacada">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
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
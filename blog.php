<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog1.avif" type="image/avif">
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Imagen entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                    <p>Consejos para construir una terraza en el techo
                        de tu casa con los mejores materiales</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog2.avif" type="image/avif">
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <img loading="lazy" src="build/img/blog2.jpg" alt="Imagen entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guia,
                        aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.avif" type="image/avif">
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Imagen entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guia,
                        aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.avif" type="image/avif">
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Imagen entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p>Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

                    <p>Maximiza el espacio en tu hogar con esta guia,
                        aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
            </div>
        </article>
    </main>

<?php
    incluirTemplate('footer');
?>
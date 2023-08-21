<?php

    $resultado = $_GET['resultado'] ?? null ;
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if( intval($resultado)  === 1) : ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php  endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde" >Nueva propiedad</a>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde" >Editar propiedad</a>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde" >Borrar propiedad</a>

        <table class="propiedades">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </table>

        <tbody>
            <tr>
                <td>1</td>
            </tr>
        </tbody>
    </main>

<?php
    incluirTemplate('footer');
?>
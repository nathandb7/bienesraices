<?php
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde" >Nueva propiedad</a>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde" >Editar propiedad</a>
        <a href="/admin/propiedades/crear.php" class="boton boton-verde" >Borrar propiedad</a>
    </main>

<?php
    incluirTemplate('footer');
?>
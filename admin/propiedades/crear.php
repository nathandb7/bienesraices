<?php
// Base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();

    // Arreglo con mensajes de errores
    $errores = [];


    // Ejecutar el código después de que el usuario envia el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];

        if(!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if(!$precio) {
            $errores[] = "El precio es Obligatorio";
        }

        if( strlen( $descripcion < 50 )) {
            $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
        }
        
        if(!$habitaciones) {
            $errores[] = "El número de habitaciones es Obligatorio";
        }

        if(!$wc) {
            $errores[] = "El número de baños es Obligatorio";
        }

        if(!$estacionamiento) {
            $errores[] = "El número de lugares de estacionamiento es Obligatorio";
        }

        if(!$vendedorId) {
            $errores[] = "Elije un vendedor";
        }


        // Revisar que el array de errores no este vacio
        if(empty($errores)) {
            // Insertar en la base de datos
            $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId) VALUES ( '$titulo',
            '$precio', '$descripcion', '$habitaciones', '$estacionamiento', '$vendedorId') ";

            // echo $query;

            $resultado = mysqli_query($db, $query);

            if ($resultado) {
                echo "Insertado Correctament";
            }
        }


}




require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>

    <a href="/admin/index.php" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach ?>

    <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9">

            <label for="estacionamiento">Etacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">

        </fieldset>

        <fieldset>
            <legend>Vendedor Propiedad</legend>

            <select name="vendedor">
                <option value="">-- Seleccione --</option>
                <option value="1">Nathan</option>
                <option value="2">Emanuel</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton-verde">
    </form>

</main>

<?php
incluirTemplate('footer');
?>
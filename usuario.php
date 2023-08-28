<?php

    // Importar la conexión

    require 'includes/config/database.php';
    $db = conectarDB();

    // Crear un email y pasword
    $email = "info@mail.com";
    $password = "123456";

    $paswordHash = password_hash($password, PASSWORD_DEFAULT);
    

    // Query para crear el usuario
    $query = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$paswordHash}'); ";

    echo $query;

    // Agregarlo a la base de datos
    mysqli_query($db, $query);

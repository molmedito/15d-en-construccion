<?php

    // 4. Conexión a la base de datos
    $dsn = 'mysql:dbname=dcl_en-construccion;host=127.0.0.1;charset=utf8';
    $user = 'dcl_marcelo';
    $password = 'CrZNnG50';

    try {
        $pdo = new PDO($dsn, $user, $password);

        //echo 'Conexión correcta';
    } catch(PDOException $e) {
        echo 'Error al conectarnos: ' . $e->getMessage();
    }
?>

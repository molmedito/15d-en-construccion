<?php
    require_once('connection.php');

    //
    if($_POST){
        $sql_insert = 'INSERT INTO newsletter (fecha, nombre, empresa, email) VALUES (?, ?, ?, ?)';

        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $empresa = isset($_POST['empresa']) ? $_POST['empresa'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $fecha = date("d/m/Y");

        $statement_insert = $pdo->prepare($sql_insert);
        $statement_insert->execute(array($fecha, $nombre, $empresa, $email));
    }

    $sql = 'SELECT * FROM newsletter WHERE 1 ORDER BY id DESC';

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $results = $statement->fetchAll();

?>

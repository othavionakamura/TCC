<?php

    try {
        $pdo = new PDO('mysql:host=localhost:3306;dbname=;charset=utf8','root','');
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        echo "<br><b>Não Conectado</b>";
    }
?>
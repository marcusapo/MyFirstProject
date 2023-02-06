<?php
    date_default_timezone_set('Brazil/east');

    try {
        $conn = new PDO('mysql:host=localhost;port=3306;dbname=lista','root','Cupom@System123');

    } catch (PDOException $e) {
        echo $e;
        die();
    }
?>
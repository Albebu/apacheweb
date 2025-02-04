<?php

function connectMariaDB() {
    $host = 'localhost';
    $user = 'root';
    $password = 'Monlau2024';
    $dbname = 'cv_db';

    $mysqli = new mysqli($host, $user, $password, $dbname);

    if ($mysqli->connect_error) {
        die('Conexión fallida: ' . $mysqli->connect_error);
    }

    return $mysqli;
}

function getCVInfoMariaDB($mysqli) {
    $sql = "SELECT * FROM cv_info LIMIT 1";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else return null;
}
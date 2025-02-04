<?php
function connectPostgreSQL()
{
    $host = 'localhost';
    $port = '5432';
    $dbname = 'cv_pg_db';
    $user = 'cv_pg_user';
    $password = 'password';

    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user
password=$password");
    if (!$conn) {
        die("Conexión fallida: " . pg_last_error());
    }
    return $conn;
}

function getCVInfoPostgreSQL($conn)
{
    $query = "SELECT * FROM cv_info LIMIT 1";
    $result = pg_query($conn, $query);
    if (pg_num_rows($result) > 0) {
        return pg_fetch_assoc($result);
    } else {
        return null;
    }
}

<?php

//  Koneksi ke database menggunakan PDO

function koneksi()
{
    $host      = "localhost";
    $port      = 3306;
    $database  = "layla-todolist";
    $username  = "root";
    $password  = "";

    try {
        $con = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        echo "sukses";
    } catch (PDOexception $error) {
        $con = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        echo "error" . $error->getMessage();
    }

}
koneksi();
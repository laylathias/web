<?php

require_once __DIR__ . "/koneksi.php";


function ambilData()
{
    $koneksi = koneksi ();
    $sql = "SELECT * FROM layla-todolist";
    $result = $koneksi->query($sql);

    foreach($result as $data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";  
    }
}

ambilData();
<?php
require "db_conn.php";

if($_SERVER['REQUEST_METHODO'] == 'POST'){
    if($_POST['aksi'] == 'Tambah Data'){
        //insert_data();
    } elseif(($_POST['aksi'] == 'Edit Data') && ($_POST['id'] > 0)){
        //update_data();
    } elseif(($_POST['aksi'] == 'Hps') && ($_POST['del'] > 0)){
        //delete_data();
    }

    header("Location: index.php");
    exit;
} else {
    echo "Halaman ini tidak boleh diakses secara langsung";
    exit;
}

<?php

 // ....

function insert_data(){
    global $conn;

    $query = "INSERT INTO barang (nama, harga, jml, keterangan, foto) VALUES (:harga, :jml, :keterangan, :foto)";
    $params = array(
        ':nama' => $_POST['nama'],
        ':harga' => $_POST['harga'],
        ':jml' => $_POST['jml'],
        ':keterangan' => $_POST['keterangan'],
        ':foto' => $_FILES['foto']['name']
    );

    try{
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
    } catch(PDOException $e) {
        echo "Kesalahan tambah: " . $e->getMessage();
    }
}

function update_data(){
    global $conn;

    $query = 'update barang set nama = :nama, harga, = :harga, jml = :jml, keterangan = :keterangan ';
    $params = array(
        ':nama' => $_POST['nama'],
        ':harga' => $_POST['harga'],
        ':jml' => $_POST['jml'],
        ':keterangan' => $_POST['keterangan'],
        ':id' => $_POST['id'],
    );
    if(!empty($_FILES['foto']['name'])){
        $query .= ', foto = :foto';
        $params[':foto'] = $_FILES['foto']['name'];
    }
    $query .= 'where id = :id';

    try{
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
    } catch(PDOException $e){
        echo "Kesalahan edit: " . $e->getMessage();
        echo $query;
    }
}
<?php
    include 'db.php';

    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $nip = isset($_POST["nim"]) ? $_POST["nim"] : "";
    $email = isset($_POST["alamt"]) ? $_POST["alamat"] : "";


    $sql = "UPDATE `mhs` SET `nama` = '".$nama."', `nim` = '".$nim."', `alamat` = '".$alamat."'
            WHERE `news`.`id` = '".$id."'";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        $msg = "Data berhasil diupdate!";
    } else {
        $msg = "Data gagal diupdate!";
    }
    $respone[] = array(
        'status' => 'OK',
        'message' => $msg,
    );
    echo json_encode($respone);
    
?>
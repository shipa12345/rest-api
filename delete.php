<?php
    include 'db.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM `mhs` WHERE `mhs`.`id` = '".$id."`";
    $query = mysqli_query($conn, $sql);
        if ($query) {
            $msg = "Data berhasil dihapus!";
        } else {
            $msg = "Data gagal dihapus!";
        }
        $respone[] = array(
            'status' => 'OK',
            'message' => $msg,
        );
        echo json_encode($respone);
?>
<?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
        $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
        $nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
        $alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";

        $sql = "INSERT INTO 'mhs' ('nama', 'nim', 'alamat')
        VALUES ('".$nama."', '".$nim."', '".$alamat."')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $msg = "Data berhasil disimpan!";
        } else {
            $msg = "Data gagal disimpan!";
        }
        $respone[] = array(
            'status' => 'OK',
            'message' => $msg,
        );
        echo json_encode($respone);
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $sql = "SELECT * FROM dosen";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)) {
            $result[] = array(
                'nama'  => $row['nama'],
                'nim' => $row['nim'],
                'alamat' => $row['alamat']
            );
        }

        $respone[] = array(
            'status' => 'OK',
            'code' => 200,
            'data' => $result
        );
        header("Content-type: application/json");
        echo json_encode($respone);
    }
    
?>
<?php
include('db.php');

if(isset($_POST['param'])) {
     $param= $_POST['param'];
    $result = $db->query("SELECT * FROM anggota WHERE id_anggota = '$param'");
    // $result->execute();
    $row = $result->fetch(PDO::FETCH_OBJ);
    $users_arr[] = array(
        "nama" => $row->nm_anggota, 
        "alamat" => $row->alamat,
        "tgl_lahir" => $row->tgl_lahir
    );
 
    echo json_encode($users_arr);
    exit;
}
?>
<?php

if (isset($_POST['id'])) {
    include 'koneksirfid.php';
    $uid = $_POST['id'];
    $query = mysqli_query($dbconnect, "SELECT * FROM tb_rfid WHERE id='$uid'");
    $cek = mysqli_num_rows($query);
    if ($cek > 0) {
        $data = mysqli_fetch_assoc($query);
        $status = "RFID Sudah Terdaftar";
    } else {
        $status = "RFID Belum Terdaftar";
    }

    $output = 
    [
        "Detail" =>
        [
            "Status" => $status,
            "Data User" => $data,
        ]
    ];
    $json = json_encode($output);
    echo $json;
}
?>
<?php
$harga_sewa = 3000; //harga sewa

include 'koneksirfid.php';
$uid = $_GET['id'];
$query = mysqli_query($dbconnect, "SELECT * FROM tb_rfid WHERE id='$uid'");
$cek = mysqli_num_rows($query);
if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);
    $hasil_saldo = $data['saldo'] - $harga_sewa;
    if ($hasil_saldo >= 0) {
        mysqli_query($dbconnect, "UPDATE tb_rfid SET saldo ='$hasil_saldo' WHERE id='$uid'");
        echo "Transaksi Sukses";
    } else {
        echo "Saldo Tidak Cukup";
    }
} else {
    echo "ID Belum Terdaftar";
}
?>
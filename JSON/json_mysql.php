<?php
$con = mysqli_connect("localhost", "root", "", "dbpunyairen");
$filename = "penghuni.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);
foreach($array as $row){
    $sql = "INSERT INTO penghuni (nama_lengkap, umur, gender, domisili, hp, kamar) VALUES
    ('".$row["nama_lengkap"]."','".$row["umur"]."', '".$row["gender"]."', '".$row["domisili"]."', '".$row["hp"]."', '".$row["kamar"]."')";
mysqli_query($con, $sql);
}

echo"Tanda Sukses Menyimpan ke database";
?>
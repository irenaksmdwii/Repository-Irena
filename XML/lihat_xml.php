<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "dbxmlpunyairen") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table pasien
$sql = "select * from pasien ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('pasien');    
    $track->addChild('id', $row['id']);
    $track->addChild('nama', $row['nama']);
    $track->addChild('alamat', $row['alamat']);
    $track->addChild('jenis_kelamin', $row['jenis_kelamin']);
    $track->addChild('umur', $row['umur']);
    $track->addChild('riwayat_penyakit', $row['riwayat_penyakit']);

}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>
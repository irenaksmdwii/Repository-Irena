<?php
include "konfig_xml.php";
if( !$xml = simplexml_load_file("pasien.xml") ) //using simplexml_load_file function to load xml file
{
echo "load XML failed!";
}
else
{
echo "<h1>This is the Data</h1>";
foreach( $xml as $record ) //parse the xml file into object
{
$id= $record->id; //get the childnode id
$nama = $record->nama; //get the child node nama
$alamat = $record->alamat; //get the child node alamat
$jenis_kelamin = $record->jenis_kelamin; //get the child node jenis_kelamin
$umur = $record->umur; //get the child node umur
$riwayat_penyakit = $record->riwayat_penyakit; //get the child node riwayat_penyakit

echo "id: ".$id."<br />";
echo "nama : ".$nama."<br />";
echo "alamat : ".$alamat."<br />";
echo "jenis_kelamin : ".$jenis_kelamin."<br />";
echo "umur : ".$umur."<br />";
echo "riwayat_penyakit : ".$riwayat_penyakit."<br />";
echo "<br>";

//save to database
$q = "INSERT INTO pasien VALUES('$id','$nama','$alamat','$jenis_kelamin','$umur','$riwayat_penyakit')";
$result = mysql_query($q);
}
if ($result) {
echo "<h2>Success Save to Database </h2>";
}
else echo "<h2>Failed Save to Databaase</h2>";
}
?> 

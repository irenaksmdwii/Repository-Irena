<?php
    require_once 'setting_server.php';

    $query = "select * from penghuni";
    $sql = mysqli_query($con, $query);
    $ray = array();

    while ($row = mysqli_fetch_array($sql)){
        array_push($ray, array(
            "nama_lengkap" => $row["nama_lengkap"],
            "umur" => $row["umur"],
            "gender" => $row["gender"],
            "domisili" => $row["domisili"],
            "hp" => $row["hp"],
            "kamar" => $row["kamar"]

        ));
    }
        $Iren= json_encode($ray);
        echo $Iren;        
        echo "<hr>Menyimpan Data ke FILE .json";
        file_put_contents("penghuni_new.json",$Iren);
        echo "<br>Sukses!";
    ?>
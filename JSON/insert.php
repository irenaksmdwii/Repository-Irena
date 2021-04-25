<?php
    if (!empty ($_POST)){
        //post si valuenya
        $nama_lengkap = $_POST['nama_lengkap'];
        $umur = $_POST['umur'];
        $gender = $_POST['gender'];
        $domisili = $_POST['domisili'];
        $hp = $_POST['hp'];
        $kamar = $_POST['kamar'];


        //untuk membaca semua data yangada difile penghuni_new.json dalam string
        $file = file_get_contents('penghuni_new.json');

        //untuk nerjemahin string JSON atau ngubah string JSON jadi var PHP
        $data = json_decode($file, true);

        //untuk buat si file target jadi korong saat dihapus
        //untuk batalin inisialisasi var PHP supaya kosong
        unset($_POST["add"]);

        //ngembaliin fungsi array yang isinya nilai array
        $data["records"] = array_values($data["records"]);

        //nambah 1 atau beberpa elemen pada array
        array_push($data["records"], $_POST);

        //fungsi json_encode untuk ngubah format data Arrau jadi JSON
        file_put_contents("penghuni_new.json", json_encode($data));
        header("Location : tampil.php");
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
             <title>Irena Kusuma Dewi</title>
    <!-- Bootstrap Core CSS --><link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS --><link href="css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts --><link href="font-awesome/css/font-awesome.min.css"
    rel="stylesheet" type="text/css"><link 
    href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" 
    rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .navbar-default{
        background-color: #ffe14c;
        font-size: 18px;
        color: #FFFFFF;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="NavbarIren">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h4>ISKOM | Irena Si Kosan Mewah</h4>
            </div>

            <div class="collapse navbar-collapse" id="NavbarIren">
            </div>
         </div>
    </nav>

    <!-- /.navbar-->
    <div class="container">
    <div class="col-sm-offset-3"><h3>Tambah Penghuni Baru</h3>
    <form method="POST" action="">
        <div class="form-group">
            <label for="inputName">Nama Mahasiswa</label>
            <input type="text" class="form-control" required="required" 
                   id="inputName" name="nama_lengkap" placeholder="Nama Mahasiswa">
            <span class="help-block"></span>
        </div>

        <div class="form-group">
            <label for="inputAge">Umur</label>
            <input type="number" class="form-control" required="required" 
                   id="inputAge" name="umur" placeholder="umur">
            <span class="help-block"></span>
        </div>
    
        <div class="form-group">
            <label for="inputGender">Jenis Kelamin</label>
            <select class="form-control" required="required" 
                   id="inputGender" name="gender" >
                   <option>-Pilih-</option>
                   <option value="Perempuan">Perempuan</option>
                   <option value="Laki-laki">Laki-Laki</option>
            </select>
            <span class="help-block"></span>
        </div>

        <div class="form-group">
            <label for="inputDomisili">Asal/Domisili</label>
            <input type="text" class="form-control" required="required" 
                   id="inputDomisili" name="domisili" placeholder="Asal/Domisili">
            <span class="help-block"></span>
        </div>

        <div class="form-group">
            <label for="inputNohp">Nomor Hp</label>
            <input type="number" class="form-control" required="required" 
                   id="inputNohp" name="hp" placeholder="Nomor Hp">
            <span class="help-block"></span>
        </div>

        <div class="form-group">
            <label for="inputKamar">Nomor Kamar</label>
            <input type="number" class="form-control" required="required" 
                   id="inputKamar" name="kamar" placeholder="Nomor Kamar">
            <span class="help-block"></span>
        </div>

        <div class="form-action">
            <button type="submit" class="btn btn-warning"> T A M B A H</button>
            <a class="btn btn btn-default" href="tampil.php"> K E M B A L I</a>
        </div>
    </form>
    </div></div>
</div>
</body>
</html>

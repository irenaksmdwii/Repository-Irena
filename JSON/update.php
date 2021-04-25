<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getfile = file_get_contents('penghuni_new.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile["records"];
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getfile = file_get_contents('penghuni_new.json');
    $all = json_decode($getfile, true);
    $jsonfile = $all["records"];
    $jsonfile = $jsonfile[$id];

    $post["nama_lengkap"] = isset($_POST["nama_lengkap"]) ? $_POST["nama_lengkap"] : "";
    $post["umur"] = isset($_POST["umur"]) ? $_POST["umur"] : "";
    $post["gender"] = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $post["domisili"] = isset($_POST["domisili"]) ? $_POST["domisili"] : "";
    $post["hp"] = isset($_POST["hp"]) ? $_POST["hp"] : "";
    $post["kamar"] = isset($_POST["kamar"]) ? $_POST["kamar"] : "";


    if($jsonfile) {
        unset($all["records"][$id]);
        $all["records"][$id] = $post;
        $all["records"] = array_values($all["records"]);
        file_put_contents("penghuni_new.json", json_encode($all));
    }
    header("Location:tampil.php");
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
    <![endif]--><style type="text/css">
    .navbar-default{
        background-color: #ffe14c;
        font-size: 18px;
        color: #FFFFFF;
    }
    .jumbotron{ background-color: #fff4b3; }

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
                <h4>UTS WEB SERVICES - IRENA KD | 187006002</h4>
            </div>

            <div class="collapse navbar-collapse" id="NavbarIren">
            </div>
         </div>
    </nav>

    <!-- /.navbar-->
    <div class="container">
        <div class="row">
           <div class="row">
                <h3>UBAH DATA</h3>
            </div>

            <?php if(isset($_GET["id"])): ?>
            <form method="POST" action="update.php">
            <div class="col-md-6">
                <input type="hidden" value="<?php echo $id ?>" name="id"/>
                <div class="form-group">
                <label for="inputnama_lengkap">Nama Mahasiswa</label>
                 <input type="text" class="form-control" required="required" 
                   id="inputnama_lengkap" value="<?php echo $jsonfile["nama_lengkap"]?>" 
                   name="nama_lengkap" placeholder="Nama Lengkap">
                <span class="help-block"></span>
                </div>

                <div class="form-group">
                <label for="inputumur">Umur</label>
                 <input type="number" class="form-control" required="required" 
                   id="inputumur" value="<?php echo $jsonfile["umur"]?>" 
                   name="umur" placeholder="Umur">
                <span class="help-block"></span>
                </div>

                <div class="form-group">
                <label for="inputgender">Jenis Kelamin</label>
                 <select class="form-control" required="required" 
                   id="inputgender" name="gender" >
                   <option>-Pilih-</option>
                   <option value="Perempuan" <?php echo $jsonfile["gender"] == 'Perempuan'?'selected':''; ?>>Perempuan</option>
                   <option value="laki-laki" <?php echo $jsonfile["gender"] == 'Laki-laki'?'selected':''; ?>>Laki-Laki</option>
                    </select>
                <span class="help-block"></span>
                </div>

                <div class="form-group">
                <label for="inputdomisili">Asal/Domisili</label>
                 <input type="text" class="form-control" required="required" 
                   id="inputdomisili" value="<?php echo $jsonfile["domisili"]?>" 
                   name="domisili" placeholder="domisili">
                <span class="help-block"></span>
                </div>

                <div class="form-group">
                <label for="inputhp">Nomor HP</label>
                 <input type="number" class="form-control" required="required" 
                   id="inputhp" value="<?php echo $jsonfile["hp"]?>" 
                   name="hp" placeholder="hp">
                <span class="help-block"></span>
                </div>

                <div class="form-group">
                <label for="inputnomarr">Nomor Kamar</label>
                 <input type="number" class="form-control" required="required" 
                   id="inputnomarr" value="<?php echo $jsonfile["kamar"]?>" 
                   name="kamar" placeholder="Nomor Kamar">
                <span class="help-block"></span>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-warning">UBAH DATA</button>
                    <a class="btn btn btn-default" href="tampil.php">KEMBALI</a>
                </div>
            </div>
        </form>
        <?php endif; ?>
        
        </div> <!--/row-->
        </div><!--/container-->
    </body>
    </html>
                

















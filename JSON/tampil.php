<?php
//untuk membaca semua data yang ada di filr penghuni_new.json
//dalam bentuk string
$getfile = file_get_contents('penghuni_new.json');

//menerjemahkan string JSON atau ngubah string JSON jadi var php
$jsonfile = json_decode($getfile);
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
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="tampil.php">KOMESI | KOSAN MEWAH SI IREN</a>
            </div>

            
        </div>
    </nav>
    </br></br></br></br>

    <div class="container">
        <div class="jumbotron style=background-color:#fff4b3;">
            <h2>KOSAN MEWAH SI IREN</h3>
            <p>Penyedia Kamar kosan, lengkap dengan fasilitas kost, harga kost, dan dekorasi kamar beserta foto desain kamar yang sebisa mungkin menggambarkan kondisi KOMESI</p>
            <h5>(Lokasi : Jl Paseh Nomor 147 Kota Tasikmalaya
        </div>
    </div>

    <div class="container">
        <div class="btn-toolbar">
            <a class="btn btn-warning" href="insert.php"><i class="icon-plus">
            </i> Tambah Data</a>
            <div class="btn-group"></div>
        </div>
    </div>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <tr class="warning">
                        <th style="text-align:center">NO</th>
                        <th style="text-align:center">NAMA MAHASISWA</th>
                        <th style="text-align:center">UMUR</th>
                        <th style="text-align:center">JENIS KELAMIN</th>
                        <th style="text-align:center">ASAL</th>
                        <th style="text-align:center">NOMOR HANDPHONE</th>
                        <th style="text-align:center">NOMOR KAMAR</th>
                        <th style="text-align:center">AKSI</th>
                    </tr>

                    <?php $no=0; foreach ($jsonfile->records as $index => $obj): $no++; ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td style="text-align:center"><?php echo $obj->nama_lengkap; ?></td>
                        <td style="text-align:center"><?php echo $obj->umur; ?></td>
                        <td style="text-align:center"><?php echo $obj->gender; ?></td>
                        <td style="text-align:center"><?php echo $obj->domisili; ?></td>
                        <td style="text-align:center"><?php echo $obj->hp; ?></td>
                        <td style="text-align:center"><?php echo $obj->kamar; ?></td>

                        <td style="text-align:center">
                            <a class="btn btn-xs btn-warning" href="update.php?id=<?php echo $index; ?>">Edit</a>
                            <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $index; ?>">Delete</a>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php
//untuk membaca semua data yang ada di filr orang.json
//dalam bentuk string
$getfile = file_get_contents('orang.json');

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
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span class="icon-bar"></span><span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="tampil.php">UTS WEB SERVICES - IRENA KD | 187006002</a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="clr1 active"><a href="">Home</a></li>
                    <li class="clr1 active"><a href="">JSON</a></li>
                    <li class="clr1 active"><a href="">XML</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </br></br></br></br>

    <div class="container">
        <div class="jumbotron">
            <h3>UJIAN TENGAN SEMESTER</h3>
            <h3>MATAKULIAH WEB SERVICES</h3>
            <p>DOSEN PENGAMPU : ALAM RAHMATULLOH., S.T., M.T.)<p>
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
            <div class="col-md-9">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>

                    <?php $no=0; foreach ($jsonfile->records as $index => $obj): $no++; ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $obj->first_name; ?></td>
                        <td><?php echo $obj->last_name; ?></td>
                        <td><?php echo $obj->umur; ?></td>
                        <td><?php echo $obj->gender; ?></td>
                        <td>
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
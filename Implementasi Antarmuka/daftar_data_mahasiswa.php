<?php  
	//start the session
	session_start();

    $redirect = "";
    
    if (isset($_SESSION['is_data_mhs_exist'])) {
        $redirect = "<script> window.location='daftar_syarat.php'; </script>";
    }else{
        $redirect = "<script> window.location='daftar_syarat.php'; </script>";
    }

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $val) {
            ${$key} = $val;
            $_SESSION[''.$key.''] = $val;
        }

        if (!empty($_SESSION)) {
            echo $redirect;
            print_r($_SESSION);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pendaftaran Tugas Akhir</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
	<div class="container">

	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Mahasiswa</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="daftar_data_mahasiswa.php">
                            
                            <fieldset class="the-fieldset">
                                <legend class="the-legend">Data Mahasiswa</legend>
                                <!-- Mahasiswa data form input -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Mahasiswa</label>
                                        <input type="text" class="form-control" name="mahasiswa_name" required 
                                        value="<?php isset($_SESSION['mahasiswa_name'])  ?  print($_SESSION['mahasiswa_name']) : ""; ?>"
                                        autofocus>
                                    </div>
                                </div>
                            </div>
                
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Fakultas</label>
                                        <input type="text" class="form-control" name="mhs_fakultas" required
                                        value="<?php isset($_SESSION['mhs_fakultas'])  ?  print($_SESSION['mhs_fakultas']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Program Studi</label>
                                        <input type="text" class="form-control" name="mhs_prodi" required
                                        value="<?php isset($_SESSION['mhs_prodi'])  ?  print($_SESSION['mhs_prodi']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Peminatan</label>
                                        <input type="text" class="form-control" name="mhs_peminatan" 
                                        value="<?php isset($_SESSION['mhs_peminatan'])  ?  print($_SESSION['mhs_peminatan']) : ""; ?>"

                                        required>
                                    </div>
                                </div>
                            </div>
                            <!-- END Mahasiswa data form input -->
                            </fieldset>

                            

                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Telp/HP</label>
                                        <input type="text" class="form-control" name="telp" 
value="<?php isset($_SESSION['telp'])  ?  print($_SESSION['telp']) : ""; ?>"

                                        required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                            
                            <?php  
                            if (isset($_SESSION['is_data_mhs_exist'])) {
                            ?>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Kembali <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }else{
                            ?>
                                <a href="daftar_mahasiswa.php" class="btn btn-warning pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Lanjut <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }
                            ?>

                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
	    </div>
	</div>
</body>
</html>
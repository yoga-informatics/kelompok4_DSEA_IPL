<?php  
    //start the session
    session_start();

    if (!isset($_SESSION)) {
        echo 'ada';
        exit();
        //echo'<script> window.location="index.php"; </script> ';
    }

    $_SESSION['is_data_parent_exist'] = "";
    $_SESSION['is_data_student_exist'] = "";
    $_SESSION['is_data_account_exist'] = "";

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $val) {
            ${$key} = $val;
            $_SESSION[''.$key.''] = $val;
        }

        if (!empty($_SESSION)) {
            echo'<script> window.location="daftar_data_mahasiswa.php"; </script> ';
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
                        <h4 class="title">Syarat Pendaftaran</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <h3>Berikut adalah syarat pendaftaran siswa baru yang harus dipenuhi :</h3>
                        <ol>
                            <li><font color="#2ecc71">Mengisi Formulir Pendaftaran <i class="fa fa-check"></font></i></li>
                            <li>Upload khs  dan kartu rencana studi</li>
                            <li>Foto Mahasiswa dan Bukti Pembayaran</li>
                        </ol>

                        <h6><i><b>*Catatan : Pengembalian Formulir berikut persyaratannya paling lambar 2 minggu setelah pengisian formulir secara online</b></i></h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Pendaftar</h4>
                        <p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
                    </div>
                    <div class="card-content table-responsive">
                        
                        <a href="daftar_mahasiswa.php" class="btn btn-primary pull-right" ><i class="fa fa-pencil"></i> Edit Data</a>
                        <h3 style="overflow: hidden;"><b>Data Calon Mahasiswa TA</b></h3>
                        <table class="table table-hover">
                        
                            <tbody>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>:<?php isset($_SESSION['email'])  ?  print($_SESSION['email']) : ""; ?> <a href="daftar_akun.php" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                                <tr>
                                    <td><b>Nama</b></td>
                                    <td>: <?php isset($_SESSION['full_name'])  ?  print($_SESSION['full_name']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Nim</b></td>
                                    <td>: <?php isset($_SESSION['no_nim'])  ?  print($_SESSION['no_nim']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>TTL</b></td>
                                    <td>: <?php isset($_SESSION['birth_place'])  ?  print($_SESSION['birth_place']) : ""; ?>, <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jenis Kelamin</b></td>
                                    <td>: <?php isset($_SESSION['gender']) && $_SESSION['gender'] == "L" ? print("Laki-laki") : print("Perempuan") ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>Jummlah SKS -</b></td>
                                    <td>: <?php isset($_SESSION['jmlh_sks'])  ?  print($_SESSION['jmlh_sks']) : ""; ?> dari <?php isset($_SESSION['total_sks'])  ?  print($_SESSION['total_sks']) : ""; ?> Total SKS</td>
                                </tr>
                                
                                <tr>
                                    <td><b>Semester</b></td>
                                    <td>: <?php isset($_SESSION['mhs_semester'])  ?  print($_SESSION['mhs_semester']) : ""; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="daftar_data_mahasiswa.php" class="btn btn-primary pull-right" style="margin-top: 30px;"><i class="fa fa-pencil"></i> Edit Data</a>


                        
                        
                        <h3><b>Data Mahasiswa</b></h3>
                        <table class="table table-hover">
                        
                            <tbody>
                                <tr>
                                    <td><b>Nama Mahasiswa</b></td>
                                    <td>: <?php isset($_SESSION['mahasiswa_name'])  ?  print($_SESSION['mahasiswa_name']) : ""; ?></td>
                                </tr>

                                <tr>
                                    <td><b>Fakultas</b></td>
                                    <td>: <?php isset($_SESSION['mhs_fakultas'])  ?  print($_SESSION['mhs_fakultas']) : ""; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>Program Studi</b></td>
                                    <td>: <?php isset($_SESSION['mhs_prodi'])  ?  print($_SESSION['mhs_prodi']) : ""; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>Peminatan</b></td>
                                    <td>: <?php isset($_SESSION['mhs_peminatan'])  ?  print($_SESSION['mhs_peminatan']) : ""; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>Telp/HP</b></td>
                                    <td>: <?php isset($_SESSION['telp'])  ?  print($_SESSION['telp']) : ""; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>
                        <h3>Anda yakin data diatas benar?</h3>
                        <a href="proses_simpan_pendaftaran.php" class="btn btn-primary pull-right">Yakin, kirim data pendaftaran</a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<h2>Profile</h2>

<div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
<div class="card" style="margin-top: 50px">
<div class="card-header" data-background-color="blue">
<h4 class="title">Biodata Pendaftar</h4>
<p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
</div>
<div class="card-content table-responsive">

<h3 style="overflow: hidden;"><b>Data Mahasiswa</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Email</b></td>
            <td>: <?php echo $email; ?> </td>
        </tr>
        <tr>
            <td><b>Nama</b></td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td><b>Nim</b></td>
            <td>: <?php echo $nim;; ?></td>
        </tr>
        <tr>
            <td><b>TTL</b></td>
            <td>: <?php echo $tempat_lahir.", ".$tanggal_lahir;; ?>, <?php isset($_SESSION['birth_date'])  ?  print($_SESSION['birth_date']) : "2009-01-01"; ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td>: <?php echo $jenis_kelamin; ?></td>
        </tr>
        
        <tr>
            <td><b>Jumlah SKS -</b></td>
            <td>: <?php echo $jumlah_sks." dari ".$total_sks?> Total SKS</td>
        </tr>
        
        <tr>
            <td><b>Semester</b></td>
            <td>: <?php echo $semester; ?></td>
        </tr>
    </tbody>
</table>


<h3><b>Data Mahasiswa</b></h3>
<table class="table table-hover">

    <tbody>
        <tr>
            <td><b>Nama Mahasiswa</b></td>
            <td>: <?php echo $nama_mahasiswa;; ?></td>
        </tr>
        
        <tr>
            <td><b>Fakultas</b></td>
            <td>: <?php echo $fakultas;; ?></td>
        </tr>
        
        <tr>
            <td><b>Program Studi</b></td>
            <td>: <?php echo $program_studi; ?></td>
        </tr>
        
        <tr>
            <td><b>Peminatan</b></td>
            <td>: <?php echo $peminatan; ?></td>
        </tr>
      
        <tr>
            <td><b>Telp/HP</b></td>
            <td>: <?php echo $telp; ?></td>
        </tr>
    </tbody>
</table>


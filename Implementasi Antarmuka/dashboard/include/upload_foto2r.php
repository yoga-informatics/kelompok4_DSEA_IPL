<?php  

include '../koneksi/koneksi.php';

if (isset($_POST['upload'])) {
    $targetfolderBase   = "../assets/uploads/";

    $fileNameFotoAnak   = date("h-m-s").basename( $_FILES['foto_mahasiswa']['name']);
    $fileNameFotoKeluarga   = date("h-m-s").basename( $_FILES['bukti_pembayaran']['name']);

    $targetfolder   = $targetfolderBase . $fileNameFotoAnak;
    $targetfolder2  = $targetfolderBase . $fileNameFotoKeluarga;
    
    
    $ok=1;

    $file_type=$_FILES['foto_mahasiswa']['type'];
    $file_type2=$_FILES['bukti_pembayaran']['type'];


    if ($file_type=="image/jpeg" || $file_type=="image/png" || $file_type=="application/pdf") {

         if(move_uploaded_file($_FILES['foto_mahasiswa']['tmp_name'], $targetfolder))

         {

            $query  = "UPDATE pendaftaran SET foto_mahasiswa='$fileNameFotoAnak' WHERE id=$id";

            $exec   = mysqli_query($conn, $query);

            if ($exec) {
             echo "<div class='alert alert-success alert-dismissable'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
              <strong>Berhasil!</strong> Upload Khs(PDF, JPEG, PNG).
            </div>";   
            }
             
         }

         else {

         echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Khs(PDF, JPEG, PNG).
        </div>";

         }

        }

    else {

     echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload Khs harus format(.PDF, JPEG, PNG).
        </div>";

    }

    if ($file_type2=="image/jpeg" || $file_type2=="image/png" || $file_type2=="application/pdf") {
        if(move_uploaded_file($_FILES['bukti_pembayaran']['tmp_name'], $targetfolder2))

         {

            $query  = "UPDATE pendaftaran SET bukti_pembayaran='$fileNameFotoKeluarga' WHERE id=$id";

            $exec   = mysqli_query($conn, $query);

            if ($exec) {
                echo "<div class='alert alert-success alert-dismissable'>
                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                  <strong>Berhasil!</strong> Upload KRS(PDF, JPEG, PNG).
                </div>";                
            }


         }

         else {

         echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload KRS(PDF, JPEG, PNG).
        </div>";

         }
    }else{
        echo "<div class='alert alert-danger alert-dismissable'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Gagal!</strong> Upload KRS harus format(PDF, JPEG, PNG).
        </div>";
    }
    
    
}

?>

<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Upload Foto Mahasiswa (JPG/PNG) dan Bukti Pembayaran(PDF, JPEG, PNG) Ukuran 2R</h4>
                <p class="category">Upload dengan format yang benar(PDF, JPEG, PNG)</p>
                <a href="index.php?page=4" class="btn btn-primary btn-md pull-right" style="margin-top: -40px;"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="card-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        

                        <div class="form-group floating-label" style="margin-left: 20px;">
                            <label class="col-sm-12">Foto Mahasiswa (PDF, JPEG, PNG) : </label>
                            <label class="btn btn-primary" for="my-file-selector">
                                <input id="my-file-selector" name="foto_mahasiswa" type="file" style="display:none" 
                                onchange="$('#upload-file-info').html(this.files[0].name)">
                                Upload Foto Mahasiswa (PDF, JPEG, PNG)
                            </label>
                            <span class='label label-info' id="upload-file-info"></span>
                        </div>
                    
                    </div>

                    <div class="row">
                        <div class="form-group floating-label" style="margin-left: 20px;">
                            <label class="col-sm-12">Bukti Pembayaran(PDF, JPEG, PNG) : </label>
                            <label class="btn btn-primary" for="my-file-selector2">
                                <input id="my-file-selector2" name="bukti_pembayaran" type="file" style="display:none" 
                                onchange="$('#upload-file-info2').html(this.files[0].name)">
                                Upload Bukti Pembayaran(PDF, JPEG, PNG)
                            </label>
                            <span class='label label-info' id="upload-file-info2"></span>
                        </div>
                    </div>
                       
                    <hr> 

                    <button type="submit" name="upload" class="btn btn-primary blue pull-right"><i class="fa fa-upload"></i> Upload File</button>
                </form>
            </div>
        </div>
    </div>
</div>
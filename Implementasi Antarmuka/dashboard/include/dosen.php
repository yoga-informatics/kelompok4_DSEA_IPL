<h1>Dosen</h1>

<?php  
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success alert-dismissable'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Berhasil!</strong> ".$_SESSION['message']."
    </div>";
}
?>

<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
        <div class="card" style="margin-top: 50px">
            <div class="card-header" data-background-color="blue">
                <h4 class="title">Dosen</h4>
                <p class="category">Daftar dosen Pada Universitas xyz</p>
            </div>
            <div class="card-content">
                <a href="index.php?page=11" class="btn btn-primary btn-md pull-right"><i class="fa fa-plus"></i> Tambah Dosen</a>
                <h3 style="overflow: hidden;"><b>Data Dosen</b></h3>
				<table class="table table-hover">
					<thead>
						<tr>
							<td><b>No</b></td>
							<td><b>NID</b></td>
							<td><b>Nama Dosen</b></td>
							<td><b>Telp</b></td>
							<td><b>Alamat</b></td>
							<td><b>Aksi</b></td>
						</tr>
					</thead>
				    <tbody>
				    	
				    	<?php  

				    		$query = "SELECT * FROM dosen";

				    		$exec  = mysqli_query($conn,$query);

				    		if ($exec) {
				    			$count = mysqli_num_rows($exec);
				    			if ($count > 0) {
				    				$no = 0;
				    				while ($rows = mysqli_fetch_array($exec)) {
				    				    
				    				
				    	?>
						    			<tr>
											<td><?php echo ++$no; ?></td>
											<td><?php echo $rows['nid'] ?></td>
											<td><?php echo $rows['nama_dosen'] ?></td>
											<td><?php echo $rows['telp'] ?></td>
											<td><?php echo $rows['alamat'] ?></td>
											<td>
												<a href="index.php?page=12&id=<?php echo $rows['Id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
												<a href="include/hapus_dosen.php?id=<?php echo $rows['Id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
				    	<?php
				    				}
				    			}else{
				    	?>
				    			<tr>
									<td colspan="6" align="center"><h4><b>Kosong</b></h4></td>
								</tr>
				    	<?php
				    			}
				    		}else{
				    			echo mysqli_error($conn);
				    		}

				    	?>

						
				    </tbody>
				</table>

            </div>
        </div>
    </div>
</div>

<?php  

unset($_SESSION['message']);

?>
<h1>Data Mahasiswa</h1>

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
                <h4 class="title">Data Mahasiswa</h4>
                <p class="category">Daftar Mahasiswa Yang sudah Mendaftar</p>
            </div>
            <div class="card-content">
                <h3 style="overflow: hidden;"><b>Data Mahasiswa</b></h3>
				<table class="table table-hover">
					<thead>
						<tr>
                            <td><b>Nama</b></td>
							<td><b>Nama</b></td>
							<td><b>Nim</b></td>
							<td><b>Semester</b></td>
							<td><b>Fakultas</b></td>
							<td><b>Prodi</b></td>
							<td><b>Peminatan</b></td>
						</tr>
					</thead>
				    <tbody>
				    	
				    	<?php  

				    		$query = "SELECT * FROM pendaftaran";

				    		$exec  = mysqli_query($conn,$query);

				    		if ($exec) {
				    			$count = mysqli_num_rows($exec);
				    			if ($count > 0) {
				    				$no = 0;
				    				while ($rows = mysqli_fetch_array($exec)) {
				    				    
				    				
				    	?>
						    			<tr>
											<td><?php echo ++$no; ?></td>
											<td><?php echo $rows['nama'] ?></td>
											<td><?php echo $rows['nim'] ?></td>
											<td><?php echo $rows['semester'] ?></td>
											<td><?php echo $rows['fakultas'] ?></td>
                                            <td><?php echo $rows['program_studi'] ?></td>
                                            <td><?php echo $rows['peminatan'] ?></td>
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
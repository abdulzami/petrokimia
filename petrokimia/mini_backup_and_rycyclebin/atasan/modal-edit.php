<?php
    include "koneksitable.php";
	$id=$_GET['id'];
	$modal=mysql_query("SELECT * FROM tabel_karyawan WHERE id='$id'");
	while($r=mysql_fetch_array($modal)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group">
                	<label for="Modal Name">Kode Karyawan</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
     				<input type="text" name="kode_ky"  class="form-control" value="<?php echo $r['kode_karyawan']; ?>" />
                </div>

                <div class="form-group">
                	<label for="Description">Nama Karyawan</label>
     				<input type="text" name="nama_ky" class="form-control" value="<?php echo $r['nama_karyawan']; ?>"/>
                </div>

                <div class="form-group">
                	<label for="Date">Jenis Kelamin</label>       
     				<input type="text" name="jenis_ky" class="form-control" value="<?php echo $r['jenis_kelamin']; ?>"/>
                </div>

                <div class="form-group">
                    <label for="Description">Usia</label>
                    <input type="text" name="usia_ky" class="form-control" value="<?php echo $r['usia']; ?>"/>
                </div>

                 <div class="form-group">
                    <label for="Description">Pendidikan</label>
                    <input type="text" name="pend_ky" class="form-control" value="<?php echo $r['pendidikan']; ?>"/>
                </div>

                 <div class="form-group">
                    <label for="Description">Institut Pendidikan</label>
                    <input type="text" name="ip_ky" class="form-control" value="<?php echo $r['institusi_pendidikan']; ?>"/>
                </div>

                 <div class="form-group">
                    <label for="Description">Jurusan</label>
                    <input type="text" name="jr_ky" class="form-control" value="<?php echo $r['jurusan']; ?>"/>
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>
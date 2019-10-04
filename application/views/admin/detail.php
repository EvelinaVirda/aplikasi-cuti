<div class="page-content">
      <div class="row">
      <div class="col-md-10">
        <div class="content-box-large">
        <table class="table table-hover table-striped">
	        <tr>
	            <th>ID Karyawan</th>
	            <th>Nama Karyawan</th>
	            <th>Tgl Mulai</th>
	            <th>Tgl Selesai</th>
	            <th>Keterangan</th>
	            <th>Status</th>
	           
	        </tr>

	        <?php 
	            foreach($detail as $u){
	        ?>
	            <tr>

	                <td><?php echo $u->id_karyawan ?> </td>
	            
	                <td><?php echo $u->nama_user ?> </td>
	            
	                <td><?php echo $u->tgl_mulai ?> </td>

	                <td><?php echo $u->tgl_selesai ?></td>

	                <td><?php echo $u->keterangan ?> </td>

	                <td><?php echo $u->status ?> </td>

	            </tr>
	            
	        <?php } ?>
	        </table>
        </div>
      </div>
    </div>
</div>
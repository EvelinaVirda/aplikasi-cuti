<div class="page-content">
      <div class="row">
      <div class="col-md-10">
        <div class="content-box-large table-responsive">
        <table class="table table-hover table-striped">
	        <tr>
	            <th>ID Karyawan</th>
	            <th>Nama Karyawan</th>
	            <th>Alamat</th>
	            <th>Jenis Kelamin</th>
	            <th>Email</th>
	            <th>Jabatan</th>
	            <th>Level</th>
	            <th>No KTP</th>
	            <th>Foto</th>
	        </tr>

	        <?php 
	            foreach($detail as $u){
	        ?>
	            <tr>

	                <td><?php echo $u->id_karyawan ?> </td>
	            
	                <td><?php echo $u->nama_user ?> </td>
	            
	                <td><?php echo $u->alamat ?> </td>

	                 <td><?php echo $u->jenis_kelamin ?> </td>

	                <td><?php echo $u->email ?> </td>

	                <td><?php echo $u->jabatan ?> </td>

	                <td><?php echo $u->level ?></td>

	                <td><?php echo $u->no_ktp ?> </td>

	                <td><img width="50px" height="50px" src='<?=base_url()?>gambar/<?=$u->foto;?>'></td>
                                

	            </tr>
	            
	        <?php } ?>
	        </table>
	        <table class="table table-hover table-striped">
	        <tr>
	            
	            <th>Tgl Mulai</th>
	            <th>Tgl Selesai</th>
	            <th>Keterangan</th>
	            <th>Status</th>
	            
	        </tr>
	        <?php 
	            foreach($detail2 as $u){
	        ?>
	            <tr>
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
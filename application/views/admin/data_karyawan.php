<div class="page-content">
      <div class="row">
      <div class="col-md-10">
        <div class="content-box-large table-responsive">
        <table class="table table-hover table-striped">
	        <tr>
	        	<th>No</th>
	            <th>ID Karyawan</th>
	            <th>Nama Karyawan</th>
	            <th>Username</th>
	            <th>Alamat</th>
	            <th>Jenis Kelamin</th>
	            <th>Email</th>
	            <th>Jabatan</th>
	            <th>Level</th>
	            <th>No KTP</th>
	            <th>Foto</th>
	            <th>Aksi</th>
	        </tr>

	        <?php 
	            $no = $this->uri->segment('3') + 1;
	            foreach($data_karyawan as $u){
	        ?>
	            <tr>
	                <td><?php echo $no++; ?></td>

	                <td><?php echo $u->id_karyawan ?> </td>

	                <td><?php echo $u->nama_user ?> </td>
	            
	                <td><?php echo $u->username ?> </td>
	            
	                <td><?php echo $u->alamat ?> </td>

	                <td><?php echo $u->jenis_kelamin ?></td>

	                <td><?php echo $u->email ?> </td>

	                <td><?php echo $u->jabatan ?> </td>

	                <td><?php echo $u->level ?></td>

	                <td><?php echo $u->no_ktp ?> </td>

	                <td><img width="50px" height="50px" src='<?=base_url()?>gambar/<?=$u->foto;?>'></td>
                                
	                <td>
	                	<a class="btn btn-primary" href="<?php echo site_url('admin/edit_data_karyawan/'.$u->id_karyawan);?>"> Edit</a>
                		<a class="btn btn-danger" href="<?php echo site_url('admin/hapus_data_karyawan/'.$u->id_karyawan);?>"> Hapus</a>
                		<!--
	                	<?php echo anchor('admin/edit_data_admin/'.$u->id_karyawan,'edit'); ?>|
	                    <?php echo anchor('admin/hapus_data_admin/'.$u->id_karyawan,'hapus'); ?> 
	                -->
	                </td>
	            
	            </tr>
	            
	        <?php } ?>
	        </table>
	        <?php
            echo $this->pagination->create_links();
            ?>
        </div>
      </div>
    </div>
</div>
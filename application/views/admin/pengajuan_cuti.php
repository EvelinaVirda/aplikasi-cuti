<div class="page-content">
      <div class="row">
      <div class="col-md-10">
        <div class="content-box-large table-responsive">
        <table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>No</th>
					            <th>ID Karyawan</th>
					        	<th>Keterangan</th>
					            <th>Nama Karyawan</th>
					            <th>Tgl Mulai</th>
					            <th>Tgl Selesai</th>
					            <th>Status</th>
					            <th>Detail</th>
					        </tr> 
						</thead>
						<?php 
				            $no = $this->uri->segment('3') + 1;
				            foreach($data_karyawan as $u){
				        ?>
						<tbody>
							<tr>
								<td><?php echo $no++; ?></td>
				                <td><?php echo $u->id_karyawan ?> </td>
				                <td><?php echo $u->keterangan ?> </td>
				                <td><?php echo $u->nama_user ?> </td>
				                <td><?php echo $u->tgl_mulai ?> </td>
				                <td><?php echo $u->tgl_selesai ?></td>
				                <?php 
				                	if ($u->status == "Menunggu") {
				                		?><td><a class="btn btn-success"> <?php echo $u->status ?> </a></td><?php
				                	}elseif ($u->status == "Ditolak") {
				                		?><td><a class="btn btn-danger"> <?php echo $u->status ?> </a></td><?php
				                	}elseif ($u->status == "Diterima") {
				                		?><td><a class="btn btn-primary"> <?php echo $u->status ?> </a></td><?php
				                	}
				                ?>
				                
				                <td>
				                <a class="btn btn-primary" href="<?php echo site_url('admin/detail_cuti2/'.$u->id_karyawan);?>"> Detail</a>
				                <a class="btn btn-danger" href="<?php echo site_url('admin/hapus_data_cuti/'.$u->id_cuti);?>"> Hapus</a>
				                	<!--<?php echo anchor('admin/hapus_data_cuti/'.$u->id_cuti,'Hapus'); ?>-->
				                </td>
				            </tr>
						</tbody>
						<?php } ?>
					</table>
					<?php
		            echo $this->pagination->create_links();
		            ?>
  				</div>
  			</div>
      </div>
    </div>
</div>


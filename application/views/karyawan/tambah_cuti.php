<div class="page-content">
    <div class="row">
      <div class="col-md-10">
        <div class="content-box-large table-responsive">
          <form method="POST" action="<?php echo site_url('karyawan/tambah_cuti');?>">
            <table cellpadding="8">
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="id_karyawan">ID Karyawan</label>  
              <div class="col-md-6">
              <input type="text" name="id_karyawan" id="id_karyawan" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="nama_user">Nama</label>  
              <div class="col-md-6">
              <input type="text" name="nama_user" id="nama_user" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="tgl_mulai">Tanggal Mulai</label>  
              <div class="col-md-6">
              <input type="text" name="tgl_mulai" id="tgl_mulai" class="form-control input-md" placeholder="YYYY-MM-DD" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="tgl_selesai">Tanggal Selesai</label>  
              <div class="col-md-6">
              <input type="text" name="tgl_selesai" id="tgl_selesai" class="form-control input-md" placeholder="YYYY-MM-DD" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="keterangan">Keterangan</label>  
              <div class="col-md-6">
              <input type="text" name="keterangan" id="keterangan" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <div class="col-md-6">
              <input type="hidden" name="status" id="status" value="Menunggu" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            </table> 
            <hr>
            <input type="submit" class="btn btn-primary" value="Simpan">
            <a href="#"><input type="button" class="btn btn-danger" value="Batal"></a>
            </form>
          </div>
       </div>
    </div>
</div>

<div class="page-content">
    <div class="row">
      <div class="col-md-10">
        <div class="content-box-large table-responsive">
          <?php echo form_open_multipart('admin/edit_data_karyawan_proses');
          foreach($data_admin as $k) {
          ?>
            <table cellpadding="8">
            <div class="form-group">
              <label class="col-sm-2 control-label" for="nama_user">ID Karyawan</label>  
              <div class="col-md-6">
              <input type="text" name="id_karyawan" id="id_karyawan" value="<?php echo $k->id_karyawan ?>" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="nama_user">Nama</label>  
              <div class="col-md-6">
              <input type="text" name="nama_user" id="nama_user" value="<?php echo $k->nama_user ?>" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="username">Username</label>  
              <div class="col-md-6">
              <input type="text" name="username" id="username" value="<?php echo $k->username ?>" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="alamat">Alamat</label>  
              <div class="col-md-6">
              <input type="text" name="alamat" id="alamat" value="<?php echo $k->alamat ?>" class="form-control input-md">           
              </div>
            </div>
            <br><br><br>
             <div class="form-group">
              <label class="col-sm-2 control-label" for="jenis_kelamin">Jenis Kelamin</label>  
              <div class="col-md-6">
                    <select name="jenis_kelamin" class="form-control">
                    <option value="<?php echo $k->jenis_kelamin ;?>"><?php echo $k->jenis_kelamin ;?></option>
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                    </select>
            </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="email">Email</label>  
              <div class="col-md-6">
              <input type="text" name="email" id="email" value="<?php echo $k->email ?>" class="form-control input-md">           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="jabatan">Jabatan</label>  
              <div class="col-md-6">
              <input type="text" name="jabatan" id="jabatan" value="<?php echo $k->jabatan ?>" class="form-control input-md">           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
            <label class="col-sm-2 control-label" for="level">Level</label>
            <div class="col-md-6">
                    <select name="level" class="form-control">
                    <option value="<?php echo $k->level ;?>"><?php echo $k->level ;?></option>
                    <option value="admin">Admin</option>
                    <option value="pimpinan">Pimpinan</option>
                    <option value="user">User</option>
                    </select>
            </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="no_ktp">No KTP</label>  
              <div class="col-md-6">
              <input type="text" name="no_ktp" id="no_ktp" value="<?php echo $k->no_ktp ?>" class="form-control input-md" required>           
              </div>
            </div>
            <br><br>
            <tr>
              <td>Foto</td>
              <td><input type="file" name="foto"></td>
              <td><img max-height="100%" width="150px" src="<?php echo base_url().'gambar/'.$k->foto ;?>"></td>
            </tr>
            </table> 
            <hr>
            <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
            <?php } ?>
          </div>
       </div>
    </div>
</div>

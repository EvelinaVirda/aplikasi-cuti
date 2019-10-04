<div class="page-content">
    <div class="row">
      <div class="col-md-10">
        <div class="content-box-large table-responsive">
          <?php echo form_open_multipart('admin/tambah_user_proses'); ?>
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
              <label class="col-sm-2 control-label" for="username">Username</label>  
              <div class="col-md-6">
              <input type="text" name="username" id="username" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="password">Password</label>  
              <div class="col-md-6">
              <input type="password" name="password" id="password" class="form-control input-md" required>           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="alamat">Alamat</label>  
              <div class="col-md-6">
              <input type="text" name="alamat" id="alamat" class="form-control input-md">           
              </div>
            </div>
            <br><br><br>
             <div class="form-group">
              <label class="col-sm-2 control-label" for="jenis_kelamin">Jenis Kelamin</label>  
              <div class="col-md-6">
              <input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki
              <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="email">Email</label>  
              <div class="col-md-6">
              <input type="text" name="email" id="email" class="form-control input-md">           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="jabatan">Jabatan</label>  
              <div class="col-md-6">
              <input type="text" name="jabatan" id="jabatan" class="form-control input-md">           
              </div>
            </div>
            <br><br><br>
            <div class="form-group">
            <label class="col-sm-2 control-label" for="level">Level</label>
            <div class="col-md-6">
                    <select name="level" class="form-control">
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
              <input type="text" name="no_ktp" id="no_ktp" class="form-control input-md" required>           
              </div>
            </div>
            <br><br>
            <tr>
              <td>Foto</td>
              <td><input type="file" name="foto"></td>
            </tr>
            </table> 
            <hr>
            <input type="submit" class="btn btn-primary" value="Simpan">
            <a href="table.php"><input type="button" class="btn btn-danger" value="Batal"></a>
            </form>
          </div>
       </div>
    </div>
</div>

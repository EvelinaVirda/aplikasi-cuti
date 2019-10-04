<div class="page-content">
    <div class="row">
      <div class="col-md-10">
        <div class="content-box-large table-responsive">
          <?php 
          foreach($data as $k) {
          ?>
          <form  method="POST" action="<?php echo site_url('pimpinan/edit_status_cuti_proses');?>">
            <table cellpadding="8">
            <input type="hidden" name="id_cuti" value="<?php echo $k->id_cuti ?>">
            <div class="form-group">
            <label class="col-sm-1 control-label" for="status">Status</label>  
              <div class="col-md-6">
                    <select name="status" class="form-control">
                    <option value="<?php echo $k->status ;?>"><?php echo $k->status ;?></option>
                    <option value="Menunggu"> Menunggu</option>
                    <option value="Diterima"> Diterima</option>
                    <option value="Ditolak"> Ditolak</option>
                    </select>
            </div>
            </div>
            </table> 
            <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
            <?php } ?>
          </div>
       </div>
    </div>
</div>

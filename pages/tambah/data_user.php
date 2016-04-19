<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah User</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	            <!-- text input -->
	            <input type="hidden" name="type" value="data_user">
	            <input type="hidden" name="cmd" value="tambah">
	            <div class="form-group">
	              <label>Nama</label>
	              <input type="text" class="form-control" name="nama" placeholder="Nama" value=""/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Alamat</label>
	              <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"></textarea>
	            </div>
	            <div class="form-group">
	              <label>Telepon</label>
	              <input type="text" class="form-control" name="telepon" placeholder="Telepon" value=""/>
	            </div>
	            <div class="form-group">
	              <label>Kontak</label>
	              <input type="text" class="form-control" name="kontak" placeholder="Kontak" value=""/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=data_user" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-warning">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Pengguna</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          <input type="hidden" name="type" value="admin">
	           <input type="hidden" name="cmd" value="tambah">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Nama</label>
	              <input type="text" name="nama" class="form-control" placeholder="Nama" value=""/>
	            </div>
	             <div class="form-group">
	              <label>Username</label>
	              <input type="text" name="username" class="form-control" placeholder="username" value=""/>
	            </div>
	            <div class="form-group">
	              <label>Password</label>
	              <input type="password" name="password" class="form-control" placeholder="password" value=""/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=admin" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
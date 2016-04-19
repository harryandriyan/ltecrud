<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-warning">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Teknisi</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          <input type="hidden" name="type" value="data_teknisi">
	           <input type="hidden" name="cmd" value="tambah">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Nama</label>
	              <input type="text" name="nama" class="form-control" placeholder="Nama" value=""/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=data_teknisi" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
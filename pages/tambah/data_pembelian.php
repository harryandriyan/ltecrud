<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Pembelian</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          	<input type="hidden" name="type" value="data_pembelian">
	            <input type="hidden" name="cmd" value="tambah">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Nama</label>
	              <input type="text" name="nama" class="form-control" placeholder="Nama" value=""/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Alamat</label>
	              <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat"></textarea>
	            </div>
	            <div class="form-group">
	              <label>Telepon</label>
	              <input type="text" class="form-control" name="telepon" placeholder="Telepon" value=""/>
	            </div>
	            <div class="form-group">
	              <label>Kontak</label>
	              <input type="text" class="form-control" name="kontak" placeholder="Kontak" value=""/>
	            </div>

	            <div class="form-group">
	              <label>Type Alat</label>
	              <select name="type_alat" class="form-control">
	              	<option value="Matrix Series">Matrix Series</option>
					<option value="Elegant Series">Elegant Series</option>
	              </select>
	            </div>

	            <div class="form-group">
	              <label>Serial Number</label>
	              <input type="text" name="sn" class="form-control" placeholder="Serial Number" value=""/>
	            </div>

	             <div class="form-group">
	              <label>Tanggal Beli</label>
	              <input type="text" name="tgl_beli" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask placeholder="Tanggal" value=""/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="index.php?page=data_pembelian" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
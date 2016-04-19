<?php require_once('config/main.php');
$query=mysql_query("select * from user where id='$_GET[id]'");
$data = mysql_fetch_array($query);

 ?>
<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title">Edit Pembelian</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	            <!-- text input -->
	            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	            <input type="hidden" name="type" value="data_pembelian">
	            <input type="hidden" name="cmd" value="edit">
	            <div class="form-group">
	              <label>Nama</label>
	              <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data['nama']; ?>"/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Alamat</label>
	              <textarea class="form-control" name="alamat" rows="3" placeholder="Alamat"><?php echo $data['alamat']; ?></textarea>
	            </div>
	            <div class="form-group">
	              <label>Telepon</label>
	              <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $data['telp']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Kontak</label>
	              <input type="text" class="form-control" name="kontak" placeholder="Kontak" value="<?php echo $data['kontak']; ?>"/>
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
	              <input type="text" name="sn" class="form-control" placeholder="Serial Number" value="<?php echo $data['sn']; ?>"/>
	            </div>

	             <div class="form-group">
	              <label>Tanggal Beli</label>
	              <input type="text" name="tgl_beli" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask placeholder="Tanggal" value="<?php echo $data['tgl']; ?>"/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=data_pembelian" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
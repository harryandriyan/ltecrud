<?php require_once('config/main.php');
$query=mysql_query("select * from teknisi where id=".$_GET['id']);
$data = mysql_fetch_array($query);
 ?>

<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Edit SPK</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	          <input type="hidden" name="type" value="spk">
	          <input type="hidden" name="cmd" value="edit">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Nama</label>
	              <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data['nama']; ?>"/>
	            </div>
	            <!-- textarea -->
	            <div class="form-group">
	              <label>Pelanggan</label>
	              <input type="text" class="form-control" name="pelanggan" placeholder="Pelanggan" value="<?php echo $data['pelanggan']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Alamat</label>
	              <textarea class="form-control" rows="3" name="alamat" placeholder="Alamat"><?php echo $data['alamat']; ?></textarea>
	            </div>
	            
	            <div class="form-group">
	              <label>Kontak</label>
	              <input type="text" class="form-control" name="kontak" placeholder="Kontak" value="<?php echo $data['kontak']; ?>"/>
	            </div>

	            <div class="form-group">
	              <label>Telepon</label>
	              <input type="text" class="form-control" name="telepon" placeholder="Telepon" value="<?php echo $data['telp']; ?>"/>
	            </div>

	            <div class="form-group">
	              <label>Tanggal</label>
	              <input type="text" class="form-control" name="tanggal" placeholder="Tanggal" value="<?php echo $data['tgl']; ?>"/>
	            </div>

	            <div class="form-group">
	              <label>Jam</label>
	              <input type="text" class="form-control" name="jam" placeholder="Jam" value="<?php echo $data['jam']; ?>"/>
	            </div>

	            <div class="form-group">
	              <label>Keterangan</label>
	              <textarea class="form-control" rows="3" name="ket" placeholder="Keterangan"><?php echo $data['ket']; ?></textarea>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data</button>
	            <a href="index.php?page=spk" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
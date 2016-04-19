<?php require_once('config/main.php'); 
$query=mysql_query("select * from teknisi1 where id=".$_GET['id']);
$data = mysql_fetch_array($query);
?>
<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-warning">
	        <div class="box-header">
	          <h3 class="box-title">Edit Teknisi</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="simpan.php">
	          <input type="hidden" name="type" value="data_teknisi">
	           <input type="hidden" name="cmd" value="edit">
	          <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	            <!-- text input -->
	            <div class="form-group">
	              <label>Nama</label>
	              <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $data['nama']; ?>"/>
	            </div>

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-backward"></i> Kembalikan Data </button>
	            <a href="index.php?page=data_teknisi" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>
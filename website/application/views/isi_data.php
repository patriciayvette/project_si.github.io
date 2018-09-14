<?php
$act		= "act_edit";
$nama		= $data->nama;
$userid		= $data->id;
$level		= $data->level;
?>

<div class="navbar navbar-inverse">
	<div class="container z0">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Edit Data Member</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/welcome/prod/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="idp" value="<?php echo $userid; ?>">
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td width="20%">Nama</td><td><b><input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"></b></td></tr>
		<tr><td width="20%">Level</td><td><b>
			<select name="lvl" class="form-control">
                  <option value=""disabled selected required>Select User Level</option>
                  <?php if ($level == 1) {?>
                  <option value="0">Admin</option>
                  <option value="1" selected>User</option>
                  <?php }
                  else { ?>
                  <option value="0" selected>Admin</option>
                  <option value="1">User</option>
                  <?php }?>
              </select></b></td></tr>
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i>Kirim</button>
		<a href="<?php echo base_URL(); ?>index.php/welcome/masuk" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
	
	</div>
	
	</form>
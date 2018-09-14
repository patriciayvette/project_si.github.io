<?php
$act		= "act_edit_agenda";
$id 		= $data->id;
$tgl_1		= $data->tgl_dibuat;
$nama 		= $data->nama;   
$topik 		= $data->topik;
$tgl_2		= $data->tanggal_mulai;
$tgl_3      = $data->tanggal_akhir;
$tempat     = $data->tempat;
$pengirim   = $data->pengirim; 
?>

<div class="navbar navbar-inverse">
	<div class="container z0">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Edit Data Agenda</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/welcome/prod/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="idp" value="<?php echo $id; ?>">
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td width="20%">Tanggal dibuat</td>
			<td><b><input type="text" name="tanggal" class="form-control" value="<?php echo $tgl_1; ?>" disabled></b></td>
		</tr>
		<tr><td width="20%">Nama</td>
			<td><b><input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>"></b></td>
		</tr>
		<tr><td width="20%">Topik</td>
			<td><b><input type="text" name="topik" class="form-control" value="<?php echo $topik; ?>"></b></td>
		</tr>
		<tr><td width="20%">Tanggal Mulai</td>
			<td><b><input type="date" name="tanggal2" class="form-control" value="<?php echo $tgl_2; ?>"></b></td>
		</tr>
		<tr><td width="20%">Tanggal Selesai</td>
			<td><b><input type="date" name="tanggal3" class="form-control" value="<?php echo $tgl_3; ?>"></b></td>
		</tr>
		<tr><td width="20%">Tempat</td>
			<td><b><input type="text" name="tempat" class="form-control" value="<?php echo $tempat; ?>"></b></td>
		</tr>
		<tr><td width="20%">Pengirim</td>
			<td><b><input disabled type="text" name="pengirim" class="form-control" value="<?php echo $this->session->userdata('admin_id')?>"></b></td>
		</tr>
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i>Kirim</button>
		<a href="<?php echo base_URL(); ?>index.php/welcome/masuk" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
	
	</div>
	
	</form>
<?php
$act		= "act_edit_data";
$no				= $data->no;
$kecamatan  	= $data->kecamatan;
$desa			= $data->desa;
$kelompok_tani 	= $data->kelompok_tani;
$ketua			= $data->ketua;
$tipe_mesin		= $data->tipe_mesin;
$tenaga			= $data->tenaga;
$bahan_bakar 	= $data->bahan_bakar;
$konsumsi_bb 	= $data->konsumsi_bb;
$luas_sawah 	= $data->luas_sawah;
$kerja_efektif 	= $data->kerja_efektif;
#$jumlah			= $data->jumlah
?>

<div class="navbar navbar-inverse">
	<div class="container z0">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Edit Data Alat</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/welcome/prod/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="no" value="<?php echo $no; ?>">
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td width="20%">Kecamatan</td><td><b><input type="text" name="kecamatan" class="form-control" value="<?php echo $kecamatan; ?>"></b></td></tr>
		<tr><td width="20%">Desa</td><td><b><input type="text" name="desa" class="form-control" value="<?php echo $desa; ?>"></b></td></tr>
		<tr><td width="20%">Kelompok Tani</td><td><b><input type="text" name="k_tani" class="form-control" value="<?php echo $kelompok_tani; ?>"></b></td></tr>
		<tr><td width="20%">Nama Ketua</td><td><b><input type="text" name="ketua" class="form-control" value="<?php echo $ketua; ?>"></b></td></tr>
		<tr><td width="20%">Tipe Mesin</td><td><b><input type="text" name="tipe_mesin" class="form-control" value="<?php echo $tipe_mesin; ?>"></b></td></tr>
		<tr><td width="20%">Tenaga</td><td><b><input type="text" name="tenaga" class="form-control" value="<?php echo $tenaga; ?>"></b></td></tr>
		<tr><td width="20%">Bahan Bakar</td><td><b><input type="text" name="bahan_bakar" class="form-control" value="<?php echo $bahan_bakar; ?>"></b></td></tr>
		<tr><td width="20%">Konsumsi Bahan Bakar</td><td><b><input type="text" name="konsumsi_bb" class="form-control" value="<?php echo $konsumsi_bb; ?>"></b></td></tr>
		<tr><td width="20%">Luas Sawah</td><td><b><input type="text" name="luas_sawah" class="form-control" value="<?php echo $luas_sawah; ?>"></b></td></tr>
		<tr><td width="20%">Kerja Efektif</td><td><b><input type="text" name="kerja_efektif" class="form-control" value="<?php echo $kerja_efektif; ?>"></b></td></tr>
		<!--<tr><td width="20%">Jumlah</td><td><b><input type="text" name="jumlah" class="form-control" value="<?php echo $jumlah; ?>"></b></td></tr>-->

		
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i>Kirim</button>
		<a href="<?php echo base_URL(); ?>index.php/welcome/masuk" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
	
	</div>
	
	</form>
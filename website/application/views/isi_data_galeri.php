<?php
$act			= "act_edit_gambar";
$id				= $data->id;
$gambar		  	= $data->gambar;
?>

<div class="navbar navbar-inverse">
	<div class="container z0">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Edit Galeri</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/welcome/prod/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table class="table-form">
		<tr><td width="20%">Gambar</td>
			<td><?php echo '<img id="gambar_up" style="width:200px; margin-bottom:20px;" src="data:image/png;base64,'.base64_encode($gambar).'"/>'?></td>
			<td><input type="file" name="image" accept="image/*"></td>
		</tr>
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i>Kirim</button>
		<a href="<?php echo base_URL(); ?>index.php/welcome/masuk" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
	
	</div>
	
	</form>
	<script type="text/javascript">
	$(":file").on("change", function(e) {
	   if(this.files[0]['type'].split('/')[0] === 'image'){
       		var gbr= document.getElementById("gambar_up");
       		gbr.src= URL.createObjectURL(this.files[0]);
   		}
   		else{
   			alert("Bukan gambar");
   			this.value = "";
   		}
	})
	</script>
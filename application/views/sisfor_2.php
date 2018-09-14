<!DOCTYPE html>
<?php include('header.php');?>
<style>
footer {
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#ECF0F1;
}
</style>
<body>
    <div class="span12"> <!-- span start -->
        <div class="header"> <!-- header start -->
        <header class="intro-header" style="background-image: url('<?php echo base_url(); ?>/asset/img/wild_flowers.png'); margin:0px;">
        <div class="container"><!-- container start -->
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Welcome</h1>
                        <hr class="small">
                        <span class="subheading">SISTEM INFORMASI POMPA AIR DI KABUPATEN LANGKAT</span>
                    </div>
                </div>
            </div>
        </div> <!-- container end -->
        </header>
        </div> <!-- header end -->
    </div> <!-- span end -->


<?php include('navbar.php');?>
<div class="container-fluid" id="today"> <!-- container fluid start -->
  <div class="alert alert-success"><Strong>Hello!</strong>
      <div class="pull-right">
        <i class="icon-calendar icon-large"></i>
          <?php
          $Today = date('y:m:d');
          $new = date('l, F d, Y', strtotime($Today));
          echo $new;
          ?>
    </div>
  </div>
</div> <!-- container fluid end -->

<div class="container-fluid">
  <div class="col-md-12">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Tabel Data Alat Pompa Air</a>
          <ul class="nav navbar-nav navbar-left">
          <li>
            <a href="#tabel_data" data-toggle="collapse">Data Alat Pompa Air</span></a>
          </li>
        </ul>
      </div>
    <div class="navbar-form navbar-right">
      <div class="form-group">
      <input class="form-control" id="filter" type="text" placeholder="Cari.." style="width:400px; height:40px;"/>
      </div>
    </div>
  </div>
  </nav>
  <div id="tabel_data">
  <table class="table table-striped" width="100%" style="margin-bottom:50px;">
    <thead>
      <tr style="background-color:#ECF0F1; height:50px;">
        <th>No</th>
        <th>Kecamatan</th>
        <th>Desa</th>
        <th>Kelompok Tani</th>
        <th>Nama Ketua</th>
        <th>Tipe Mesin</th>
        <th>Tahun</th>
        <th>Tenaga (PK)</th>
        <th>Bahan Bakar</th>
        <th>Konsumsi Bahan Bakar (L/J)</th>
        <th>Kerja Efektif</th>
        <th>Jumlah</th>
      </tr>
    </thead>
    <tbody id="tabel_data_body">
      <?php 
      if (empty($data)) {
        echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
        } else {
          $no = 1;
          foreach ($data as $dat) {
          ?>
          <tr>
          <td style="text-align: center"><?php echo $no;?></td>
          <td style="text-align: center"><?php echo $dat->kecamatan;?></td>
          <td style="text-align: center"><?php echo $dat->desa;?></td>
          <td style="text-align: center"><?php echo $dat->kelompok_tani;?></td>
          <td style="text-align: center"><?php echo $dat->ketua;?></td>
          <td style="text-align: center"><?php echo $dat->tipe_mesin;?></td>
          <td style="text-align: center"><?php echo $dat->tahun;?></td>
          <td style="text-align: center"><?php echo $dat->tenaga;?></td>
          <td style="text-align: center"><?php echo $dat->bahan_bakar;?></td>
          <td style="text-align: center"><?php echo $dat->konsumsi_bb;?></td>
          <td style="text-align: center"><?php echo $dat->kerja_efektif;?></td>
          <td style="text-align: center"><?php echo $dat->jumlah;?></td>                   
          </tr>
          <?php 
            $no++;
            }
            }
          ?>
    </tbody>
  </table>
    <div align="right"><?php echo $pagination;?></div>
  </div>
  
</div>
</div>
<?php include('footer-home.php');?>
<?php include('modal-login.php');?>
</body>
<?php include('footer.php');?>
<script type="text/javascript">
document.getElementById('today').scrollIntoView({block: 'start', behavior: 'smooth'});

$(document).ready(function(){
  $("#filter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabel_data_body tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
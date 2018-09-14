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

<div class="container-fluid" >
  <div class="col-md-12">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Tabel Data Luas Lahan</a>
          <ul class="nav navbar-nav navbar-left" id="ddp">
           <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Data Luas Lahan <span class="caret">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php foreach ($data3 as $dat) {
                ?>
                <a style="margin-left:20px;" id="pil_kec" class="dropdown-item" href="<?php echo base_URL(); ?>index.php/welcome/lahan/kecamatan/<?php echo $dat->no ?>"><font size="3"><?php echo $dat->kecamatan?></font></a>
                <div class="dropdown-divider"></div>
                <?php }?>
            </div>
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
  <div id="tabel_lahan" class="collapse">
  <p><font size="3">Kecamatan : <?php echo $data4[0]->nama_kec;?></font></p>
  <table class="table table-striped" id="tbl_lhn">
    <thead>
       <tr style="background-color:#ECF0F1;">
        <th rowspan="2" style="vertical-align:middle;"><center>No</center></th>
        <th rowspan="2" style="vertical-align:middle;"><center>Desa</center></th>
        <th colspan="2"><center>Luas Lahan Pertanian</center></th>
        <th rowspan="2" style="vertical-align:middle;"><center>Luas Lahan Non-Pertanian</center></th>
        <th rowspan="2" style="vertical-align:middle;"><center>Jumlah</center></th>
      </tr>
      <tr style="background-color:#ECF0F1;">
        <th><center>Luas Sawah</center></th>
        <th id="no"><center>Luas Bukan Sawah</center></th>
      </tr>
    </thead>
    <tbody id="tabel_data_body">
      <?php 
      $jumlah = 0;
      foreach ($temp as $dat) {
                $jumlah = $jumlah + $dat->luas_sawah + $dat->luas_bukan_sawah + $dat->luas_lahan_non_pertanian;
      }
      if (empty($data4)) {
        echo "";
        } else {
          echo '<script>
                $(document).ready(function () {
                $("#tabel_lahan").collapse("toggle");
                });</script>';
          $no = 1;
          foreach ($data4 as $dat) {
          ?>
          <tr>
          <td style="text-align: center"><?php echo $no;?></td>
          <td style="text-align: center"><?php echo $dat->desa;?></td>
          <td style="text-align: center"><?php echo $dat->luas_sawah;?></td>
          <td style="text-align: center"><?php echo $dat->luas_bukan_sawah;?></td>
          <td style="text-align: center"><?php echo $dat->luas_lahan_non_pertanian;?></td>
          <td style="text-align: center"><?php echo ($jlh = $dat->luas_sawah + $dat->luas_bukan_sawah + $dat->luas_lahan_non_pertanian);?></td>
          </tr>
          <?php 
            $no++;
            }
            }
          ?>
    </tbody>
  </table>
   <div align="right"><?php echo $pagination;?></div>
  <p><font size="3" id="nomor">Total Luas Lahan : <?php echo $jumlah?></font></p>
  </div>
</div>
</div>
<?php include('footer-home.php');?>
<?php include('modal-login.php');?>
</body>
<?php include('footer.php');?>
<script type="text/javascript">
document.getElementById('today').scrollIntoView({block: 'start', behavior: 'smooth'});

$(document).ready(function() {
  $("#ddp").on("show.bs.dropdown", function() {
      this.scrollIntoView({block: 'start', behavior: 'smooth'});
  });
});
$(document).ready(function(){
  $("#filter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabel_data_body tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
$(".collapse").on('shown.bs.collapse', function(){
    $("#tabel_data_body tr").get(0).scrollIntoView({block: 'start', behavior: 'smooth'});
    });
</script>
</html>
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
  <div>
      <?php echo $this->session->flashdata("k"); ?>
  </div>

  <form action="<?php echo base_URL(); ?>index.php/welcome/addHub" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <p style="padding-left:15px;"><b>Hubungi Kami Dengan Cara Mengisi Form Di Bawah Ini: </b></p>
  <div class="col-lg-6">
    <table  class="table-form">
    <tr><td width="20%">Nama&nbsp;</td><td><b><input type="text" name="nama" class="form-control" required></b></td></tr>
    <tr><td width="20%">Alamat Email&nbsp;</td><td><b><input type="email" name="email" class="form-control" required></b></td></tr>
    <tr><td width="20%">Subjek&nbsp;</td><td><b><input type="text" name="subjek" class="form-control" required></b></td></tr>
    <tr><td width="20%">Pesan&nbsp;</td><td><b><textarea class="form-control" rows="5" id="pesan" name="pesan" required></textarea></b></td></tr>
    <tr><td colspan="2">
    <br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i>Kirim</button>
    <button type="reset" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i>Reset</button>
    </td></tr>
    </table>
  </div>
  </form>
</div>
<?php include('footer-home.php');?>
<?php include('modal-login.php');?>
</body>
<?php include('footer.php');?>
<script type="text/javascript">
document.getElementById('today').scrollIntoView({block: 'start', behavior: 'smooth'});
</script>
</html>
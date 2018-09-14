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
  <div class="row-fluid">
  <?php if (empty($data)) {
        echo "<div class='panel-heading'>-- Tidak Ada Data --</div>";
        }
    else{
      foreach ($data as $dat) { ?>
    <div class="col-md-12">
    <table>
    <tr><td colspan="2"><i><?php echo $dat->tgl_dibuat;?></i></td><tr>
    <tr><td colspan="2"><h4><b><?php echo $dat->nama;?></b></h4></td><tr>
    <tr><td>Topik&nbsp;</td><td><?php echo $dat->topik;?></td></tr>
    <tr><td>Tanggal&nbsp;</td><td><?php echo $dat->tanggal_mulai;?> s/d <?php echo $dat->tanggal_akhir;?></td></tr>
    <tr><td>Tempat&nbsp;</td><td><?php echo $dat->tempat;?></td></tr>
    <tr><td>Pengirim&nbsp;</td><td><?php echo $dat->pengirim;?></td></tr>
    </table>
    <hr style="height:1px;border:none;color:#333;background-color:#333;">
    </div>
    
    <?php }} ?>
  </div>
</div>
<?php include('footer-home.php');?>
<?php include('modal-login.php');?>
</body>
<?php include('footer.php');?>
<script type="text/javascript">
document.getElementById('today').scrollIntoView({block: 'start', behavior: 'smooth'});
</script>
</html>
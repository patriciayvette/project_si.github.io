<!DOCTYPE html>
<?php include('header.php');?>
<style>
footer {
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#ECF0F1;
}
.carousel-inner > .item > img {
  display: block;
  height: 500px;
  background-position: center center;
  background-repeat: no-repeat;
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
<div>
  <?php echo $this->session->flashdata("k"); ?>
</div>
<div class="container-fluid"  align="center">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:900px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php if (empty($data)) {
        ?> <div class="item active">
                <img src="<?php echo base_url(); ?>/asset/img/wild_flowers.png">
                <div class="carousel-caption">
                  <h3></h3>
                  <p></p>
                </div>
              </div>
      <?php }
    else{ ?>
      <div class="item active">
        <?php echo '<img src="data:image/png;base64,'.base64_encode($data[0]->gambar).'"/>'?>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
      <?php for($x = 1; $x <= sizeof($data)-1; $x++) { ?>
      <div class="item">
        <?php echo '<img src="data:image/png;base64,'.base64_encode($data[$x]->gambar).'"/>'?>
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    <?php }} ?>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
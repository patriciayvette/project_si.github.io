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
<div>
  <?php echo $this->session->flashdata("k"); ?>
</div>
<div class="container-fluid">
    <?php if (empty($data)) {
        echo "<div class='panel-heading'></div>";
        } else {
          $no = 1;
          foreach ($data as $dat) {
            $m_konten = substr($dat->konten,0,600);
          ?>
          <div class="panel panel-default">
            <div class="col-lg-2" align="center">
              </br>
              <!--<img name="thumbnail"src="<?php echo base_url(); ?>/asset/img/image.png" style="width:150px; margin-top:20px;">-->
            </div>
              <div class="panel-heading">
                <h3 class="panel-title">
                  <a href="<?php echo base_URL(); ?>index.php/welcome/berita/baca/<?php echo $dat->id;?>">
                    <?php echo $dat->judul;?></h3>
                  </a>
              </div>
              <div class="panel-body">
                <p style='margin-left:20px;'><?php echo $m_konten;?></p>
                <a href="<?php echo base_URL(); ?>index.php/welcome/berita/baca/<?php echo $dat->id;?>">Read More</a>
                
              </div>
          </div>
            <?php 
            $no++;
            }}?>
</div>
</br>
      <!-- Content left end -->
<?php include('footer-home.php');?>
<?php include('modal-login.php');?>
<?php include('footer.php');?>
</body>
<script type="text/javascript">
document.getElementById('today').scrollIntoView({block: 'start', behavior: 'smooth'});
</script>
 
</html>

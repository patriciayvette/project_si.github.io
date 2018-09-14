<?php
$judul		= $data->judul;
$konten		= $data->konten;
$tgl		= $data->tgl_dibuat;
?>
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


<nav class="navbar navbar-inverse" style="margin-bottom:10px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Sistem Informasi</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li class="divider-vertical"></li>
                <li class="">
                <a href="<?php echo base_URL(); ?>index.php/welcome/index" data-toggle="tooltip" data-placement="bottom" title="Home">
                  <span class="glyphicon glyphicon-home">
                </span> Home</a>
        </li>
        <li class="divider-vertical"></li>
                <li class="">
                <a href="<?php echo base_URL(); ?>index.php/welcome/profil" data-toggle="tooltip" data-placement="bottom" title="Profil">
                  <span class="glyphicon glyphicon-user">
                </span> Profil</a>
        </li>
        <li class="divider-vertical"></li>
                <li class="">
                <a href="<?php echo base_URL(); ?>index.php/welcome/galeri" data-toggle="tooltip" data-placement="bottom" title="Galeri">
                  <span class="glyphicon glyphicon-picture">
                </span> Galeri</a>
        </li>
        <li class="divider-vertical"></li>
                <li class="">
                <a href="<?php echo base_URL(); ?>index.php/welcome/berita" data-toggle="tooltip" data-placement="bottom" title="Berita">
                  <span class="glyphicon glyphicon-file">
                </span> Berita</a>
        </li>
        <li class="divider-vertical"></li>
                <li class="">
                <a href="<?php echo base_URL(); ?>index.php/welcome/agenda" data-toggle="tooltip" data-placement="bottom" title="Agenda">
                  <span class="glyphicon glyphicon-book">
                </span> Agenda</a>
        </li>
        <li class="divider-vertical"></li>
                <li class="">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Hubungi Kami">
                  <span class="glyphicon glyphicon-phone-alt">
                </span> Hubungi Kami</a>
        </li>
        <li class="divider-vertical"></li>
                <li class="">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Sistem Informasi">
                  <span class="glyphicon glyphicon-list-alt">
                </span> Sistem Informasi</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#lgn" data-toggle="modal" data-tooltip="tooltip" data-placement="bottom" title="Click Here To Login" >
          <span class="glyphicon glyphicon-log-in" ></span> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
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
<center><img name="thumbnail"src="<?php echo base_url(); ?>/asset/img/image.png" style="width:300px;height:300px;"></center>
<p class="text-muted"><i><?php echo $tgl ?></i></p>
<h3 class="text-info"><?php echo $judul?></h3>
<h4><?php echo $konten?></h4>
<br>
<?php $pil = $this->uri->segment(3);
if($pil == "Hbaca"){?>
	<a href="<?php echo base_url(); ?>/index.php/welcome/index">Kembali</button>
<?php } else{ ?>
	<a href="<?php echo base_url(); ?>/index.php/welcome/berita">Kembali</button>
<?php }?>
</div>

<?php include('footer-home.php');?>
</body>
<?php include('footer.php');?>
<script type="text/javascript">
document.getElementById('today').scrollIntoView({block: 'start', behavior: 'smooth'});
</script>
</html>
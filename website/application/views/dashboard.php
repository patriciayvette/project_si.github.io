<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html>
<?php include('header.php');?>
<style type="text/css">
a.warna
{
  font-family: "Courier New";
  font-weight: lighter;
}
table {
    border-collapse: collapse;
    width: 100%;
}

td {
    text-align: left;
    padding: 10 px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
	text-align: center;
	padding: 8px;
    background-color: #1abc9c;
    color: white;
}
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
}
</style>
<body>
<nav class="navbar navbar-inverse" style="margin-bottom:0px">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/welcome/masuk">Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#"> <?php $this->load->view('/greet'); ?></a>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
          <span class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;</a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>index.php/welcome/logout"><p>Log Out</p></a></li>
            <li><a href="<?php echo base_url(); ?>index.php/welcome/password"><p>Change Password</p></a></li>
          </ul>
      </li>
      <li>
        <ul>
          &nbsp;
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
<!--isi-->
<div class="container-fluid">
  <div class="row-fluid">
    <?php if ($_SERVER['REQUEST_URI'] == "/website/index.php/welcome/masuk") { ?>
    <!--sidebar-->
    <div class="col-md-2">
    </br>     
     <?php
      if($this->session->userdata('admin_level') == "0"){
        ?>
          <div class="hero-container">
          <p>Member</p>
          <ul class="nav nav-tabs nav-stacked">
            <li><a href="#tambah_member" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Member</a></li>
            <li><a href="#tabel" data-toggle="collapse"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Data Member</a></li>
           </ul>
          </div>
        </br>
          <div class="hero-container">
          <p>Profil dan Galeri</p>
          <ul class="nav nav-tabs nav-stacked">
          <li><a href="#tabel3" data-toggle="collapse"><i class="glyphicon glyphicon-user"></i>&nbsp;Ubah Profil</a></li>
          <li><a href="#tabel8" data-toggle="collapse"><i class="glyphicon glyphicon-picture"></i>&nbsp;Ubah Galeri</a></li>
          </ul>
        </div>

     <?php }?>
          </br>
          <div class="hero-container">
          <p>Data Sistem Informasi</p>
          <ul class="nav nav-tabs nav-stacked">
            <li><a href="#tambah_data" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Data</a></li>
            <li><a href="#tabel2" data-toggle="collapse"><i class="glyphicon glyphicon-file"></i>&nbsp;Lihat Data</a></li>
          </ul>
          </div>
          </br> 
          <div class="hero-container">
          <p> Berita, Agenda dan Pesan</p>
          <ul class="nav nav-tabs nav-stacked">
          <li><a href="#tambah_berita" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Berita</a></li>
          <li><a href="#tabel4" data-toggle="collapse"><i class="glyphicon glyphicon-file"></i>&nbsp;Lihat Berita</a></li>
          </br>
          <li><a href="#tambah_agenda" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Agenda</a></li>
          <li><a href="#tabel6" data-toggle="collapse"><i class="glyphicon glyphicon-book"></i>&nbsp;Lihat Agenda</a></li>
          </br>
          <li><a href="#tabel7" data-toggle="collapse"><i class="glyphicon glyphicon-envelope"></i>&nbsp;Lihat Pesan</a></li>
          </ul>
          </div>
          </br>
          <div class="hero-container">
          <p> Kecamatan dan Desa</p>
          <ul class="nav nav-tabs nav-stacked">
          <li><a href="#tabel5" data-toggle="collapse"><i class="glyphicon glyphicon-file"></i>&nbsp;Lihat Data Kecamatan dan Desa</a></li>
          <li><a href="#tambah_kecamatan" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Data Kecamatan</a></li>
          <li><a href="#tambah_desa" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambah Data Desa</a></li>
          </ul>
          </div>      
    <?php
    }else{ ?>
      <div class="col-md-2">
        <br>

      </div>
    <?php
    }
    ?>

   </div>
   <!--mainbar-->
    <div class="col-md-10">
              <!--heloo-->
       <div class="container-fluid" style="margin-top:10px">
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
          </div>
          <!--hello-->
          <div id="cari" class="navbar-form collapse">
            <div class="form-group">
            <input class="form-control" id="filter" type="text" placeholder="Cari.." style="width:100%; height:40px;"/>
            </div>
          </div>
          <hr>
          <a href="#"> <?php $this->load->view('/'.$page); ?></a>
          <?php echo $this->session->flashdata("k");?>
          <div id="tabel" class="collapse">
              <table width="100%">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Level</th>
                <th>Action</th>
               </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data)) {
                  echo "<tr><td colspan='4'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data as $dat) {
                ?>
                  <tr>
                  <td style="text-align: center"><?php echo $no;?></td>
                  <td style="text-align: center"><?php echo $dat->nama;?></td>
                  <td style="text-align: center"><?php echo $dat->level;?></td>   
                  <td>
                    <center>
                    <div class="btn-group">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/edit/<?php echo $dat->id?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-file"></i></a>     
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/del/<?php echo $dat->id?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
            </table>
          </div>

          <div id="tabel2" class="collapse">
              <table width="100%">
              <thead>
              <tr>
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
                <th>Action</th>
               </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data2)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data2 as $dat) {
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
                  <td>
                    <center>
                    <div class="btn">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/edit_data/<?php echo $dat->no?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-file"></i></a>     
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/del_data/<?php echo $dat->no?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
              </table>
          </div>

          <div id="tabel3" class="collapse">
              <table width="100%">
              <thead>
              <tr>
                <th>Gambar</th>
                <th>Deskripsi Profil</th>
                <th>Action</th>
               </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data3)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data3 as $dat) {
                ?>
                  <tr>
                  <td>
                    <?php echo '<img name="thumbnail" style="width:200px; margin:30px;" src="data:image/png;base64,'.base64_encode($dat->gambar).'"/>'?></td>
                  <td style="text-align: left"></br><?php echo $dat->deskripsi;?></td>           
                  <td>
                    <center>
                    <div class="btn">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/edit_profil/<?php echo $dat->id?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-file"></i></a>     
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
              </table>
          </div>

          <div id="tabel4" class="collapse">
              <table width="100%">
              <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Post</th>
                <th>Judul Berita</th>
                <th>Konten Berita</th>
               </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data4)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data4 as $dat) {
                ?>
                  <tr>
                  <td style="text-align: left"></br><?php echo $no;?></td>
                  <td style="text-align: left"></br><?php echo $dat->tgl_dibuat;?></td>  
                  <td style="text-align: left"></br><?php echo $dat->judul;?></td>
                  <td style="text-align: left"></br><?php echo $dat->konten;?></td>         
                  <td>
                    <center>
                    <div class="btn">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/edit_data_berita/<?php echo $dat->id?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-file"></i></a>     
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/del_data_berita/<?php echo $dat->id?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
              </table>
          </div>

          <div id="tabel5" class="collapse">
              <table width="100%">
              <thead>
                <tr>
                <th rowspan="2" style="vertical-align:middle;"><center>No</center></th>
                <th rowspan="2" style="vertical-align:middle;"><center>Kecamatan</center></th>
                <th rowspan="2" style="vertical-align:middle;"><center>Desa</center></th>
                <th colspan="2"><center>Luas Lahan Pertanian</center></th>
                <th rowspan="2" style="vertical-align:middle;"><center>Luas Lahan Non-Pertanian</center></th>
                <th rowspan="2" style="vertical-align:middle;"><center>Jumlah</center></th>
                <th rowspan="2" style="vertical-align:middle;"><center>Action</center></th>
                </tr>
              <tr>
                <th><center>Luas Sawah</center></th>
                <th><center>Luas Bukan Sawah</center></th>
              </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data8)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data8 as $dat) {
                ?>
                  <tr>
                  <td style="text-align: center"><?php echo $no;?></td>
                  <td style="text-align: center"><?php echo $dat->nama_kec;?></td>  
                  <td style="text-align: center"><?php echo $dat->desa;?></td>
                  <td style="text-align: center"><?php echo $dat->luas_sawah;?></td> 
                  <td style="text-align: center"><?php echo $dat->luas_bukan_sawah;?></td>
                  <td style="text-align: center"><?php echo $dat->luas_lahan_non_pertanian;?></td>
                  <td style="text-align: center"><?php echo ($jlh = $dat->luas_sawah + $dat->luas_bukan_sawah + $dat->luas_lahan_non_pertanian);?></td>          
                  <td>
                    <center>
                    <div class="btn">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/edit_data_desa/<?php echo $dat->no?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-file"></i></a>     
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/del_data_desa/<?php echo $dat->no?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
              </table>
          </div>

          <div id="tabel6" class="collapse">
              <table width="100%">
              <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Dibuat</th>
                <th>Nama</th>
                <th>Topik</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Tempat</th>
                <th>Pengirim</th>
                <th>Action</th>
               </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data5)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data5 as $dat) {
                ?>
                  <tr>
                  <td style="text-align: center"><?php echo $no; ?></td>
                  <td style="text-align: center"><?php echo $dat->tgl_dibuat; ?></td>
                  <td style="text-align: center"><?php echo $dat->nama; ?></td>   
                  <td style="text-align: center"><?php echo $dat->topik; ?></td>
                  <td style="text-align: center"><?php echo $dat->tanggal_mulai; ?></td>
                  <td style="text-align: center"><?php echo $dat->tanggal_akhir; ?></td>
                  <td style="text-align: center"><?php echo $dat->tempat; ?></td>
                  <td style="text-align: center"><?php echo $dat->pengirim; ?></td>        
                  <td>
                    <center>
                    <div class="btn">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/edit_agenda/<?php echo $dat->id?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-file"></i></a>     
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/del_agenda/<?php echo $dat->id?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
              </table>
          </div>

          <div id="tabel7" class="collapse">
              <table width="100%">
              <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Subjek</th>
                <th>Pesan</th>
                <th>Action</th>
               </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data6)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data6 as $dat) {
                ?>
                  <tr>
                  <td style="text-align: center"></br><?php echo $no;?></td>
                  <td style="text-align: center"></br><?php echo $dat->tanggal;?></td>  
                  <td style="text-align: center"></br><?php echo $dat->nama;?></td>
                  <td style="text-align: center"></br><?php echo $dat->email;?></td>
                  <td style="text-align: center"></br><?php echo $dat->subjek;?></td>
                  <td style="text-align: left"></br><?php echo $dat->pesan;?></td>           
                  <td>
                    <center>
                    <div class="btn">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/del_pesan/<?php echo $dat->id?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="glyphicon glyphicon-trash"></i></a>
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
              </table>
          </div>

          <div id="tabel8" class="collapse">
              <table width="100%">
              <thead>
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Action</th>
               </tr>
              </thead>
              <tbody id="tabel_data_body">
                <?php 
                if (empty($data9)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {
                  $no = 1;
                  foreach ($data9 as $dat) {
                ?>
                  <tr>
                  <td style="text-align: center"></br><?php echo $no;?></td>
                  <td style="text-align: center"><?php echo '<img id="gambar_up" style="width:200px; margin-bottom:20px;" src="data:image/png;base64,'.base64_encode($dat->gambar).'"/>'?></td>             
                  <td>
                    <center>
                    <div class="btn">
                      <a href="<?php echo base_URL()?>index.php/welcome/prod/edit_gambar/<?php echo $dat->id?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="glyphicon glyphicon-file"></i></a>
                      <!--<a href="<?php #echo base_URL()?>index.php/welcome/prod/del_gambar/<?php #echo $dat->id?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="glyphicon glyphicon-trash"></i></a>
                    -->
                    </div>
                  </center>
                  </td>         
                  </tr>
                <?php 
                  $no++;
                  }
                }
                ?>
            </tbody>
              </table>
          </div>

      </div> 
    <!--mainbar-->
    </div>
    </div>
  </div>
<!--modal-->
<div class="modal fade" id="tambah_member" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header"><div class="alert alert-info">Please Enter Required Details Below.</div></div>
        <div class="modal-body"><!-- modal body-->
          <form class="form-horizontal" action="<?php echo base_URL(); ?>index.php/welcome/do_tambah_member" method="post">
            <div class="control-group"><!-- control group-->
              <label for="nama"><span class="glyphicon glyphicon-user"></span> Nama</label>
              <input type="text" class="form-control"name="nama" required placeholder="Enter user name">
            </div><!-- control group end-->
            <div class="control-group"><!-- control group-->
              <label for="uid"><span class="glyphicon glyphicon-credit-card"></span> Userid</label>
              <input type="text" class="form-control" name="uid" required placeholder="Enter user id">
            </div><!-- control group end-->
            <div class="control-group"><!-- control group-->
              <label for="level"><span class="glyphicon glyphicon-stats"></span> Level</label>
              <br>
                <select name="lvl" class="form-control">
                  <option value=""disabled selected required>Select User Level</option>
                  <option value="0">Admin</option>
                  <option value="1">User</option>
              </select>
            </div><!-- control group end-->
            <div class="control-group"><!-- control group-->
              <label for="pwd"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="pwd" required placeholder="Enter password">
            </div><!-- control group end-->
        
        <div class="modal-footer"><!-- modal footer-->
          <button type="submit" class="btn btn-success btn-default pull-left"><span class="glyphicon glyphicon-off"></span> Add</button>
          <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div><!-- modal footer end-->
        </form>
      </div><!-- modal body end-->
    </div><!-- modal content ends-->
  </div>
</div><!--modal member ends-->

<!--modal-->
<div class="modal fade" id="tambah_data" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header"><div class="alert alert-info">Please Enter Required Details Below.</div></div>
        <div class="modal-body"><!-- modal body-->
          <form class="form-horizontal" action="<?php echo base_URL(); ?>index.php/welcome/do_tambah_data" method="post">
            <div class="control-group">
              <label for="kecamatan">Kecamatan</label>
              <select class="form-control" id="modal_nama_kecamatan" name="modal_nama_kecamatan">
              <?php 
                if (empty($data7)) {
                  echo "<tr><td colspan='12'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
                } else {?>
                  <option value="">-</option>
                <?php foreach ($data7 as $dat) {
                ?>
                <option value="<?php echo $dat->no ?>"><?php echo $dat->kecamatan?></option>
                <?php }} ?>
              </select>
            </div>
            <input type="hidden" name="kc" id="kc"/>
            <div class="control-group">
              <label for="desa"></span> Desa</label>
              <select class="form-control" id="modal_nama_desa" name="modal_nama_desa">
              </select>
            </div>
            <div class="control-group">
              <label for="k_tani">Kelompok Tani</label>
              <input type="text" class="form-control" name="k_tani" required placeholder="Nama Kelompok Tani">
            </div>
            <div class="control-group">
              <label for="ketua">Nama Ketua</label>
              <input type="text" class="form-control" name="ketua" required placeholder="Nama Ketua">
            </div>
            <div class="control-group">
              <label for="tipe_mesin">Tipe Mesin</label>
              <input type="text" class="form-control" name="tipe_mesin" required placeholder="Tipe Mesin">
            </div>
            <div class="control-group">
              <label for="tahun">Tahun</label>
              <input type="number" class="form-control" name="tahun" required placeholder="Tahun">
            </div>
            <div class="control-group">
              <label for="tenaga">Tenaga (PK)</label>
              <input type="number" class="form-control" name="tenaga" required placeholder="Tenaga(PK)">
            </div>
            <div class="control-group">
              <label for="bb">Bahan Bakar</label>
              <input type="text" class="form-control" name="bb" required placeholder="Bahan Bakar">
            </div>
             <div class="control-group">
              <label for="k_bb">Konsumsi Bahan Bakar (L/J)</label>
              <input type="number" class="form-control" name="k_bb" required placeholder="Konsumsi Bahan Bakar(L/J)">
            </div>
            <div class="control-group">
              <label for="kerja_efektif">Kerja Efektif</label>
              <input type="number" class="form-control" name="kerja_efektif" required placeholder="Kerja Efektif">
            </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-default pull-left"><span class="glyphicon glyphicon-off"></span> Add</button>
          <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
        </form>
      </div><!-- modal body end-->
    </div><!-- modal content ends-->
  </div>
</div><!--modal data ends-->

<!--modal-->
<div class="modal fade" id="tambah_kecamatan" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header"><div class="alert alert-info">Please Enter Required Details Below.</div></div>
        <div class="modal-body"><!-- modal body-->
          <form class="form-horizontal" action="<?php echo base_URL(); ?>index.php/welcome/do_tambah_kecamatan" method="post">
            <div class="control-group">
              <label for="kecamatan">Nama Kecamatan</label>
              <input type="text" class="form-control"name="kecamatan" required placeholder="Nama Kecamatan">
            </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-default pull-left"><span class="glyphicon glyphicon-off"></span> Add</button>
          <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
        </form>
      </div><!-- modal body end-->
    </div><!-- modal content ends-->
  </div>
</div><!--modal kecamatan ends-->

<!--modal-->
<div class="modal fade" id="tambah_desa" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header"><div class="alert alert-info">Please Enter Required Details Below.</div></div>
        <div class="modal-body"><!-- modal body-->
          <form class="form-horizontal" action="<?php echo base_URL(); ?>index.php/welcome/do_tambah_desa" method="post">
            <div class="control-group">
              <label for="kecamatan">Nama Kecamatan</label>
              <select class="form-control" id="kec" name="nama_kecamatan">
              <?php 
                if (empty($data7)) { ?>
                <option>-</option>
                <?php } else {foreach ($data7 as $dat) {
                ?>
                <option value="<?php echo $dat->no ?>|<?php echo $dat->kecamatan?>"><?php echo $dat->kecamatan?></option>
                <?php }} ?>
              </select>
            </div>
            <div class="control-group">
              <label for="desa">Nama Desa</label>
              <input type="text" class="form-control" name="desa" required placeholder="Nama Desa">
            </div>
            <div class="control-group">
              <label for="luas_sawah">Luas Sawah</label>
              <input type="number" class="form-control" name="luas_sawah" required placeholder="Luas Sawah">
            </div>
             <div class="control-group">
              <label for="luas_bukan_sawah">Luas Bukan Sawah</label>
              <input type="number" class="form-control" name="luas_bukan_sawah" required placeholder="Luas Bukan Sawah">
            </div>
            <div class="control-group">
              <label for="luas_lahan_non_pertanian">Luas Lahan Non Pertanian</label>
              <input type="number" class="form-control" name="luas_lahan_non_pertanian" required placeholder="Luas Lahan Non Pertanian">
            </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-default pull-left"><span class="glyphicon glyphicon-off"></span> Add</button>
          <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
        </form>
      </div><!-- modal body end-->
    </div><!-- modal content ends-->
  </div>
</div><!--modal desa ends-->

<!--modal-->
<div class="modal fade" id="tambah_berita" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header"><div class="alert alert-info">Please Enter Required Details Below.</div></div>
        <div class="modal-body"><!-- modal body-->
          <form class="form-horizontal" action="<?php echo base_URL(); ?>index.php/welcome/do_tambah_berita" method="post">
            <div class="control-group">
              <label for="judul">Judul</label>
              <input type="text" class="form-control" name="judul" required placeholder="Judul Berita">
            </div>
            <div class="control-group">
              <label for="konten">Konten</label>
              <textarea rows="7" class="form-control" name="konten" required placeholder="Konten Berita"></textarea>
            </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-default pull-left"><span class="glyphicon glyphicon-off"></span> Add</button>
          <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
        </form>
      </div><!-- modal body end-->
    </div><!-- modal content ends-->
  </div>
</div><!--modal berita ends-->

<!--modal-->
<div class="modal fade" id="tambah_agenda" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header"><div class="alert alert-info">Please Enter Required Details Below.</div></div>
        <div class="modal-body"><!-- modal body-->
          <form class="form-horizontal" action="<?php echo base_URL(); ?>index.php/welcome/do_tambah_agenda" method="post">
            <div class="control-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" required placeholder="Nama Agenda">
            </div>
            <div class="control-group">
              <label for="topik">Topik</label>
              <input type="text" class="form-control" name="topik" required placeholder="Topik Agenda">
            </div>
            <div class="control-group">
              <label for="tgl1">Tanggal Mulai</label>
              <input type="date" class="form-control" name="tgl1" required placeholder="Tanggal Mulai">
            </div>
            <div class="control-group">
              <label for="tgl2">Tanggal Selesai</label>
              <input type="date" class="form-control" name="tgl2" required placeholder="Tanggal Selesai">
            </div>
            <div class="control-group">
              <label for="tempat">Tempat</label>
              <input type="text" class="form-control" name="tempat" required placeholder="Tempat">
            </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-default pull-left"><span class="glyphicon glyphicon-off"></span> Add</button>
          <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
        </form>
      </div><!-- modal body end-->
    </div><!-- modal content ends-->
  </div>
</div><!--modal agenda ends-->
<?php include('footer.php');?>

<script>
$(document).ready(function(){
  $("#filter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tabel_data_body tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
$(document).ready(function () {
  $('#modal_nama_kecamatan').on('change', function() {
      var optionSelected = $("option:selected", this);
      var valueSelected = this.value;
      var element = document.getElementById('kc');
      element.value=optionSelected.text();
      $.ajax({
        url: "<?php echo base_URL(); ?>index.php/welcome/data_desa",
        type: "POST",
        data: {"data" : valueSelected},
        datatype:"text",
        success: function(result){
            var hasil = $.parseJSON(result);
            if($("#modal_nama_desa option").length!=0){
                $('#modal_nama_desa').find('option').remove()
              }  
            $.each(hasil, function(i) {
              console.log(hasil[i]['desa']);
              var desa = hasil[i]['desa'];              
              $("#modal_nama_desa").append('<option value='+desa+'>'+desa+'</option>')
            });
        }
      });
  });
});
$(document).ready(function () {
  $("#tabel").on("show.bs.collapse", function() {
      $("#cari").collapse('show');
      $("#tabel2").collapse('hide');
      $("#tabel3").collapse('hide');
      $("#tabel4").collapse('hide');
      $("#tabel5").collapse('hide');
      $("#tabel6").collapse('hide');
      $("#tabel7").collapse('hide');
      $("#tabel8").collapse('hide');
  });
});
$(document).ready(function () {
  $("#tabel2").on("show.bs.collapse", function() {
    $("#cari").collapse('show');
      $("#tabel").collapse('hide');
      $("#tabel3").collapse('hide');
      $("#tabel4").collapse('hide');
      $("#tabel5").collapse('hide');
      $("#tabel6").collapse('hide');
      $("#tabel7").collapse('hide');
      $("#tabel8").collapse('hide');
  });
});
$(document).ready(function () {
  $("#tabel3").on("show.bs.collapse", function() {
    $("#cari").collapse('show');
      $("#tabel2").collapse('hide');
      $("#tabel4").collapse('hide');
      $("#tabel5").collapse('hide');
      $("#tabel6").collapse('hide');
      $("#tabel7").collapse('hide');
      $("#tabel8").collapse('hide');
      $("#tabel").collapse('hide');
  });
});
$(document).ready(function () {
  $("#tabel4").on("show.bs.collapse", function() {
    $("#cari").collapse('show');
      $("#tabel").collapse('hide');
      $("#tabel2").collapse('hide');
      $("#tabel3").collapse('hide');
      $("#tabel5").collapse('hide');
      $("#tabel6").collapse('hide');
      $("#tabel7").collapse('hide');
      $("#tabel8").collapse('hide');
  });
});
$(document).ready(function () {
  $("#tabel5").on("show.bs.collapse", function() {
    $("#cari").collapse('show');
      $("#tabel").collapse('hide');
      $("#tabel2").collapse('hide');
      $("#tabel3").collapse('hide');
      $("#tabel4").collapse('hide');
      $("#tabel6").collapse('hide');
      $("#tabel7").collapse('hide');
      $("#tabel8").collapse('hide');
  });
});
$(document).ready(function () {
  $("#tabel6").on("show.bs.collapse", function() {
    $("#cari").collapse('show');
      $("#tabel").collapse('hide');
      $("#tabel2").collapse('hide');
      $("#tabel3").collapse('hide');
      $("#tabel4").collapse('hide');
      $("#tabel5").collapse('hide');
      $("#tabel7").collapse('hide');
      $("#tabel8").collapse('hide');
  });
});
$(document).ready(function () {
  $("#tabel7").on("show.bs.collapse", function() {
    $("#cari").collapse('show');
      $("#tabel").collapse('hide');
      $("#tabel2").collapse('hide');
      $("#tabel3").collapse('hide');
      $("#tabel5").collapse('hide');
      $("#tabel6").collapse('hide');
      $("#tabel4").collapse('hide');
      $("#tabel8").collapse('hide');
  });
});
$(document).ready(function () {
  $("#tabel8").on("show.bs.collapse", function() {
    $("#cari").collapse('show');
      $("#tabel").collapse('hide');
      $("#tabel2").collapse('hide');
      $("#tabel3").collapse('hide');
      $("#tabel5").collapse('hide');
      $("#tabel6").collapse('hide');
      $("#tabel4").collapse('hide');
      $("#tabel7").collapse('hide');
  });
});
</script>

</body>
</html>

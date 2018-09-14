<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Author Patricia Y.C Sipahutar
	 * Copyright 2018
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$a['data'] = $this->db->query("SELECT * FROM info")->result();
		$a['page']	= "gr";
		$this->load->view('Home',$a);
	}
	public function masuk() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}
		$a['data'] = $this->db->query("SELECT * FROM user")->result();
		$a['data2'] = $this->db->query("SELECT * FROM data_alat")->result();
		$a['data3'] = $this->db->query("SELECT * FROM profil")->result();
		$a['data4'] = $this->db->query("SELECT * FROM info")->result();
		$a['data5'] = $this->db->query("SELECT * FROM agenda")->result();
		$a['data6'] = $this->db->query("SELECT * FROM pesan ORDER BY tanggal ASC")->result();
		$a['data7'] = $this->db->query("SELECT * FROM data_kecamatan")->result();
		$a['data9'] = $this->db->query("SELECT * FROM galeri")->result();
		$a['data8'] = $this->db->query("SELECT * FROM data_desa ORDER BY nama_kec")->result();
		$a['page']	= "gr";
		$this->load->view('dashboard', $a);
	}
	public function profil(){
		$a['data'] = $this->db->query("SELECT * FROM profil")->result();
		$a['page']	= "gr";
		$this->load->view('profil',$a);
	}
	public function galeri(){
		$a['data'] = $this->db->query("SELECT * FROM galeri")->result();
		$a['page']	= "gr";
		$this->load->view('galeri',$a);
	}
	public function hub(){
		$this->load->view('hub');
	}
	public function agenda(){
		$a['data'] = $this->db->query("SELECT * FROM agenda")->result();
		$a['page']	= "gr";
		$this->load->view('agenda',$a);
	}
	public function berita(){
		$a['data'] = $this->db->query("SELECT * FROM info")->result();
		$a['page']	= "gr";

		$pil = $this->uri->segment(3);
		$id	 = $this->uri->segment(4);
		if($pil == "baca"){
			$a['data'] 		= $this->db->query("SELECT * FROM info WHERE id = '$id'")->row();
			$a['page'] 		= "gr";
			$this->load->view('isi_berita',$a);
		}else
		if($pil == "Hbaca"){
			$a['data'] 		= $this->db->query("SELECT * FROM info WHERE id = '$id'")->row();
			$a['page'] 		= "gr";
			$this->load->view('isi_berita',$a);
		}else{
			$this->load->view('berita',$a);
		}
		
	}
	public function lahan(){
		$pil = $this->uri->segment(3);
		$no	 = $this->uri->segment(4);

		$a['data2'] = $this->db->query("SELECT * FROM data_desa")->result();
		$a['data3'] = $this->db->query("SELECT * FROM data_kecamatan")->result();
		if($pil == "kecamatan"){
			$this->load->model('model_page');
			$this->load->library('pagination');
			$config['base_url']=base_url()."index.php/welcome/lahan/kecamatan/$no";
			$config['total_rows'] = $this->db->query("SELECT * FROM data_desa where no_kecamatan = '$no';")->num_rows();
			$config['per_page']=10;
	        $config['num_links'] = 2;
	        $config['uri_segment']=5;
	        $config['no']=$no;

	        $config['full_tag_open'] = "<ul class='pagination'>";
			$config['full_tag_close'] ="</ul>";
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
			$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
			$config['next_tag_open'] = "<li>";
			$config['next_tagl_close'] = "</li>";
			$config['prev_tag_open'] = "<li>";
			$config['prev_tagl_close'] = "</li>";
			$config['first_tag_open'] = "<li>";
			$config['first_tagl_close'] = "</li>";
			$config['last_tag_open'] = "<li>";
			$config['last_tagl_close'] = "</li>";

	        $this->pagination->initialize($config);

	        $a['pagination'] = $this->pagination->create_links();
	        $a['temp'] = $this->db->query("SELECT * FROM data_desa where no_kecamatan = '$no'")->result();
	        $a['data4']=$this->model_page->getDataLahan($config);
		}
		$a['page']	= "gr";
		$this->load->view('sisfor',$a);
	}
	public function pompa_air(){
		$this->load->model('model_page');
		$this->load->library('pagination');
		$config['base_url']=base_url()."index.php/welcome/pompa_air";
        $config['total_rows']= $this->db->query("SELECT * FROM data_alat;")->num_rows();
        $config['per_page']=10;
        $config['num_links'] = 2;
        $config['uri_segment']=3;

        $config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $a['pagination'] = $this->pagination->create_links();
        $a['data']=$this->model_page->getDataAlat($config);
		$a['page']	= "gr";
		$this->load->view('sisfor_2',$a);
	}
	public function addHub(){
		$nama 					= addslashes($this->input->post('nama'));
		$email 					= addslashes($this->input->post('email'));
		$subjek					= addslashes($this->input->post('subjek'));
		$pesan 					= addslashes($this->input->post('pesan'));
		$timestamp 				= date("Y-m-d H:i:s");
		$a['data'] = $this->db->query("INSERT INTO pesan(nama,email,subjek,pesan,tanggal) values ('$nama','$email','$subjek','$pesan','$timestamp')");
		if ($this->db->affected_rows() == 1){
				$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-success\" id=\"alert\">Pesan berhasil dikirim</div>");
			}else{
				$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-danger\" id=\"alert\">Pesan gagal dikirim</div>");			
			}	
		redirect('welcome/hub');

	}
	public function login() {
		$a['data'] = $this->db->query("SELECT * FROM info")->result();
		$a['page']	= "gr";
		$this->load->view('Home',$a);
	}
	public function do_login() {
		$uid 		= $this->security->xss_clean($this->input->post('uid'));
        $pass 		= md5($this->security->xss_clean($this->input->post('psw')));
         
		$q_cek	= $this->db->query("SELECT * FROM user WHERE userid = '".$uid."' AND pass = '".$pass."'");
		$j_cek	= $q_cek->num_rows();
		$d_cek	= $q_cek->row();
		
        if($j_cek == 1) {
            $data = array(
            		'admin_idu' => $d_cek->id,
                    'admin_id' => $d_cek->userid,
                    'admin_nama' => $d_cek->nama,
                    'admin_level' => $d_cek->level,
					'admin_valid' => true
                    );
            $this->session->set_userdata($data);
            redirect('/welcome/masuk');
        } else {	
			$this->session->set_flashdata("k", "<div id=\"alert\" class=\"alert alert-danger\">Wrong username or Password</div>");
			redirect('/welcome/login');
		}
	}

	public function password() {
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("index.php/welcome/login");
		}
		
		$pil			= $this->uri->segment(3);
		$idu			= $this->session->userdata('admin_id');
		$idp			= $this->session->userdata('admin_idu');
		
		//var post
		$p1				= md5($this->input->post('p1'));
		$p2				= md5($this->input->post('p2'));
		$p3				= md5($this->input->post('p3'));
		
		if ($pil == "simpan") {
			$old_pass	= $this->db->query("SELECT pass FROM user WHERE id = $idp")->row();
			//echo 
			
			if ($old_pass->pass != $p1) {
				$this->session->set_flashdata('k', '<div id="alert" class="alert alert-error">Password Lama tidak sama</div>');
				redirect('welcome/password');
			} else if ($p2 != $p3) {
				$this->session->set_flashdata('k', '<div id="alert" class="alert alert-error">Password Baru 1 dan 2 tidak sama</div>');
				redirect('welcome/password');
			} else {
				$this->db->query("UPDATE user SET pass = '$p3' WHERE id = $idp");
				$this->session->set_flashdata('k', '<div id="alert" class="alert alert-success">Password berhasil diperbaharui</div>');
				redirect('welcome/password');
			}
		} else {
			$a['page']	= "pass";
		}
		$this->load->view('dashboard', $a);
	}

	public function logout(){
        $this->session->sess_destroy();
		redirect('/welcome/login');
    }

    public function do_tambah_member()
    {
    	if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}

		$level 						= addslashes($this->input->post('lvl'));
		$user_id 					= addslashes($this->input->post('uid'));
		$pass 						= md5($this->input->post('pwd'));
		$nama 						= addslashes($this->input->post('nama'));

		$a['data'] = $this->db->query("INSERT INTO user(level,userid,pass,nama) values ('$level','$user_id','$pass','$nama')");
		if ($this->db->affected_rows() == 1){
		$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-success\" id=\"alert\">Data Berhasil Dimasukkan</div>");
		}else{
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Data Gagal Dimasukkan</div>");			
		}
		$a['page']	= "greet";
		redirect('welcome/masuk');
    }
    public function do_tambah_kecamatan()
    {
    	if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}

		$kecamatan 					= addslashes($this->input->post('kecamatan'));
		
		$a['data'] = $this->db->query("INSERT INTO data_kecamatan(kecamatan) values ('$kecamatan')");
		if ($this->db->affected_rows() == 1){
		$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-success\" id=\"alert\">Data Berhasil Dimasukkan</div>");
		}else{
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Data Gagal Dimasukkan</div>");			
		}
		$a['page']	= "greet";
		redirect('welcome/masuk');
    }
    public function data_desa(){
		$nomor = $this->input->post('data');
		$a = $this->db->query("SELECT * FROM data_desa where no_kecamatan = '$nomor'")->result_array();
		echo json_encode($a);	
    }
    public function do_tambah_desa()
    {
    	if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}

		$sec 						= addslashes($this->input->post('nama_kecamatan'));
		$data_kec 					= explode("|", $sec);
		$kec 						= addslashes($this->input->post('na_kec'));
		$desa 						= addslashes($this->input->post('desa'));
		$l1							= addslashes($this->input->post('luas_sawah'));
		$l2							= addslashes($this->input->post('luas_bukan_sawah'));
		$l3							= addslashes($this->input->post('luas_lahan_non_pertanian'));
		$a['data'] = $this->db->query("INSERT INTO data_desa(no_kecamatan,nama_kec,desa,luas_sawah,luas_bukan_sawah,luas_lahan_non_pertanian) values ('$data_kec[0]','$data_kec[1]','$desa','$l1','$l2','$l3')");
		if ($this->db->affected_rows() == 1){
		$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-success\" id=\"alert\">Data Berhasil Dimasukkan</div>");
		}else{
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Data Gagal Dimasukkan</div>");			
		}
		$a['page']	= "greet";
		redirect('welcome/masuk');
    }
    public function do_tambah_data(){
    	if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}

		$kecamatan 						= addslashes($this->input->post('kc'));
		$desa 							= addslashes($this->input->post('modal_nama_desa'));
		$k_tani 						= addslashes($this->input->post('k_tani'));
		$ketua	 						= addslashes($this->input->post('ketua'));
		$tipe_mesin 					= addslashes($this->input->post('tipe_mesin'));
		$tahun							= addslashes($this->input->post('tahun'));
		$tenaga 						= addslashes($this->input->post('tenaga'));
		$bahan_bakar 					= addslashes($this->input->post('bb'));
		$kbb 							= addslashes($this->input->post('k_bb'));
		$kerja_efektif 					= addslashes($this->input->post('kerja_efektif'));
		#$jumlah pakai hitungan
		
		$a['data'] = $this->db->query("INSERT INTO data_alat(kecamatan,desa,kelompok_tani,ketua,tipe_mesin,tenaga,bahan_bakar,konsumsi_bb,kerja_efektif,tahun) values ('$kecamatan','$desa','$k_tani','$ketua','$tipe_mesin','$tenaga','$bahan_bakar','$kbb','$kerja_efektif','$tahun')");
		if ($this->db->affected_rows() == 1){
		$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-success\" id=\"alert\">Data Berhasil Dimasukkan</div>");
		}else{
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Data Gagal Dimasukkan</div>");			
		}
		$a['page']	= "greet";
		redirect('welcome/masuk');	
    }

   	public function do_tambah_berita(){
   		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}

		$tanggal						= addslashes(date("Y-m-d"));
		$judul							= addslashes($this->input->post('judul'));
		$konten							= addslashes($this->input->post('konten'));
		$a['data'] = $this->db->query("INSERT INTO info(tgl_dibuat,judul,konten) values ('$tanggal','$judul','$konten')");
		if ($this->db->affected_rows() == 1){
		$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-success\" id=\"alert\">Data Berhasil Dimasukkan</div>");
		}else{
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Data Gagal Dimasukkan</div>");			
		}
		$a['page']	= "greet";
		redirect('welcome/masuk');	
   	}
   	public function do_tambah_agenda(){
   		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}

		$tanggal		= addslashes(date("Y-m-d"));
		$nama			= addslashes($this->input->post('nama'));
		$topik 			= addslashes($this->input->post('topik'));
		$tgl_1			= addslashes($this->input->post('tgl1'));
		$tgl_2      	= addslashes($this->input->post('tgl2'));
		$tempat     	= addslashes($this->input->post('tempat'));
		$pengirim   	= addslashes($this->session->userdata('admin_id'));
		$a['data'] = $this->db->query("INSERT INTO agenda(tgl_dibuat,nama,topik,tanggal_mulai,tanggal_akhir,tempat,pengirim) values ('$tanggal','$nama','$topik','$tgl_1','$tgl_2','$tempat','$pengirim')");
		if ($this->db->affected_rows() == 1){
		$this->session->set_flashdata("k", "<div class=\"alert alert-dismissable alert-success\" id=\"alert\">Data Berhasil Dimasukkan</div>");
		}else{
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Data Gagal Dimasukkan</div>");			
		}
		$a['page']	= "greet";
		redirect('welcome/masuk');	
   	}
    public function prod(){
    	if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}
			$pil = $this->uri->segment(3);
			$id	 = $this->uri->segment(4);
			$userr	= $this->session->userdata('admin_id');

			if($pil == "edit")
				{
					$a['data'] 		= $this->db->query("SELECT * FROM user WHERE id = '$id'")->row();
					$a['page'] 		= "isi_data";
				}
			else
			if($pil == "act_edit")
				{
					$idp					= addslashes($this->input->post('idp'));
					$nama					= addslashes($this->input->post('nama'));
					$level					= addslashes($this->input->post('lvl'));
					$this->db->query("UPDATE user SET nama = '$nama', level= '$level' where id = '$idp'");
					if ($this->db->affected_rows() == 1){
						$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
					}else{
						$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
					}			
					redirect('welcome/masuk');
				}	
			else
			if($pil == "del")
			{
				$this->db->query("DELETE FROM user WHERE id = '$id'");		
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah dihapus.</div>");			
				if ($this->db->affected_rows() == 1){
					$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
				}else{
					$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
				}	
				redirect('welcome/masuk');
			}
			else # Data Alat
			if($pil == "edit_data")
				{
					$a['data'] 		= $this->db->query("SELECT * FROM data_alat WHERE no = '$id'")->row();
					$a['page'] 		= "isi_data_alat";
				}
			else
			if($pil == "act_edit_data")
				{
					$no					= addslashes($this->input->post('no'));
					$kec				= addslashes($this->input->post('kecamatan'));
					$desa				= addslashes($this->input->post('desa'));
					$k_tani				= addslashes($this->input->post('k_tani'));
					$ketua				= addslashes($this->input->post('ketua'));
					$tipe_mesin			= addslashes($this->input->post('tipe_mesin'));
					$tenaga				= addslashes($this->input->post('tenaga'));
					$bb					= addslashes($this->input->post('bahan_bakar'));
					$kbb				= addslashes($this->input->post('konsumsi_bb'));
					$kerja_efektif		= addslashes($this->input->post('kerja_efektif'));
					$tahun				= addslashes($this->input->post('tahun'));
					#$jumlah hitungan

					$this->db->query("UPDATE data_alat SET kecamatan='$kec',desa='$desa',
						kelompok_tani='$k_tani',ketua='$ketua',tipe_mesin='$tipe_mesin',tenaga='$tenaga',
						bahan_bakar='$bb',konsumsi_bb='$kbb',kerja_efektif='$kerja_efektif',tahun='$tahun' WHERE no = '$no'");
					if ($this->db->affected_rows() == 1){
						$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
					}else{
						$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
					}			
					redirect('welcome/masuk');
				}	
			else
			if($pil == "del_data")
			{
				$this->db->query("DELETE FROM data_alat WHERE no = '$id'");		
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah dihapus.</div>");			
				if ($this->db->affected_rows() == 1){
					$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
				}else{
					$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
				}	
				redirect('welcome/masuk');
			}
			else
			if($pil == "edit_profil")
			{
				$a['data'] 		= $this->db->query("SELECT * FROM profil WHERE id = '$id'")->row();
				$a['page'] 		= "isi_data_profil";
			}
			else
			if($pil == "act_edit_profil")
			{
				$id_profil 		= addslashes($this->input->post('id'));
				$gambar 		= addslashes(file_get_contents($_FILES['image']['tmp_name']));
				$deskripsi 		= addslashes($this->input->post('deskripsi'));
				if($gambar == ""){
					$this->db->query("UPDATE profil SET deskripsi='$deskripsi' WHERE id = '$id_profil'");	
				}else{
					$this->db->query("UPDATE profil SET gambar='{$gambar}', deskripsi='$deskripsi' WHERE id = '$id_profil'");
				}
					if ($this->db->affected_rows() == 1){
						$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
					}else{
						$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
					}			
					redirect('welcome/masuk');
			}
			else
			if($pil == "edit_data_berita")
			{
				$a['data'] 		= $this->db->query("SELECT * FROM info WHERE id = '$id'")->row();
				$a['page'] 		= "isi_data_berita";
			}
			else
			if($pil == "act_edit_berita")
			{
				$id_berita 		= addslashes($this->input->post('id'));
				$judul 			= addslashes($this->input->post('judul'));
				$konten			= addslashes($this->input->post('konten'));

					$this->db->query("UPDATE info SET judul='$judul', konten='$konten' WHERE id = '$id_berita'");
					if ($this->db->affected_rows() == 1){
						$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
					}else{
						$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
					}			
					redirect('welcome/masuk');
			}
			else
			if($pil=="del_data_berita")
			{
				$this->db->query("DELETE FROM info WHERE id = '$id'");		
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah dihapus.</div>");			
				if ($this->db->affected_rows() == 1){
					$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
				}else{
					$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
				}	
				redirect('welcome/masuk');
			}
			else
			if ($pil=="edit_agenda") {
				$a['data'] 		= $this->db->query("SELECT * FROM agenda WHERE id = '$id'")->row();
				$a['page'] 		= "isi_data_agenda";
			}
			else
			if($pil == "act_edit_agenda")
			{
				$id_agenda 		= addslashes($this->input->post('id'));
				$nama			= addslashes($this->input->post('nama'));
				$topik 			= addslashes($this->input->post('topik'));
				$tgl_2			= addslashes($this->input->post('tanggal2'));
				$tgl_3      	= addslashes($this->input->post('tanggal3'));
				$tempat     	= addslashes($this->input->post('tempat'));
				$pengirim   	= addslashes($this->session->userdata('admin_id'));

					$this->db->query("UPDATE agenda SET nama='$nama', topik='$topik', tanggal_mulai='$tgl_2', tanggal_akhir='$tgl_3', tempat='$tempat', pengirim='$pengirim'  WHERE id = '$id_agenda'");
					if ($this->db->affected_rows() == 1){
						$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
					}else{
						$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
					}			
					redirect('welcome/masuk');
			}
			else
			if ($pil=="del_agenda") {
				$this->db->query("DELETE FROM agenda WHERE id = '$id'");		
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah dihapus.</div>");			
				if ($this->db->affected_rows() == 1){
					$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
				}else{
					$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
				}	
				redirect('welcome/masuk');
			}
			else
			if ($pil=="edit_gambar") {
				$a['data'] 		= $this->db->query("SELECT * FROM galeri WHERE id = '$id'")->row();
				$a['page'] 		= "isi_data_galeri";
			}
			else
			if($pil == "act_edit_gambar")
			{
				$id_galeri 		= addslashes($this->input->post('id'));
				$gambar			= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$this->db->query("UPDATE galeri SET gambar='{$gambar}' WHERE id = '$id_galeri'");
					if ($this->db->affected_rows() == 1){
						$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
					}else{
						$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
					}			
					redirect('welcome/masuk');
			}
			else
			if ($pil=="del_pesan") {
				$this->db->query("DELETE FROM pesan WHERE id = '$id'");		
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah dihapus.</div>");			
				if ($this->db->affected_rows() == 1){
					$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
				}else{
					$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
				}	
				redirect('welcome/masuk');
			}
			else
			if ($pil=="del_gambar") {
				$this->db->query("DELETE FROM galeri WHERE id = '$id'");		
				$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Data telah dihapus.</div>");			
				if ($this->db->affected_rows() == 1){
					$this->session->set_flashdata("k", "<div class=\"alert alert-success\" id=\"alert\">Edit Data Berhasil</div>");
				}else{
					$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">Edit Data Gagal</div>");			
				}	
				redirect('welcome/masuk');
			}
			else{
				$a['page'] = 'gr';
			}
			$this->load->view('dashboard', $a);
    }
}

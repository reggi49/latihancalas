<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Muhamad Reggi-Bogorstore.web.id
	 */
	 
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		session_start();
	}
	
	public function index()
	{
		$this->load->view('adminheader');
		$this->load->view('adminlogin');
		$this->load->view('adminfooter');
	}
	public function cek_login()
	{
	$username=$this->input->post('username');
	$password=$this->input->post('password');
	if($username && $password &&$this->admin_model->login($username,$password)){
	$this->session->set_userdata('logged_in');
	redirect('admin/berita','refresh');
	}else{
	echo "username atau password salah";
	redirect('admin','refresh');
	}
	}
	public function logout()
	{
	session_destroy();
	redirect('admin', 'refresh');
	}
	public function berita()
	{
	$this->load->view('adminheader');
	$this->load->view('content');
	$this->load->view('adminfooter');
	}
	public function tampil_berita()
	{
     $kode='all';
 $this->load->model('admin_model');
     $data_berita['databerita']=$this->admin_model->tampil_data_berita($kode); 
     $this->load->view('tampilberita',$data_berita);
	}
	function tambah_berita()
	 {
	  $this->load->view('tambahberita');
	 }
	 function simpan_berita()
	 {
	  if (isset($_POST['mysubmit'])){
	  $data = array(
	  'id' => $this->input->post('id'),
					'judul'    => $this->input->post('judul'),                                       
					'content'    => $this->input->post('content'),
	  'mode'  => $this->input->post('mode')
	  );
	   $this->load->model('admin_model');
	   $hasil=$this->admin_model->simpan_data_berita($data);
	   if ($hasil){
		echo "Simpan data berhasil";
	   }else{
		echo "Simpan data gagal";
	   }
	   echo "<br/>";
	   echo anchor('admin/tampil_berita', 'Kembali');
	  }
	 }
	 function koreksi_berita($kd)
	 {
	  $this->load->model('admin_model');
				 $data_berita['databerita']=$this->admin_model->tampil_data_berita($kd); 
	  $this->load->view('koreksiberita',$data_berita);
	 }
	 function konfirm_hapus_berita($kd)
	 {
	  $this->load->model('admin_model');
			  $data_berita['databerita']=$this->admin_model->tampil_data_berita($kd); 
	  $this->load->view('konfirmhapus',$data_berita);
	 }
	 function hapus_berita($kd)
	 {
	  $this->load->model('admin_model');
			 $hasil=$this->admin_model->hapus_data_berita($kd);
	  if ($hasil){
		echo "Hapus data berhasil";
	  }else{
		echo "Hapus data gagal";
	  }
	  echo "<br/>";
	  echo anchor('admin/tampil_berita', 'Kembali');
	 }
	 
	
	
}
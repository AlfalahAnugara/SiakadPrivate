<?php

class Home extends CI_Controller{

	public function __construct()
  {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
			$this->load->model("guru_model");
			$this->load->model("pegawai_model") ;
  }

    public function index(){
			$data['guru']=$this->guru_model->getAll();
      $this->load->view('template/header');
      $this->load->view('template/sidebar'); 
			$this->load->view('admin/listguru' , $data);
			$this->load->view('admin/listpegawai' , $data) ;
			$this->load->view('template/footer'); 
			
    }
    public function nilai(){
      $data['judul']='Nilai Siswa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('template/footer');
      $this->load->view('admin/nilai');
    }
    public function tambahnilai(){
      $data['judul']='Tambah Nilai Siswa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/tambahnilai');
      }
    public function pengumuman(){
      $data['judul']='Buat Pengumuman';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/pengumuman');
    }

    public function aturspp(){
      $data['judul']='Atur Status Spp';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/aturspp');
    }

    public function tambahsiswa(){
      $data['judul']='Halaman Tambah Siswa';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar'); 
      $this->load->view('admin/tambahsiswa');
    }
    public function tambahguru(){
      $data['judul']='Halaman Tambah Guru';
      $this->load->view('template/header',$data);
      //$this->load->view('template/sidebar'); 
      $this->load->view('admin/tambahguru');
		}
		public function tambahpegawai() {
			$data['judul']='Halamana Tambah Pegawai' ;
			$this->load->view('template/header' ,$data) ;
			$this->load->view('template/sidebar') ;
			$this->load->view('admin/tambahpegawai') ;
		}
}

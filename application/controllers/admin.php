<?php

defined('BASEPATH') OR exit ('No direct script access allowed') ;

class admin extends CI_Controller {
	public function __construct() {

		parent::__construct() ;
		$this->load->model("Admin_model") ;
		$this->load->library('form_validation') ;
	}

	public function index() {
		$data['guru'] = $this->Guru_model->getAll() ;
		$this->load->view("guru/admin_view/list" , $data) ;
	}

	public function add() {
		$guru = $this->Guru_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($guru->rules()) ;

		if ($validation->run()) {
		$guru->save() ;
		$this->session->set_flashdata('success' , 'Berhasil disimpan') ;
		}

		$this->load->view("admin/tambahguru") ;
	}

<?php

defined('BASEPATH') OR exit ('No direct script access allowed') ;

class guru extends CI_Controller {
	public function __construct() {

		parent::__construct() ;
		$this->load->model("Guru_model") ;
		$this->load->library('from_validation') ;
	}

	public function index() {
		$data['guru'] = $this->Guru_model->getAll() ;
		$this->load->view("guru/guru_view" , $data) ;
	}

	public function add() {
		$guru = $this->Guru_model ;
		$validation = $this->form_validation ;
		$validation->set_rules($product->rules()) ;

		if ($validation->run()) {
			$guru->save() ;
			$this->session->set_flashdata('success' , 'Berhasil disimpan') ;
		}

		$this->load->view("guru/guru_view/new_form") ;
	}
}

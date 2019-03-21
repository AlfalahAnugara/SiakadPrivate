<?php defined('BASEPATH') OR exit('No direct script access allowed') ;

class Guru_model extends CI_Model {
	private $_table = "guru" ;

	public $id ;
	public $nig ;
	public $nama ;
	public $tgl_lahir ;
	public $kota_asal;
	public $gender ;
	public $alamat ;
	public $no_telp ;
	public $password ;
	public $id_pelajaran ;
	public $status_user ; 

	public function rules () {
		return [
			['field' => 'nig' ,
			'label' => 'NIG' ,
			'rules' => 'required'] ,

			['field' => 'nama' ,
			'label' => 'Nama' ,
			'rules' => 'required'] ,

			['field' => 'tgl_lahir' ,
			'label' => 'Tanggal Lahir' ,
			'rules' => 'required']] ;
	}

	public function getAll() {
		return $this->db->get($this->_table)->result() ;
	}

	public function getById($id) {
		return $this->db->get_where($this->_table , ["id"])->row() ;
	}

	public function save() {
		$post = $this->input->post() ;
		$this->id = uniqid() ;
		$this->nig = $post["nig"] ;
		$this->id = $post["id"] ;
		$this->id = $post["id"] ;
		$this->id = $post["id"] ;
		$this->id = $post["id"] ;
		$this->id = $post["id"] ;
		$this->id = $post["id"] ;
		$this->id = $post["id"] ;

	}
}

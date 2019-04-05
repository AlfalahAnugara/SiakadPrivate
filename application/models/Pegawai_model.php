<?php defined('BASEPATH') OR exit('No direct script access allowed') ;

class Guru_model extends CI_Model {
	private $_table = "pegawai" ;

	
	public $nip ;
	public $nama ;
	public $password ;
	public $gender ;
	public $status_user ; 

	public function rules () {
		return [
			['field' => 'nip' ,
			'label' => 'NIP' ,
			'rules' => 'required'] ,

			['field' => 'nama' ,
			'label' => 'Nama' ,
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
		$this->nip = $post["nip"] ;
		$this->nama = $post["nama"] ;
		$this->password = $post["password"] ;
		$this->gender = $post["gender"] ;
		$this->db->insert($this->_table , $this) ;
	}

	public function update() {
		$post = $this->input->post() ;
		$this->nip = $post["nip"] ;
		$this->nama = $post["nama"] ;
		$this->password = $post["password"] ;
		$this->gender = $post["gender"] ;
		$this->db->insert($this->_table , $this , array('id' => $post['id'])) ;
	}

	public function delete ($id) {
		return $this->db->delete($this->_table , array("id" => $id)) ;
	}


}

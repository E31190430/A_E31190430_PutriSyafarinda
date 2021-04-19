<?php
	class Mahasiswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this -> load -> model('Mahasiswa_model');
		}

		public function index(){
			$data['user'] = $this->Mahasiswa_model->getAll()->result();
			$this->template->views('crud/home_mahasiswa',$data);
		}
		
		public function tambah(){
			$this->template->views('crud/tambah_mahasiswa'); //untuk menambahkan view tambah_view
		}

		public function input(){
			$username = $this->input->post('username');//untuk menambahkan data field username
			$password = $this->input->post('pass'); //untuk menambahkan data ke field password
			$grup = $this->input->post('grup'); //untuk menambahkan data ke field  grup

			$data = array(
				'username' => $username,
				'password' => $password,
				'grup' => $grup,
				
				);
			$this->Mahasiswa_model->input_data($data,'tm_user');//memperoses data melalui file mahasiswa_model di method input_data
			redirect('Mahasiswa/index');//kembali ke tampilan home_mahasiswa
		}
	}
	
?>

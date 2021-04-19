<?php
class Mahasiswa_model extends CI_Model{
	public function get_data(){
		$data_mahasiswa =[
			["nama"=>"Kim Jefry","prodi"=>"MIF"],
			["nama"=>"Ahmad Kurniawan","prodi"=>"TKK"],
			["nama"=>"Budi Sudarsono","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
	function getALL(){
		$this -> db -> select('*');
		$this -> db -> from('tm_user');
		$this -> db -> join('tm_grup','tm_user.grup = tm_grup.id_grup');
		$query = $this -> db -> get();
		return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
?>
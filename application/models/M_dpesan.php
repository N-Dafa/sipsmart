<?php 
class M_dpesan extends CI_Model{
	function tampil_data(){
		return $this->db->get('pesan');
	}
	function tampil_data_dpesan(){
		return $this->db->get('detail_pesan');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_data($data,$table){
		$this->db->update($table,$data);
	}	
}
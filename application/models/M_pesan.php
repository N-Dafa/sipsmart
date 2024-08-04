<?php 
class M_pesan extends CI_Model{
	function tampil_data(){
		return $this->db->get('padi');
	}
	function tampil_data_pesan(){
		return $this->db->get('pesan');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
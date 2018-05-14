<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Model {
	
	public function GetArtikel(){
		
		$this->db->select('id,tempat,harga_masuk');
		$this->db->from('destinasi');
		$data=$this->db->get();
	
		return $data->result_array();
	}
	public function GetPreview($id=''){
		$isi = $this->db->query('SELECT id,tempat,harga_masuk FROM destinasi where id = '.$id);
		return $isi->result_array();
	}

	public function InsertData($tabelNama,$data){
		$res = $this->db->insert($tabelNama,$data);
		return $res;
		}

	public function DeleteData($tabelNama,$where){
		$res = $this->db->delete($tabelNama,$where);
		return $res;
		}

	public function getedit($id=''){
		$data = $this->db->query('SELECT id,tempat,harga_masuk FROM destinasi where id  = '.$id);
		return $data->result_array();
	}

	public function UpdateData($tabelNama,$data,$where){
		$res = $this->db->update($tabelNama,$data,$where);
		return $res;
		}
}
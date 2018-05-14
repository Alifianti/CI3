<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	
	public function index(){
		$this->load->model('destinasi');

		$data['result'] = $this->destinasi->GetArtikel();

		$this->load->view('DataTable', $data);
	} 

	public function do_preview($id=''){
		$this->load->model('destinasi');

		$data['result'] = $this->destinasi->GetPreview($id);

		// echo "<pre>";
		// print_r($data);die();

		$this->load->view('DataTable', $data);

	}

	public function add_data(){
		$this->load->view('formAdd');

	}

	public function do_insert(){
		
            
			$tempat 		= $_POST['tempat'];
			$harga_masuk 	= $_POST['harga_masuk'];
			
			$data_insert	= array(
									
									'tempat' 		=> $tempat,
									'harga_masuk'	=> $harga_masuk
								);

			$this->load->model('destinasi');
			$res = $this->destinasi->InsertData('destinasi', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('data');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
        
	}
	
	public function edit_data($id=''){
		$this->load->model('destinasi');
		$artikel = $this->destinasi->getedit($id);
		$data = array(
			"id" 			=> $artikel[0]['id'],
			"tempat"		=> $artikel[0]['tempat'],
			"harga_masuk" 	=> $artikel[0]['harga_masuk']
		);
		$this->load->view('formEdit',$data);
	}

	public function do_update(){
			$id 			= $_POST['id'];
			$tempat 		= $_POST['tempat'];
			$harga_masuk 	= $_POST['harga_masuk'];
			
			$data_update	= array(
									'tempat' 		=> $tempat,
									'harga_masuk'	=> $harga_masuk);

			$this->load->model('destinasi');
			$where = array('id' => $id);
			$res = $this->destinasi->UpdateData('destinasi',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('data');
			}
		
	}

	public function do_delete($id){
		$this->load->model('destinasi');
		$where 	= array('id' => $id);
		$res 	= $this->destinasi->DeleteData('destinasi',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('data');
			}
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {
	
	public function index(){
		$this->load->model('model');

		$data['isi'] = $this->model->GetArtikel();

		$this->load->view('index', $data);
	} 

	public function do_preview($id=''){
		$this->load->model('model');

		$data['isi'] = $this->model->GetPreview($id);

		// echo "<pre>";
		// print_r($data);die();

		$this->load->view('flores', $data);

	}

	public function add_data(){
		$this->load->view('galeri');

	}

	public function do_insert(){
		$config['upload_path']          = 'images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

               print_r($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $judul 			= $_POST['judul'];
			$tgl			= date("Y-m-d H:i:s");
			$tempat 		= $_POST['tempat'];
			$caption		= $_POST['caption'];
			$img			= $this->upload->data('file_name');
			$data_insert	= array(
									'judul' 	=> $judul,
									'tgl'		=> $tgl,
									'caption'	=> $caption,
									'tempat' 	=> $tempat,
									'img'		=> $img
								);

			$this->load->model('model');
			$res = $this->model->InsertData('iwwm', $data_insert);
			
			if($res>=1){
				$this->session->set_flashdata('pesan','Tambah Data Sukses');
				redirect('coba');
			}else{
				echo "<h2>Insert Data Gagal</h2>";	
			}
        }
	}
	
	public function edit_data($id='',$img=''){
		$this->load->model('model');
		$artikel = $this->model->getedit($id);
		$data = array(
			"id" 		=> $artikel[0]['id'],
			"judul" 	=> $artikel[0]['judul'],
			"tgl"		=> $artikel[0]['tgl'],
			"tempat"	=> $artikel[0]['tempat'],
			"caption" 	=> $artikel[0]['caption'],
			"img"		=> $artikel[0]['img']
		);
		$this->load->view('form_edit',$data);
	}

	public function do_update(){
		$config['upload_path']          = 'images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
                $error = array('error' => $this->upload->display_errors());

               print_r($error);
        }
        else
        {
			$result_upload=$this->upload->data();
				
			$id 			= $_POST['id'];
			$judul 			= $_POST['judul'];
			$tgl			= date("Y-m-d H:i:s");
			$tempat 		= $_POST['tempat'];
			$caption			= $_POST['caption'];
			$img			= $result_upload['file_name']; 
			$data_update 	= array(
				'judul' 		=> $judul,
				'tgl' 			=> $tgl,
				'tempat' 		=> $tempat,
				'caption' 		=> $caption,
				'img'			=> $img);
			$this->load->model('model');
			$where = array('id' => $id);
			$res = $this->model->UpdateData('iwwm',$data_update,$where);
			if($res>=1){
				$this->session->set_flashdata('pesan','Update Data Sukses');
				redirect('coba');
			}
		}
	}

	public function do_delete($id){
		$this->load->model('model');
		$where 	= array('id' => $id);
		$res 	= $this->model->DeleteData('iwwm',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('coba');
			}
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_ruangan');
		$this->load->model('M_setting');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Data Ruangan';
		$d['ruang'] = $this->M_ruangan->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('ruangan/list',$d);
		$this->load->view('templates/footer');
	}

	function tambah_aksi(){
		$id_ruangan = $this->input->post('id_ruangan');
		$nama_ruangan = $this->input->post('nama_ruangan');
 
		$data = array(
			'id_ruangan' => $id_ruangan,
			'nama_ruangan' => $nama_ruangan
			);


		$this->M_ruangan->input_data($data,'tb_ruangan');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('ruangan');
	}


	function edit(){
		$id_ruangan = $this->input->post('id_ruangan');
		$nama_ruangan = $this->input->post('nama_ruangan');
		
 
		$data = array(
			'id_ruangan' => $id_ruangan,
			'nama_ruangan' => $nama_ruangan
			);
 
	$where = array(
		'id_ruangan' => $id_ruangan
	);
 
	$this->M_ruangan->update_data($where,$data,'tb_ruangan');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('ruangan');
}

	function hapus()
	{
		$id_ruangan=$this->input->post('id_ruangan');
		$this->M_ruangan->hapus_data($id_ruangan);

		if ($id_ruangan == null) {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Oppss</h4>
				<p>Data Gagal Dihapus</p>
				</div>');    
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('ruangan/list');
			$this->load->view('templates/footer');
		}else{
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>');    
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('ruangan/list');
			$this->load->view('templates/footer');
		}
		redirect('ruangan');
	}
}
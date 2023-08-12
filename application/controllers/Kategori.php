<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_kategori');
		$this->load->model('M_setting');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Data Kategori';
		$d['kategori'] = $this->M_kategori->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('data_barang/kategori',$d);
		$this->load->view('templates/footer');
	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$nama_kategori = $this->input->post('nama_kategori');
		$deskripsi = $this->input->post('deskripsi');
 
		$data = array(
			'id' => $id,
			'nama_kategori' => $nama_kategori,
			'deskripsi' => $deskripsi

			);


		$this->M_kategori->input_data($data,'tb_kategori');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('kategori');
	}

	function edit(){
		$id = $this->input->post('id');
		$nama_kategori = $this->input->post('nama_kategori');
		$deskripsi = $this->input->post('deskripsi');
		
 
		$data = array(
			'id' => $id,
			'nama_kategori' => $nama_kategori,
			'deskripsi' => $deskripsi
			

			);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_kategori->update_data($where,$data,'tb_kategori');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('kategori');
}

function hapus()
	{
		$id =$this->input->post('id');
		$this->M_kategori->hapus_data($id);

		if ($id == null) {
			$this->session->set_flashdata('msg', 
				'<div class="alert alert-danger">
				<h4>Oppss</h4>
				<p>Data Gagal Dihapus</p>
				</div>');    
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('data_barang/kategori');
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
			$this->load->view('data_barang/kategori');
			$this->load->view('templates/footer');
		}
		redirect('kategori');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_setting');
	}

	function index(){
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['pesan'] = $this->M_setting->tampil_pesan()->result();
		$data['title'] = 'Halaman Pesan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pegawai/pemberitahuan');
		$this->load->view('templates/footer');
	}

	function edit($id){
		$where = array('id' => $id);
		$d['setting'] = $this->M_setting->edit_pesan($where,'tb_pesan')->result();
		$data['pesan'] = $this->M_setting->tampil_pesan()->result();
		$d['setting'] = $this->M_setting->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Edit Data Pesan';
		$this->load->view('templates/header', $data);
		$this->load->view('pegawai/edit', $d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update(){
		$id = $this->input->post('id');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');
		
 
		$data = array(
			'id' => $id,
			'email' => $email,
			'pesan' => $pesan
			);
 
	$where = array(
		'id' => $id
	);
 
	$this->M_setting->update_pesan($where,$data,'tb_pesan');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Pesan Terkirim.
											</div>'
										);
		redirect('pesan');
}
}
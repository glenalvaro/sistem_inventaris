<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_ruangan');
		$this->load->model('M_barang');
		$this->load->model('M_pengguna');
		$this->load->model('M_setting');
		$this->load->model('M_kategori');
		if($this->session->userdata('level') != 'admin')
		{
			redirect('auth');
		}
	}

	function index(){
		$data['title'] = 'Halaman Admin';
		$jml['total_ruangan'] = $this->M_ruangan->jumlah_ruangan();
		$jml['total_barang'] = $this->M_barang->jumlah_barang();
		$jml['pengguna'] = $this->M_pengguna->jumlahPengguna();
		$jml['kategori'] = $this->M_kategori->jumlahKategori();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/halaman_admin', $jml);
		$this->load->view('templates/footer');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_barang');
		$this->load->model('M_ruangan');
		$this->load->model('M_kategori');
		$this->load->model('M_setting');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Backup Database';
		$d['barang'] = $this->M_barang->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('backup/backup',$d);
		$this->load->view('templates/footer');
	}

	function backup(){
		$this->load->dbutil();

		$tanggal = date('YmdS-His');

		$config = array(
			'format' => 'zip',
			'filename' => 'InventoriPasca_'.$tanggal.'_db.sql',
			'add_drop' => FALSE,
			'add_insert' => TRUE,
			'newline' => "\n",
			'foreign_key_checks' => FALSE,
		);

		$backup =& $this->dbutil->backup($config);
		$nama_file ='InventoriPasca_'.$tanggal.'.zip';
		$this->load->helper('download');
		force_download($nama_file,$backup);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_barang');
		$this->load->model('M_ruangan');
		$this->load->model('M_kategori');
		$this->load->model('M_setting');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Data Barang';
		$d['barang'] = $this->M_barang->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('data_barang/list',$d);
		$this->load->view('templates/footer');
	}

	function tambah(){
		$data['title'] = 'Tambah Data Barang';

		$dariDB = $this->M_barang->cekkodebarang();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3, 3);
        $kodeBarangSekarang = $nourut + 1;
        $d = array('kode_barang' => $kodeBarangSekarang);

		$d['barang'] = $this->M_ruangan->tampil_data()->result();
		$d['kategori'] = $this->M_kategori->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('data_barang/add', $d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function tambah_aksi(){
		$no_seri = $this->input->post('no_seri');
		$nama_barang = $this->input->post('nama_barang');
		$jenis_barang = $this->input->post('jenis_barang');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$thn_pengadaan = $this->input->post('thn_pengadaan');
		$distributor = $this->input->post('distributor');
		$penempatan_barang = $this->input->post('penempatan_barang');
		$hrg_barang = $this->input->post('hrg_barang');
		
 
		$data = array(
			'no_seri' => $no_seri,
			'nama_barang' => $nama_barang,
			'jenis_barang' => $jenis_barang,
			'jumlah_barang' => $jumlah_barang,
			'thn_pengadaan' => $thn_pengadaan,
			'distributor' => $distributor,
			'penempatan_barang' => $penempatan_barang,
			'hrg_barang' => $hrg_barang
			);


		$this->M_barang->input_data($data,'tb_barang');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil ditambahkan.
											</div>'
										);
		redirect('data_barang');
	}

	function hapus($id_barang){
		$where = array('id_barang' => $id_barang);
		$this->M_barang->hapus_data($where,'tb_barang');
		$this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
		redirect('data_barang');
	}

	function delete_all(){
        $id_barang = $_POST['id_barang']; // Ambil data NIS yang dikirim oleh view.php melalui form submit
        $this->M_barang->delete($id_barang); // Panggil fungsi delete dari model
        $this->session->set_flashdata('msg',
											'
											<div class="alert alert-danger alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil dihapus.
											</div>'
										);
        redirect('data_barang');
    }

	function edit($id_barang){
		$where = array('id_barang' => $id_barang);
		$d['barang'] = $this->M_barang->edit_data($where,'tb_barang')->result();
		$d['ruang'] = $this->M_ruangan->tampil_data()->result();
		$d['kategori'] = $this->M_kategori->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Edit Data Barang';
		$this->load->view('templates/header', $data);
		$this->load->view('data_barang/edit', $d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update(){
		$id_barang = $this->input->post('id_barang');
		$no_seri = $this->input->post('no_seri');
		$nama_barang = $this->input->post('nama_barang');
		$jenis_barang = $this->input->post('jenis_barang');
		$jumlah_barang = $this->input->post('jumlah_barang');
		$thn_pengadaan = $this->input->post('thn_pengadaan');
		$distributor = $this->input->post('distributor');
		$penempatan_barang = $this->input->post('penempatan_barang');
		$hrg_barang = $this->input->post('hrg_barang');
		
 
		$data = array(
			'no_seri' => $no_seri,
			'nama_barang' => $nama_barang,
			'jenis_barang' => $jenis_barang,
			'jumlah_barang' => $jumlah_barang,
			'thn_pengadaan' => $thn_pengadaan,
			'distributor' => $distributor,
			'penempatan_barang' => $penempatan_barang,
			'hrg_barang' => $hrg_barang
		
			);
 
	$where = array(
		'id_barang' => $id_barang
	);
 
	$this->M_barang->update_data($where,$data,'tb_barang');
	$this->session->set_flashdata('msg',
											'
											<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diupdate.
											</div>'
										);
		redirect('data_barang');
}

	function detail($id_barang){
		$where = array('id_barang' => $id_barang);
		$d['detail'] = $this->M_barang->detail($where,'tb_barang')->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Detail Data Barang';
		$this->load->view('templates/header', $data);
		$this->load->view('data_barang/detail',$d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');
}

	function print(){
		$p['print'] = $this->M_barang->tampil_data('tb_barang')->result();
		$p['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('data_barang/print',$p);
	}

	function pdf(){
		$this->load->library('dompdf_gen');

		$data['barang'] = $this->M_barang->tampil_data('tb_barang')->result();

		$this->load->view('data_barang/laporan_barang',$data);


		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_barang.pdf", array('Attachment' => 0));

	}
}
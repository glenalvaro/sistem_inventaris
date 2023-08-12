<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_setting');
		$this->load->helper('url');
	}

	function index(){
		$data['title'] = 'Halaman Setting App';
		$d['setting'] = $this->M_setting->tampil_data()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('setting/list', $d);
		$this->load->view('templates/footer');
	}

	function edit($id){
		$where = array('id' => $id);
		$d['setting'] = $this->M_setting->edit_data($where,'tb_setting')->result();
		$d['setting'] = $this->M_setting->tampil_data()->result();
		$d['skin'] = $this->M_setting->tampil_skin()->result();
		$data['setting'] = $this->M_setting->tampil_data()->result();
		$data['title'] = 'Edit Data Sistem';
		$this->load->view('templates/header', $data);
		$this->load->view('setting/edit', $d);
		$this->load->view('templates/sidebar');
		$this->load->view('templates/footer');

	}

	function update()
			{
				$input = array(
					$id = $this->input->post('id'),
					$no_identitas = 	$this->input->post('no_identitas'),
					$kode_pos = 	$this->input->post('kode_pos'),
					$title_app = 	$this->input->post('title_app'),
					$judul_app = $this->input->post('judul_app'),
					$nama_company = $this->input->post('nama_company'),
					$email = $this->input->post('email'),
					$no_telepon = $this->input->post('no_telepon'),
					$alamat = $this->input->post('alamat'),
					$warna_sistem = $this->input->post('warna_sistem'),
					$file_path = "assets/img/logo/" . $this->input->post('no_identitas') . ".jpg"

				);

				if ($_FILES['image']['name'] == '') {

					$data = array(

						'no_identitas' => $no_identitas,
						'kode_pos' => $kode_pos,
						'title_app' => $title_app,
						'judul_app' => $judul_app,
						'nama_company' => $nama_company,
						'email' => $email,
						'no_telepon' => $no_telepon,
						'alamat' => $alamat,
						'warna_sistem' => $warna_sistem,
						

					);
				} else {
					$data = array(

						'no_identitas' => $no_identitas,
						'kode_pos' => $kode_pos,
						'title_app' => $title_app,
						'judul_app' => $judul_app,
						'nama_company' => $nama_company,
						'email' => $email,
						'no_telepon' => $no_telepon,
						'alamat' => $alamat,
						'warna_sistem' => $warna_sistem,
						'image' => $file_path,

					);

					$file_tmp = $_FILES['image']['tmp_name'];
					$file_type = $_FILES['image']['type'];
					$file_error = $_FILES['image']['error'];
					$file_size = $_FILES['image']['size'];
					// $file_path = "assets/images/".$_POST['nip'].".jpg";
					//$file_path = "assets/images/".$this->input->post('nip').".jpg";

					if ($file_type == "image/jpeg" || $file_type == "image/png") {
						if ($file_size > 0 and  $file_error == 0) {
							if (!move_uploaded_file($file_tmp, $file_path)) {
								exit(3);
							}
						} else {
							exit(2);
						}
					} else {
						exit(1);
					}
				}

				$where = array('id' => $id);

				$this->M_setting->update_data($where, $data, 'tb_setting');
				if ($input == null) {
					$this->session->set_flashdata(
						'msg',
						'<div class="alert alert-danger">
				<h4>Oppss</h4>	
				<p>Data Gagal Diedit</p>
				</div>'
					);
					$this->load->view('setting/edit');
				} else {
					$this->session->set_flashdata(
						'msg',
						'<div class="alert alert-info alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses! </strong> Data berhasil diedit.
											</div>'
					);
					$this->load->view('setting/edit');
				}
				redirect('setting');
			}
}
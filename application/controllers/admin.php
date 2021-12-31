<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public function index()
	{
		$data['judul'] = '';
		$data['pendapat'] = $this->ModelKomen->getKomen()->result_array();
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/navigation');
		$this->load->view('admin/header');
		$this->load->view('admin/admin', $data);
		$this->load->view('admin/footer');

	}

	public function hapusKomen()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelKomen->hapusKomen($where);
        redirect('admin');
    }

	public function upload()
    {
    if ($this->session->userdata('email')) {
    redirect('admin');
    }
    //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
    //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang
    //diinput akan disimpan ke dalam tabel user
    if ($this->form_validation->run() == false) {
    $data['judul'] = 'Upload Video';
        $this->load->view('admin/navigation');
		$this->load->view('admin/header');
		$this->load->view('admin/admin');
		$this->load->view('admin/footer');
    } else {
    $data = [
    'id' => 1,
    'video_url' => htmlspecialchars($upload),
    ];
    $this->ModelUpload->simpanData($data);

    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Video Berhasil di Upload</div>');
    redirect('admin');
    }
    }


    }

	


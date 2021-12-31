<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comment extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/navigation');
		$this->load->view('admin/header');
		$this->load->view('admin/komentar');
		$this->load->view('admin/footer');

	}

	public function komen()
    {
    if ($this->session->userdata('email')) {
    redirect('admin');
    }
    //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
    //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang
    //diinput akan disimpan ke dalam tabel user
    if ($this->form_validation->run() == false) {
    $data['judul'] = 'Registrasi Member';
        $this->load->view('admin/navigation');
		$this->load->view('admin/header');
		$this->load->view('admin/komentar');
		$this->load->view('admin/footer');
    } else {
    $data = [
    'id' => 1,
    'komentar' => htmlspecialchars($komen),
    ];
    $this->ModelKomen->simpanData($data);

    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Terima Kasih Atas Feedbacknya :)</div>');
    redirect('home');
    }
    }
	

}

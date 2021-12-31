<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

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
        if($this->session->userdata('email')){
        redirect('admin');
        }
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email', ['required' => 'Email Harus diisi!!', 'valid_email' => 'Email Tidak Benar!!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password Harus diisi']);
        if ($this->form_validation->run() == false) {
        $data['judul'] = 'Login';
        $data['user'] = '';
		$this->load->view('admin/navigation');
		$this->load->view('admin/header');
		$this->load->view('admin/login');
		$this->load->view('admin/footer');
        } else {
        $this->_login();
        }
	}

    private function _login()
    {
    $email = htmlspecialchars($this->input->post('email', true));
    $password = $this->input->post('password', true);
    $user = $this->ModelUser->cekData(['email' => $email])->row_array();
    //jika usernya ada
    if ($user) {
    //jika user sudah aktif
    if ($user['is_active'] == 1) {
    //cek password
    if (password_verify($password, $user['password'])) {
    $data = ['email' => $user['email'], 'role_id' => $user['role_id']];
    $this->session->set_userdata($data);
    if ($user['role_id'] == 1) {
    redirect("admin");
    } else {
    if ($user['image'] == 'default.jpg') {
    $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>');}
    redirect('user');
    }
    } else {
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
    redirect('login');
    }
    } else {
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
    redirect('login');
    }
    } else {
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
    redirect('login');
    }
    }

    public function registrasi()
    {
    if ($this->session->userdata('email')) {
    redirect('user');
    }
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', ['required' => 'Nama Belum diis!!']);
    $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', ['valid_email' => 'Email Tidak Benar!!', 'required' => 'Email Belum diisi!!', 'is_unique' => 'Email Sudah Terdaftar!']);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Password Tidak Sama!!', 'min_length' => 'Password Terlalu Pendek']);
    $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');
    //jika jida disubmit kemudian validasi form diatas tidak berjalan, maka akan tetap berada di
    //tampilan registrasi. tapi jika disubmit kemudian validasi form diatas berjalan, maka data yang
    //diinput akan disimpan ke dalam tabel user
    if ($this->form_validation->run() == false) {
    $data['judul'] = 'Registrasi Member';
        $this->load->view('admin/navigation');
		$this->load->view('admin/header');
		$this->load->view('admin/register');
		$this->load->view('admin/footer');
    } else {
        $email = $this->input->post('email', true);
    $data = [
    'nama' => htmlspecialchars($this->input->post('nama', true)),
    'email' => htmlspecialchars($email),
    'image' => 'default.jpg',
    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    'role_id' => 1,
    'is_active' => 0,
    'tanggal_input' => time()
    ];
    $this->ModelUser->simpanData($data); //menggunakan model

    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Selamat!! akun member anda sudah dibuat. Silahkan Login</div>');
    redirect('login');
    }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('login');
    }
}

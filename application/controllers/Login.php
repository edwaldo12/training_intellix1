<?php
class Login extends CI_Controller
{
	public function index()
	{
		return $this->load->view('login/login');
	}

	public function loginPengguna()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->Login->getUser($username);
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$this->session->set_userdata("user", $user);
				redirect('/');
			} else {
				$this->session->set_flashdata("gagalLogin", "Salah password atau username!");
				redirect('/login');
			}
		} else {
			$this->session->set_flashdata("userDeleted", "Maaf anda telah di non-aktifkan!");
			redirect('/login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}

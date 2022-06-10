<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user') == null) {
            return redirect('/login');
        }
    }
    public function index()
    {
        $data['_view'] = "user/index";
        $data['user'] = $this->User->getAllUser();
        $this->load->view('layouts/index', $data);
    }

    public function create()
    {
        $data['_view'] = "user/new";
        $this->load->view('layouts/index', $data);
    }

    public function storeUser()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $this->session->set_flashdata("tambah_user", $this->User->addNewUser($data));
            redirect('user');
        } else {
            $data['_view'] = "user/new";
            $this->load->view('layouts/index', $data);
        }
    }

    public function halamanEdit($id)
    {
        $data['_view'] = "user/edit";
        $data['user'] = $this->User->getUser($id);
        $this->load->view('layouts/index', $data);
    }
    public function deleteUser($data)
    {
        $this->session->set_flashdata("hapus_user", $this->User->deleteUser($data));
        redirect('user');
    }

    public function updateUser($id)
    {
        $data = [
            'id' => $id,
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];

        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tbl_user.username]');

        if ($this->form_validation->run()) {
            $this->session->set_flashdata("update_user", $this->User->updateUser($data));
            redirect('user');
        } else {
            $data['user'] = $this->User->getUser($id);
            $data['_view'] = "user/edit";
            $this->load->view('layouts/index', $data);
        }
    }
}

<?php
class Email extends CI_Controller
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
        $data['_view'] = 'email/index';
        $this->load->view('layouts/index', $data);
    }

    public function get()
    {
        $email = $this->Email->getAllEmail();
        $sendParameter = $this->input->get();
        $email = $this->Email->getSimilarity($sendParameter['search']['value']);
        $returnedData = [
            'draw' => $sendParameter['draw'],
            "data" => $email->findAll($sendParameter['length'], $sendParameter['start'] * $sendParameter['length']),
            'recordsFiltered' => $email->countAllResults(),
            'recordsTotal' => $email->countAll(),
        ];
        return json_encode($returnedData);
    }
}

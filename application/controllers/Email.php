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
        $sendParameter = $this->input->get();
        $dataLimited = $this->Email->getAllEmail($sendParameter['search']['value'], $sendParameter['length'], $sendParameter['start'] * $sendParameter['length']);
        $recordsFiltered = $this->Email->getAllFiltered($sendParameter['search']['value']);
        $countAll = $this->Email->countAll();
        $returnedData = [
            'draw' => $sendParameter['draw'], 
            "data" => $dataLimited,
            'recordsFiltered' => $recordsFiltered,
            'recordsTotal' => $countAll,
        ];
        return json_encode($returnedData);
    }
}

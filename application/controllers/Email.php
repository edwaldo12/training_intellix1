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
            'data' => $dataLimited,
            'recordsFiltered' => $recordsFiltered,
            'recordsTotal' => $countAll,
        ];
        echo json_encode($returnedData);
    }

    public function store()
    {
        $postData = $this->input->post();

        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'pdf|csv|doc|docx|xls|xlsx|ppt|pptx';
        $config['max_size']             = 8192;
        $config['max_width']            = 3200;
        $config['max_height']           = 3200;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $uploadData = $this->upload->data();
            $file = $uploadData['file_name'];
            $data = $postData['dataEmail'];
            $desc = $postData['description'];

            $this->Email->addNewEmail([
                'data' => $data,
                'description' => $desc,
                'file' => $file,
            ]);
            echo json_encode(
                [
                    'Data' => $data,
                    'Status' => '201',
                    'Message' => 'Uploaded Succesfully!',
                    'Success' => 1
                ]
            );
        } else {
            echo json_encode(
                [
                    'Status' => '404',
                    'Message' => $this->upload->display_errors(),
                ]
            );
        }
    }

    public function update()
    {
        $postData = $this->input->post();

        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'pdf|csv|doc|docx|xls|xlsx|ppt|pptx';
        $config['max_size']             = 8192;
        $config['max_width']            = 3200;
        $config['max_height']           = 3200;

        $this->load->library('upload', $config);
        $data['email'] = $this->Email->getEmail('id', $postData['email_id']);

        if ($this->upload->do_upload('file')) {
            $uploadData = $this->upload->data();
            $this->Email->updateEmail($postData['email_id'], [
                'data' => $postData['dataEmail'],
                'description' => $postData['description'],
                'file' => $uploadData['editFile'],
            ]);

            echo json_encode(
                [
                    'Status' => '201',
                    'Messages' => 'Updated'
                ]
            );
        } else {
            echo json_encode(
                [
                    'Status' => '404',
                    'Messages' => $this->upload->display_errors()
                ]
            );
        }
    }

    public function deleteEmail($id)
    {
        $this->Email->deleteEmail($id);
        echo json_encode(
            [
                'Status' => '201',
                'Messages' => 'Deleted'
            ]
        );
    }
}

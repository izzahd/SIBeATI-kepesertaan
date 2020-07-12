<?php

class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        // $this->load->library('fungsi');
    }

    public function index()
    {
        if ($this->input->post()) {
            if ($this->user_model->doLogin()) redirect(site_url('helloworld/hello'));
        }
        $this->load->view("login_page.php");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

    public function test()
    {
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('foo' => 'bar')));
    }

    // public function index_id()
    // {
    //     $data["users"] = $this->user_model->getById();
    //     $this->load->view("admin/_partials/navbar", $data);
    // }
}

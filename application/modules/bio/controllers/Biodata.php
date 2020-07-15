<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("biodata_model");
        $this->load->library('form_validation');
        $this->load->model("login/user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
    }

    public function index()
    {
        $id = $this->session->userdata('user_logged')->user_id;
        $data["biodata"] = $this->biodata_model->getbyId($id);
        if ($data){
            $this->load->view("biodata", $data);
        }
    }

    public function save_foto()
    {
        $id = $this->session->userdata('user_logged')->user_id;
        $username = $this->session->userdata('user_logged')->username;
        if ($this->input->post()) {
            $this->biodata_model->save_foto($id, $username); 
            redirect(site_url('/bio/biodata'));
        }
    }

    public function save_pribadi()
    {
        $id = $this->session->userdata('user_logged')->user_id;
        $data = $this->input->post(null, TRUE);
		if(isset($data['save_pribadi'])){
            $this->biodata_model->save_pribadi($id, $data); 
            redirect(site_url('/bio/biodata'));
        }
    }

    public function save_ortu()
    {
        $id = $this->session->userdata('user_logged')->user_id;
        $data = $this->input->post(null, TRUE);
        if(isset($data['save_ortu'])){
            $this->biodata_model->save_ortu($id, $data);
            redirect(site_url('/bio/biodata#ortu'));
        }
    }

    public function save_rumah()
    {
        $id = $this->session->userdata('user_logged')->user_id;
        $username = $this->session->userdata('user_logged')->username;
        $data = $this->input->post(null, TRUE);
        if(isset($data['save_rumah'])){
            $this->biodata_model->save_rumah($id, $username, $data); 
            redirect(site_url('/bio/biodata'));
        }
    }

    public function save_cerita()
    {
        $id = $this->session->userdata('user_logged')->user_id;
        $data = $this->input->post(null, TRUE);
        if(isset($data['save_cerita'])){
            $this->biodata_model->save_cerita($id, $data); 
            redirect(site_url('/bio/biodata'));
        }
    }

    // gak pake script alert soalnya dia ga muncul (ke-redirect duluan, alert nya jadi ga muncul)
    // tambahin alert aja kalo bisa buat dia muncul setelah redirect
}
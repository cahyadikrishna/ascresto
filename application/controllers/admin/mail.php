<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
                  $this->simple_login->cek_login();
        $this->load->model("contact_umum");
    }

    public function index()
    {
        $data["mailList"] = $this->contact_umum->getMail();
        $this->load->view("admin/mail/list", $data);
    }

    
}
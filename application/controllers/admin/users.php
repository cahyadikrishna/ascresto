<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
                  $this->simple_login->cek_login();
        $this->load->model("user_account");
    }

    public function index()
    {
        $data["userList"] = $this->user_account->getAll();
        $this->load->view("admin/user/list", $data);
    }

    
}
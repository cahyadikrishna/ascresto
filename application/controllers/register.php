<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('user_account'); //call model
     }
 
     public function index() {
 
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('telp_users','PHONE','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('form_register');
        }else{
            
            
             $data['username']   =    $this->input->post('username');
             $data['email'] =    $this->input->post('email');
             $data['password']  =    $this->input->post('password');
             $data['telp_users'] =    $this->input->post('telp_users');
            
 
             $this->user_account->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil Silahkan Login";
             
             $this->load->view('r_success',$pesan);
         }
     }


  public function add()
    {
        $users = $this->user_account;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());

        if ($validation->run()) {
            $users->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

             $this->load->view("form_register");
    }
}
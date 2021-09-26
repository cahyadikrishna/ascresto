<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
public function __construct()
    {
 parent::__construct();
             $this->load->library('form_validation');
        $this->load->model("contact_umum");
        $this->load->model("blog_umum");
    
    }

    public function index()
    {
               //footer blog
            $data["footblog"] = $this->blog_umum->getfootblog();
        $this->load->view("contact", $data);

    }


function sent_mail(){

         if(!$this->session->userdata('username'))
        {
            redirect('login');
        }

            $username = $this->input->post('username');
              $email = $this->input->post('email');
        $mail_title = $this->input->post('mail_title');
        $mail_desc = $this->input->post('mail_desc');
 
        $data = array(
             'username' => $username,
              'email' => $email,
            'mail_title' => $mail_title,
            'mail_desc' => $mail_desc,
            'mail_date' => date('Y-m-d H:i:s'),
            );

        $this->contact_umum->input_data($data,'mail');
         echo '<script>alert("Your Message succes sended!");</script>';
        redirect(site_url('contact'));
    }
}


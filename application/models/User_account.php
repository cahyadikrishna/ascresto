<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class User_account extends CI_Model{

  		 private $users = "users";

    public $users_id;
    public $username;
    public $email;
     public $telp_users;
          public $password;

       function daftar($data)
       {
            $this->db->insert('users',$data);
       }

       
        public function getAll()
    {
        return $this->db->get($this->users)->result();
    
    }

        public function save()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
         $this->username = $post["username"];
         $this->password = $post["password"];
          $this->telp_users = $post["telp_users"];
        $this->db->insert($this->users, $this);
    }

  }
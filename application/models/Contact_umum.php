<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_umum extends CI_Model {

	 private $mail = "mail";

    public $mail_id;
     public $username;
      public $email;
    public $mail_title;
    public $mail_desc;
    public $mail_date;
    public function rules()
    {
        return [
            ['field' => 'mail_title',
            'label' => 'Title',
            'rules' => 'required'],

            ['field' => 'mail_desc',
            'label' => 'Message',
            'rules' => 'required'],

             ['field' => 'username',
            'label' => 'Your name',
            'rules' => 'required'],

             ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required']
        ];
    }

       function input_data($data,$table){
        $this->db->insert($table,$data);
    }

      public function getMail()
    {
        return $this->db->get($this->mail)->result();
    }



}

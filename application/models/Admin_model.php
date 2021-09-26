<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $admin = "admin";

    public $admin_id;
    public $nama;
    public $food_img = "deaf.jpg";
    public $email;
     public $username;
       public $password;
    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'User',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Pass',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->admin)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->admin, ["admin_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->admin_id = uniqid();
        $this->name = $post["name"];
        $this->admin_img = $this->_uploadImage();
        $this->email = $post["email"];
         $this->username = $post["username"];
         $this->password = $post["password"];
        $this->db->insert($this->admin, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->admin_id = $post["id"];
        $this->name = $post["name"];

        if (!empty($_FILES["admin_img"]["name"])) {
    $this->admin_img = $this->_uploadImage();
} else {
    $this->admin_img = $post["old_image"];
}

        $this->email = $post["email"];
                $this->username = $post["username"];
        $this->password = $post["password"];
        $this->db->update($this->food, $this, array('admin_id' => $post['id']));
    }

    public function delete($id)
    {   
        $this->_deleteImage($id);
        return $this->db->delete($this->admin, array("admin_id" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/adminimg/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->admin_id;
    $config['overwrite']            = true;
    $config['max_size']             = 2024; // 2MB
    $config['max_width']            = 2000;
    $config['max_height']           = 1500;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('admin_img')) {
        return $this->upload->data("file_name");
    }
    
    return "deaf.jpg";
}

    private function _deleteImage($id)
{
    $admin = $this->getById($id);
    if ($admin->admin_img != "deaf.jpg") {
        $filename = explode(".", $admin->`)[0];
        return array_map('unlink', glob(FCPATH."upload/adminimg/$filename.*"));
    }
}

}
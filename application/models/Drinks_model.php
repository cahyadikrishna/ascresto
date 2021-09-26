<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Drinks_model extends CI_Model
{
    private $drinks = "drinks";

    public $drinks_id;
    public $id_kategori;
    public $drinks_name;
    public $drinks_img = "default.jpg";
    public $drinks_desc;
     public $drinks_price;
    public function rules()
    {
        return [
            ['field' => 'drinks_name',
            'label' => 'Name',
            'rules' => 'required'],

              ['field' => 'id_kategori',
            'label' => 'Kategori',
            'rules' => 'required'],

            ['field' => 'drinks_desc',
            'label' => 'Desc',
            'rules' => 'required'],

            ['field' => 'drinks_price',
            'label' => 'Price',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->select('*')
        ->from('kategori')
    ->join('drinks','kategori_id = id_kategori','right')
      ->order_by('drinks_date', 'DESC')
    ->get()
    ->result();
    }

     public function getKategori()
    {
        return $this->db->get('kategori')->result();
    }
    
    public function getById($id)
    {
         $this->db->select('*');
       $this->db->from('drinks');
         $this->db->join('kategori','kategori_id = id_kategori');
       $this->db->where('drinks_id',$id);
       $query =  $this->db->get();

       return $query->row();
   }

    public function save()
    {
        $post = $this->input->post();
        $this->drinks_id = uniqid();
           $this->id_kategori = $post["id_kategori"];
        $this->drinks_name = $post["drinks_name"];
        $this->drinks_img = $this->_uploadImage();
        $this->drinks_desc = $post["drinks_desc"];
         $this->drinks_price = $post["drinks_price"];
         $this->drinks_date = date("Y-m-d H:i:s");
        $this->db->insert($this->drinks, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->drinks_id = $post["id"];
           $this->id_kategori = $post["id_kategori"];
        $this->drinks_name = $post["drinks_name"];

        if (!empty($_FILES["drinks_img"]["name"])) {
    $this->drinks_img = $this->_uploadImage();
} else {
    $this->drinks_img = $post["old_image"];
}

        $this->drinks_desc = $post["drinks_desc"];
        $this->drinks_price = $post["drinks_price"];
            $this->drinks_date = date("Y-m-d H:i:s");
        $this->db->update($this->drinks, $this, array('drinks_id' => $post['id']));
    }

    public function delete($id)
    {   
        $this->_deleteImage($id);
        return $this->db->delete($this->drinks, array("drinks_id" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/drinks/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->drinks_id;
    $config['overwrite']            = true;
    $config['max_size']             = 2024; // 2MB
    $config['max_width']            = 2000;
    $config['max_height']           = 1500;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('drinks_img')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

    private function _deleteImage($id)
{
    $drinks = $this->getById($id);
    if ($drinks->drinks_img != "default.jpg") {
        $filename = explode(".", $drinks->drinks_img)[0];
        return array_map('unlink', glob(FCPATH."upload/drinks/$filename.*"));
    }
}

}
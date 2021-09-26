 <?php defined('BASEPATH') OR exit('No direct script access allowed');

class Food_model extends CI_Model
{
    private $food = "food";

    public $food_id;
     public $id_kategori;
    public $food_name;
    public $food_img = "default.jpg";
    public $food_desc;
     public $food_price;
     
    public function rules()
    {
        return [
            ['field' => 'food_name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'id_kategori',
            'label' => 'Kategori',
            'rules' => 'required'],

            ['field' => 'food_price',
            'label' => 'Price',
            'rules' => 'required'],

            ['field' => 'food_desc',
            'label' => 'Desc',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
       return $this->db->select('*')
        ->from('kategori')
    ->join('food','kategori_id = id_kategori','right')
    ->order_by('food_date', 'DESC')
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
       $this->db->from('food');
         $this->db->join('kategori','kategori_id = id_kategori');
       $this->db->where('food_id',$id);
       $query =  $this->db->get();

       return $query->row();

    }

    public function save()
    {
        $post = $this->input->post();
        $this->food_id = uniqid();
          $this->id_kategori = $post["id_kategori"];
        $this->food_name = $post["food_name"];
        $this->food_img = $this->_uploadImage();
        $this->food_desc = $post["food_desc"];
         $this->food_price = $post["food_price"];
               $this->food_date = date("Y-m-d H:i:s");
        $this->db->insert($this->food, $this);
         }

    public function update()
    {
        $post = $this->input->post();
        $this->food_id = $post["id"];
          $this->id_kategori = $post["id_kategori"];
        $this->food_name = $post["food_name"];

       if (!empty($_FILES["food_img"]["name"])) {
    $this->food_img = $this->_uploadImage();
} else {
    $this->food_img = $post["old_image"];
}

        $this->food_desc = $post["food_desc"];
        $this->food_price = $post["food_price"];
             $this->food_date = date("Y-m-d H:i:s");
        $this->db->update($this->food, $this, array('food_id' => $post['id']));
    }

    public function delete($id)
    {   
        $this->_deleteImage($id);
        return $this->db->delete($this->food, array("food_id" => $id));
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/food/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->food_id;
    $config['overwrite']            = true;
    $config['max_size']             = 2024; // 2MB
    $config['max_width']            = 2000;
    $config['max_height']           = 1500;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('food_img')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

    private function _deleteImage($id)
{
    $food = $this->getById($id);
    if ($food->food_img != "default.jpg") {
        $filename = explode(".", $food->food_img)[0];
        return array_map('unlink', glob(FCPATH."upload/food/$filename.*"));
    }
}

} 
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    private $kategori = "kategori";

    public $kategori_id;
    public $kategori_name;

    public function rules()
    {
        return [
            ['field' => 'kategori_name',
            'label' => 'Name',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->kategori)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->kategori, ["kategori_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kategori_id = uniqid();
        $this->kategori_name = $post["kategori_name"];
        $this->db->insert($this->kategori, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kategori_id = $post["id"];
        $this->kategori_name = $post["kategori_name"];
        $this->db->update($this->kategori, $this, array('kategori_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->kategori, array("kategori_id" => $id));
    }
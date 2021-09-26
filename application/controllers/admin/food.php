<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
                  $this->simple_login->cek_login();
        $this->load->model("food_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["food"] = $this->food_model->getAll();
        $this->load->view("admin/food/list", $data);
    }

 public function add()
    {
        $food = $this->food_model;
        $validation = $this->form_validation;
        $validation->set_rules($food->rules());

        if ($validation->run()) {
            $food->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data["kategori"] = $this->food_model->getKategori();
             $this->load->view("admin/food/new_form",$data);

    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/food');
       
        $food = $this->food_model;
        $validation = $this->form_validation;
        $validation->set_rules($food->rules());

        if ($validation->run()) {
            $food->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["food"] = $food->getById($id);
        if (!$data["food"]) show_404();
        
          $data["kategori"] = $this->food_model->getKategori();
        $this->load->view("admin/food/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->food_model->delete($id)) {
            redirect(site_url('admin/food'));
        }
    }
}
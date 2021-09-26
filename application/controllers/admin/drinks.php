<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Drinks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
         $this->simple_login->cek_login();
        $this->load->model("drinks_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["drinks"] = $this->drinks_model->getAll();
        $this->load->view("admin/drinks/list", $data);
    }

 public function add()
    {
        $drinks = $this->drinks_model;
        $validation = $this->form_validation;
        $validation->set_rules($drinks->rules());

        if ($validation->run()) {
            $drinks->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
                 $data["kategori"] = $this->drinks_model->getKategori();
             $this->load->view("admin/drinks/new_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/drinks');
       
        $drinks = $this->drinks_model;
        $validation = $this->form_validation;
        $validation->set_rules($drinks->rules());

        if ($validation->run()) {
            $drinks->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["drinks"] = $drinks->getById($id);
        if (!$data["drinks"]) show_404();
        
         $data["kategori"] = $this->drinks_model->getKategori();
        $this->load->view("admin/drinks/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->drinks_model->delete($id)) {
            redirect(site_url('admin/drinks'));
        }
    }
}
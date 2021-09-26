<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

public function __construct()
    {
        parent::__construct();

        $this->simple_login->cek_login();
        $this->load->library('form_validation');
        $this->load->model("dashboard_model");
    }

    public function index()
    {
          $data["drinks"] = $this->dashboard_model->getDrink();
        $data["food"] = $this->dashboard_model->getFood();

     $data['jumFood'] = $this->dashboard_model->jumlahFood();
      $data['jumDrinks'] = $this->dashboard_model->jumlahDrinks();
         $data['jumOrders'] = $this->dashboard_model->jumlahOrders();
         $data['jumUsers'] = $this->dashboard_model->jumlahUsers();


           $data["kategori"] = $this->dashboard_model->getKategori();
        $this->load->view("admin/dashboard/list", $data);
    }

}

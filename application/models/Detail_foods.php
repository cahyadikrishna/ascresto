<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_foods extends CI_Model {

	public function getFoods()
	{
		$this->load->view('foods');
	}

}

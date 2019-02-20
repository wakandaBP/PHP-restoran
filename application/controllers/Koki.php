<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koki extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("koki_model");
	}

	public function index(){
		$data["order"] = $this->koki_model->ambilOrder()->result();

		$this->load->view('koki_view',$data);
	}

	public function updatestats($id){
		$data = array(
			"status" => "S"
		);

		$this->koki_model->gantiStats($id,$data);
	}

}
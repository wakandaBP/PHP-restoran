<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("pelayan_model");
	}

	public function index(){
		$this->load->view('pelayan_view');
	}

	public function menu(){
		if($this->input->post()){
			$makanan = $this->pelayan_model->ambilAllMakan()->result();
			$minuman = $this->pelayan_model->ambilAllMinum()->result();
			$meja = $this->input->post();
			//print_r($data);
			$this->load->view("pelayan_menu_view",array("makan" => $makanan,"minum" => $minuman,"meja" => $meja));
        } else {
            redirect("pelayan");
		}
	}

	public function tambahmenu($id){
		echo json_encode($this->pelayan_model->ambilMenu($id)->result());
	}

	public function simpanmenu(){
		$nomororder = $this->pelayan_model->hitungData()+1;
		$idmenu = $this->input->post("idmenu");
		$meja = $this->input->post("meja");
		$data = array();

		$i = 0;
		foreach ($idmenu as $menu):
			array_push($data,array(
				"nomororder" => $nomororder,
				"idmenu" => $menu,
				"meja" => $meja,
				"status" => "M"
			));
			$i++;
		endforeach;

		$this->pelayan_model->simpanMenu($data);
	}
}
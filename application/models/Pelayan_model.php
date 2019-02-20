<?php

class Pelayan_model extends CI_Model {

	public function ambilAllMakan(){
		$query = $this->db
						->from("tblmenu")
						->where("jenis","MK")
						->get();

		return $query;
	}

	public function ambilAllMinum(){
		$query = $this->db
						->from("tblmenu")
						->where("jenis","MN")
						->get();

		return $query;
	}

	public function ambilMenu($id){
		$query = $this->db
						->from("tblmenu")
						->where("idmenu",$id)
						->get();
		return $query;
	}

	public function simpanMenu($data){
		$query = $this->db->insert_batch("tblorder",$data);
		return $this->db->affected_rows();
	}

	public function hitungData(){
		$query = $this->db->get('tblorder');

	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }	
	}

}
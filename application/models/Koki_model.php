<?php

class Koki_model extends CI_Model{

	public function ambilOrder(){
		$query = $this->db
						->select("a.idmenu,a.nama,b.meja")
						->from("tblmenu a")
						->join("tblorder b","a.idmenu=b.idmenu","right")
						->where("b.status","M")
						->get();

		return $query;
	}

	public function gantiStats($id,$data){
		$query = $this->db
						->where("idmenu",$id)
						->update("tblorder",$data);

		return $this->db->affected_rows();
	}
}
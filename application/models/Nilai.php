<?php defined('BASEPATH') OR exit('No direct script access allowed'); 


class Nilai extends CI_Model{

	public function createNilai($data)
	{
		$this->db->insert('mahasiswas', $data);
	}

	public function indexNilai()
	{
		$this->db->order_by("finalScore", "desc");
		$query = $this->db->get('mahasiswas');
		return $query->result();
	}

}
?>
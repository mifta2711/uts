<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_crud extends CI_Model 
{
	public function GetTable($tabel)
	{
		$data=$this->db->get($tabel);
		return $data->result_array();
	}
	public function InsertData($tabel, $data) {
		$res = $this->db->insert($tabel, $data);
		return $res;
	}
	public function getByID($tabel,$pk,$id)
	{
		$this->db->where($pk,$id);
		return $this->db->get($tabel);
	}
	public function UpdateData($tabel, $data, $pk, $id) //ini kan ada 4 variable
	{
		$this->db->where($pk,$id);
		$res = $this->db->update($tabel,$data);
		return $res;
	}
	public function DeleteData($tabel, $pk, $id)
	{
		$this->db->where($pk,$id);
		$res = $this->db->delete($tabel);
		return $res;
	}

}
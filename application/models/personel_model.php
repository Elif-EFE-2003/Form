<?php
class Personel_model extends CI_Model {
	public function get($where=array())
	{
		$result=$this->db
			->where($where)
			->get('register')
			->row();
		return $result;
	}
}

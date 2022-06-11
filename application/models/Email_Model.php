<?php
class Email_Model extends CI_Model
{
	public function getAllEmail($sendParameter = '', $length, $start)
	{
		$this->db->select('*');
		$this->db->from('tbl_email');
		$this->db->like('description', $sendParameter);
		$this->db->limit($length, $start);
		return $this->db->get()->result_array();
	}

	public function countAll()
	{
		$this->db->select('*');
		$this->db->from('tbl_email');
		return $this->db->get()->num_rows();
	}

	public function getAllFiltered($sendParameter = '')
	{
		$this->db->select('*');
		$this->db->from('tbl_email');
		$this->db->like('description', $sendParameter);
		return $this->db->get()->num_rows();
	}
}

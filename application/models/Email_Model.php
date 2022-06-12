<?php
class Email_Model extends CI_Model
{
	public function getAllEmail($sendParameter = '', $length = 10, $start = 0)
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

	public function addNewEmail($data)
	{
		return $this->db->insert('tbl_email', $data);
	}

	public function getEmail($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_email')->row_array();
	}

	public function updateEmail($id, $data)
	{
		extract($data);
		$this->db->where('id', $id);
		$this->db->update(
			'tbl_email',
			array(
				'description' => $description,
				'data' => $data,
				'file' => $file
			)
		);
	}

	public function deleteEmail($data)
	{
		return $this->db->delete('tbl_email', array('id' => $data));
	}
}

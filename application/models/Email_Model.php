<?php
class Email_Model extends CI_Model
{
	public function getAllEmail()
	{
		return $this->db->get("tbl_email")->result_array();
	}

	public function getSimilarity($sendParameter = null)
	{
		return $this->db->like('description', $sendParameter)->get('tbl_email');
	}
	// public function getUser($id)
	// {
	// 	$this->db->where('id', $id);
	// 	return $this->db->get('tbl_user')->row_array();
	// }
	// public function addNewUser($data)
	// {
	// 	return $this->db->insert('tbl_user', $data);
	// }
	// public function deleteUser($data)
	// {
	// 	return $this->db->delete('tbl_user', array('id' => $data));
	// }
	// public function updateUser($data)
	// {
	// 	extract($data);
	// 	$this->db->where('id', $id);
	// 	$this->db->update(
	// 		'tbl_user',
	// 		array(
	// 			'username' => $username,
	// 			'password' => $password
	// 		)
	// 	);
	// }
}

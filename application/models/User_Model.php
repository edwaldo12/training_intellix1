<?php
class User_Model extends CI_Model
{

	public function getAllUser()
	{
		return $this->db->get("tbl_user")->result_array();
	}
	public function getUser($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('tbl_user')->row_array();
	}
	public function addNewUser($data)
	{
		return $this->db->insert('tbl_user', $data);
	}
	public function deleteUser($data)
	{
		return $this->db->delete('tbl_user', array('id' => $data));
	}
	public function updateUser($data)
	{
		extract($data);
		$this->db->where('id', $id);
		if ($password != '') {
			$this->db->update(
				'tbl_user',
				array(
					'username' => $username,
					'password' => $password
				)
			);
		} else {
			$this->db->update(
				'tbl_user',
				array(
					'username' => $username,
				)
			);
		}
	}
}

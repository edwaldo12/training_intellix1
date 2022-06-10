<?php
class Login_Model extends CI_Model
{
    public function getUser($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tbl_user')->row_array();
    }
}

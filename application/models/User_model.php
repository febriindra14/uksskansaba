<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
	public function user()
	{
		return $this->db->get('tb_user')->result();
	}
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Proker_model extends CI_Model
{
	public function proker()
	{
		return $this->db->get('tb_proker')->result();
	}
	public function proker_add($data)
	{
		$this->db->insert('tb_proker', $data);
		return $this->db->insert_id();
	}
	public function get_by_id($id)
	{
		$this->db->from('tb_proker');
		$this->db->where('id_proker',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function proker_update($where, $data)
	{
		$this->db->update('tb_proker', $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('id_proker', $id);
		$this->db->delete('tb_proker');
	}
}
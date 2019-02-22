<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengurus_model extends CI_Model
{
	public function pengurus()
	{
		return $this->db->get('tb_pengurus')->result();
	}
	public function pengurus_add($data)
	{
		$this->db->insert('tb_pengurus', $data);
		return $this->db->insert_id();
	}
	public function get_by_id($id)
	{
		$this->db->from('tb_pengurus');
		$this->db->where('id_pengurus',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function pengurus_update($where, $data)
	{
		$this->db->update('tb_pengurus', $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('id_pengurus', $id);
		$this->db->delete('tb_pengurus');
	}
}
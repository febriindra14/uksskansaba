<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Obat_model extends CI_Model
{
	public function obat()
	{
		return $this->db->get('tb_obat')->result();
	}
	public function obat_add($data)
	{
		$this->db->insert('tb_obat', $data);
		return $this->db->insert_id();
	}
	public function get_by_id($id)
	{
		$this->db->from('tb_obat');
		$this->db->where('kd_obat',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function obat_update($where, $data)
	{
		$this->db->update('tb_obat', $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('kd_obat', $id);
		$this->db->delete('tb_obat');
	}
}
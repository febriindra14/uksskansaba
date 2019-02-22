<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Anggota_model extends CI_Model
{
	public function anggota()
	{
		return $this->db->get('tb_anggota')->result();
	}
	public function anggota_add($data)
	{
		$this->db->insert('tb_anggota', $data);
		return $this->db->insert_id();
	}
	public function get_by_id($id)
	{
		$this->db->from('tb_anggota');
		$this->db->where('kd_anggota',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function anggota_update($where, $data)
	{
		$this->db->update('tb_anggota', $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('kd_anggota', $id);
		$this->db->delete('tb_anggota');
	}
}
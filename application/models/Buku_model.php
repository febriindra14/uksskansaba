<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Buku_model extends CI_Model
{
	public function buku()
	{
		return $this->db->get('tb_buku_kunjungan')->result();
	}
	public function buku_add($data)
	{
		$this->db->insert('tb_buku_kunjungan', $data);
		return $this->db->insert_id();
	}
	public function get_by_id($id)
	{
		$this->db->from('tb_buku_kunjungan');
		$this->db->where('id_bk',$id);
		$query = $this->db->get();
		return $query->row();
	}
	public function buku_update($where, $data)
	{
		$this->db->update('tb_buku_kunjungan', $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('id_bk', $id);
		$this->db->delete('tb_buku_kunjungan');
	}
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Inventaris_model extends CI_Model
{
	var $table ='tb_inventaris';
	
	public function data_alat()
	{
		return $this->db->get('tb_inventaris')->result();
	}
	public function alat_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}	
	public function alat_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id_inventaris',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function delete_by_id($id)
	{
		$this->db->where('id_inventaris', $id);
		$this->db->delete($this->table);
	}
}	
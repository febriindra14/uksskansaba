<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Siswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('inventaris_model');
		if($this->session->userdata('level') <> 'siswa')
		{
			redirect('login');
		}
	}
	public function index()
	{
		$data=array(
			'page'		=>"dashboard",
			'inventaris'=>$this->db->get('tb_inventaris')->num_rows(),
			'buku'		=>$this->db->get('tb_buku_kunjungan')->num_rows(),
			'proker'	=>$this->db->get('tb_proker')->num_rows(),
			'obat'		=>$this->db->get('tb_obat')->num_rows(),
			'pengurus'	=>$this->db->get('tb_pengurus')->num_rows());
		$this->uks->siswa('siswa/home',$data);
	}
}
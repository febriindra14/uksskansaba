<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profil extends CI_Controller
{
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$data['page']="profil";
		$this->uks->administrator('admin/profil',$data);
	}
	public function info()
	{
		$data['page']="profilku";
		$this->uks->siswa('siswa/profiluks',$data);
	}
}
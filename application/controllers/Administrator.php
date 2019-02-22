<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Administrator extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('level') <> 'admin')
		{
			redirect('login');
		}
	}
	public function index()
	{
		$data=array(
			'page'=>"administrator"
		);
		$this->uks->administrator('admin/home',$data);
	}
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		$data=array(
				'page'		=>"user",
				'user'		=>$this->user_model->user()
		);
		$this->uks->administrator('admin/user',$data);
	}
}
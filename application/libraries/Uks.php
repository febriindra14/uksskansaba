<?php
class Uks
{
	protected $rava;
	function __construct()
	{
		$this->rava = &get_instance();
	}
	function administrator($a,$b=null)
	{
		$data['administrator']=$this->rava->load->view($a,$b,true);
		$this->rava->load->view('admin/administrator',$data);
	}
	function siswa($c,$d=null)
	{
		$data['user']=$this->rava->load->view($c,$d,true);
		$this->rava->load->view('siswa/user',$data);
	}
}
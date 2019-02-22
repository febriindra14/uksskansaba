<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller{
	public function index()
	{
		$this->load->view('Login_view');
	}
	public function masuk()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$cek = $this->model_login->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				$sess_data['id_user'] = $data->id_user;
				$sess_data['username'] = $data->username;
				$sess_data['nama_lengkap']=$data->nama_lengkap;
				$sess_data['foto']=$data->foto;
				$sess_data['level'] = $data->level;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('level') == 'admin')
			{
				redirect('administrator');
			}
			elseif($this->session->userdata('level') == 'siswa')
			{
				redirect('siswa');
			}
			/*elseif($this->session->userdata('level') == 'guru')
			{
				redirect('home');
			}*/
			else {
				$this->session->set_flashdata('pesan', 'Maaf, Akun Tidak ada!!!.');
				redirect('login');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf,username atau password salah' );
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
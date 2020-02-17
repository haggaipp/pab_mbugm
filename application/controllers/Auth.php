<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Login Page - Penerimaan Anggota Baru Marching Band UGM';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		}
		else
		{
			$this->_login();
		}
	}

	private function _login()
	{
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');

		$user		= $this->db->get_where('panitia',['username' => $username])->row_array();

		if($user)
		{
			if($password == $user['password'])
			{
				$data = [
					'username' 		=> $user['username']
					//'role_id'		=> $user['role_id']
				];
				$this->session->set_userdata($data);
				redirect('user');
			}
			else
			{
				$this->session->set_flashdata('message','
					<div class="alert alert-danger" role="alert">
					 	Wrong Password!
					</div>
					');
				redirect('auth');
			}
		}
		else
		{
			$this->session->set_flashdata('message','
				<div class="alert alert-danger" role="alert">
				 	Username is not registered
				</div>
				');
			redirect('auth');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata(['username','password']);
		$this->session->set_flashdata('message','
				<div class="alert alert-success" role="alert">
				 You have been logged out!
				</div>
				');
		redirect('auth');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller 
{
	public function index()
	{
		$data['title'] = 'Welcome Page';
		$data['user'] = $this->db->get_where('panitia',['username' => $this->session->userdata['username']])->row_array();

		$this->load->view('templates/header',$data);
		$this->load->view('menu/index',$data);
	}

	public function daftar()
	{
		$data['title'] 	= 'Daftar Calon Anggota Marching Band Rotasi XXXVIII';
		$data['user'] 	= $this->db->get_where('panitia',['username' => $this->session->userdata['username']])->row_array();
		$data['calang'] = $this->db->get('user')->result_array();
		/*var_dump($data);
		die();*/

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/daftar',$data);
		$this->load->view('templates/footer',$data);
	}

	public function scan()
	{
		$data['title'] = 'Scan QR Code';
		$data['user'] 	= $this->db->get_where('panitia',['username' => $this->session->userdata['username']])->row_array();
		$data['calang'] = $this->db->get('user')->result_array();
		
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/scan',$data);
		$this->load->view('templates/footer',$data);
	}

	public function view()
	{
		$data = 
		[
			'title'		=> 'Data Lengkap',
			'user'		=> $this->db->get_where('panitia',['username' => $this->session->userdata['username']])->row_array(),
			'calang' 	=> $this->db->get_where('user',['key_id' => $this->input->get('key')])->row_array()
		];
		$calang	= $this->db->get_where('datalengkap',['id' => $data['calang']['data_id']])->row_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/view',$calang);
		$this->load->view('templates/footer',$data);
		
	}

	public function dashboard()
	{
		$data['title'] = 'Scan QR Code';
		$data['user'] 	= $this->db->get_where('panitia',['username' => $this->session->userdata['username']])->row_array();
		$data['calang'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('templates/topbar',$data);
		$this->load->view('menu/dashboard',$data);
		$this->load->view('templates/footer',$data);
	}
}
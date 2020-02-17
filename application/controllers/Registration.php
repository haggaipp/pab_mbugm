<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$listVariable	= [
			'namaLengkap','namaPanggilan','nim'
		];

		foreach ($listVariable as $l => $var) {
			$this->_validation($var,'');
		}

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Form Pendaftaran - Pendaftaran Anggota Baru Marching Band UGM 2019';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('registration/index');
			$this->load->view('templates/auth_footer');
		}
		else
		{
			$nim = $this->input->post('nim');
			$user = $this->db->get_where('user',['nim' => $nim])->row_array();
			if($user)
			{
				$this->session->set_flashdata('message','
					<div class="alert alert-danger small" role="alert">
					 	Nomor Induk Mahasiswa <b><i>('.$nim.')</i></b> sudah pernah digunakan, mohon hubungi admin!
					</div>
					');
				redirect('registration');
			}
			else
			{
				$key  	= base64_encode(random_bytes(8));
				$data 	= [
					'nim'			=> $this->input->post('nim'),
					'status'		=> 1,
					'key_id'		=> $key,
					'nama_lengkap'	=> $this->input->post('namaLengkap'),
					'nama_panggilan' => $this->input->post('namaPanggilan')
				];

				$this->db->insert('user',$data);
				$this->session->set_userdata($data);
				redirect('registration/form');
			}
		}
	}

	private function _validation($variable,$name)
	{
		$this->form_validation->set_rules($variable,$name,'required|trim',[
			'required' => "Form ini harus diisi!"
		]);
	}

	public function form()
	{
		user_access();

		//Validasi
		$listVariable	= [
			'tempatLahir', 'tinggiBadan', 'beratBadan', 'hobi','asal','namaOrtu','nomorOrtu','pekerjaanOrtu','nomorTelepon','alamatJogja','alamatAsal','line','ig'
		];

		foreach ($listVariable as $l => $var) {
			$this->_validation($var,'');
		}

		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[datalengkap.email]',[
			'required' 		=> "Form ini harus diisi!",
			'valid_email' 	=> "Mohon memasukkan email yang benar",
			'is_unique'		=> "Email sudah pernah dimasukkan!"
		]);

		if($this->form_validation->run() == false)
		{
			$data = [
				//DATA JUDUL
				'title'			=> 'Form Pendaftaran - Pendaftaran Anggota Baru Marching Band UGM 2019',
				'penyakit'		=> $this->db->get('datapenyakit')->result_array(),
				//DATA POST FORM SEBELUMNYA
				'namalengkap'	=> $this->session->userdata['nama_lengkap'],
				'namapanggilan'	=> $this->session->userdata['nama_panggilan'],
				'nim'			=> $this->session->userdata['nim'],
				//DATA DROPDOWN
				'jenjang' 		=> $this->db->get('jenjang')->result_array(),
				'fakultas'		=> $this->db->get('fakultas')->result_array(),
				'prodi'			=> $this->db->get('prodi')->result_array(),
				'bulan'			=> $this->db->get('bulan')->result_array(),
				'tahun'			=> $this->db->get('tahun')->row_array(),
				'agama'			=> $this->db->get('agama')->result_array(),
				'golonganDarah'	=> $this->db->get('golongandarah')->result_array(),
				'kelamin'		=> $this->db->get('kelamin')->result_array(),
				'tempatTinggal'	=> $this->db->get('tempat_tinggal')->result_array(),
				'section'		=> $this->db->get('section')->result_array(),
				'musik'			=> $this->db->get('musik')->result_array()
			];

			$this->load->view('templates/auth_header', $data);
			$this->load->view('registration/form', $data);
			$this->load->view('templates/auth_footer');
		}
		else
		{
			$data = [
				'nama_lengkap'		=> $this->input->post('namaLengkap'),
				'nama_panggilan'	=> $this->input->post('namaPanggilan'),
				'tempatlahir'		=> $this->input->post('tempatLahir'),
				'tanggallahir'		=> $this->input->post('tanggalLahir'),
				'bulanlahir'		=> $this->input->post('bulanLahir'),
				'tahunlahir'		=> $this->input->post('tahunLahir'),
				'jeniskelamin'		=> $this->input->post('jenisKelamin'),
				'agama'				=> $this->input->post('agama'),
				'golongandarah'		=> $this->input->post('golonganDarah'),
				'tinggibadan'		=> $this->input->post('tinggiBadan'),
				'beratbadan'		=> $this->input->post('beratBadan'),
				'hobi'				=> $this->input->post('hobi'),
				'penyakit1'			=> $this->input->post('penyakit1'),
				'penyakit2'			=> $this->input->post('penyakit2'),
				'penyakit3'			=> $this->input->post('penyakit3'),
				'jenjang_id'		=> $this->input->post('jenjang'),
				'nim'				=> $this->input->post('nim'),
				'fakultas_id'		=> $this->input->post('fakultas'),
				'prodi_id'			=> $this->input->post('prodi'),
				'asalsekolah'		=> $this->input->post('asal'),
				'namaorangtua'		=> $this->input->post('namaOrtu'),
				'pekerjaanorangtua'	=> $this->input->post('pekerjaanOrtu'),
				'nomortelepon'		=> $this->input->post('nomorTelepon'),
				'email'				=> $this->input->post('email'),
				'alamatjogja'		=> $this->input->post('alamatJogja'),
				'alamatasal'		=> $this->input->post('alamatAsal'),
				'jenistempattinggal'=> $this->input->post('jenisTempatTinggal'),
				'jammalam'			=> $this->input->post('jamMalam'),
				'line'				=> $this->input->post('line'),
				'ig'				=> $this->input->post('ig'),
				'prestasimusik'		=> $this->input->post('prestasiMusik'),
				'prestasitari'		=> $this->input->post('prestasiTari'),
				'riwayatorganisasi'	=> $this->input->post('riwayatOrganisasi'),
				'pernahmarching'	=> $this->input->post('pernahMarching'),
				'unitsebelum'		=> $this->input->post('unitSebelum'),
				'section'			=> $this->input->post('section'),
				'alatmusik'			=> $this->input->post('musik')
			];

			$this->db->insert('datalengkap',$data);
			$cek 	= $this->db->get_where('datalengkap',['nim' => $data['nim']])->row_array();
			$this->db->where('nim',$data['nim']);
			$this->db->update('user',['data_id' => $cek['id']]);

			$content = "<div class='alert alert-success' role='alert'>Selamat, data anda berhasil di masukkan. Silahkan check <a href='registration/success?id=".$cek['id']."'target='_blank'>email</a> anda!</div>";
			$this->session->set_flashdata('message',$content);
			$this->session->unset_userdata(['nim','status','key_id','nama_lengkap','nama_panggilan']);
			redirect('registration');
		}
	}

	public function viewSession()
	{
		var_dump($this->session->userdata());
	}

	public function unset()
	{
		$this->session->unset_userdata(['nim','status','key_id','nama_lengkap','nama_panggilan']);
		$this->session->set_flashdata('message','
				<div class="alert alert-success" role="alert">
				 Your data has been unset!
				</div>
				');
		redirect('registration');
	}

	public function success()
	{
		$id 	= $this->input->get('id');
		$data 	= $this->db->get_where('user',['data_id' => $id])->row_array();
		if($data)
		{
			include APPPATH . 'third_party/qrcode/qrlib.php';
			QRcode::png($data['key_id'],'qr.png',"M","8","0");
			$this->load->view('registration/success',$data);
		}
		else
		{
			$this->session->set_flashdata('message','
				<div class="alert alert-danger" role="alert">
				 Your data invalid!
				</div>
				');
			redirect('registration');
		}
	}
}
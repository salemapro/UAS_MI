<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
	{
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_mahasiswa');
		//  if (!$this->M_auth->current_user()) {
		// 	 redirect('auth/login');
		//  }
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}


	public function index()
	{
		$data['sample'] = $this->M_mahasiswa->get_data();
		$this->load->view('v_header.php',$data);
		$this->load->view('v_main.php',$data);
		$this->load->view('v_footer.php',$data);
	}

	public function about()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_about.php');
		$this->load->view('v_footer.php');
	}
	
	public function profile()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_profile.php');
		$this->load->view('v_footer.php');
	}

	public function jadwal()
	{
		$this->load->view('v_header.php');
		$this->load->view('v_jadwal.php');
		$this->load->view('v_footer.php');
	}
}

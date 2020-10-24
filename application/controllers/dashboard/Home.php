<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_m');
		$this->load->helper('aw_helper');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') != "" && $this->session->userdata('level') == "Stocker") {

			//kirim data
			$d['dtbarang'] = $this->Dashboard_m->barang();
			$d['dtstock'] = $this->Dashboard_m->stock();
			$d['dtsupplier'] = $this->Dashboard_m->supplier();
			$d['dtincoming'] = $this->Dashboard_m->incoming();
			$d['dtused'] = $this->Dashboard_m->used();
			$d['dtrequest'] = $this->Dashboard_m->request();
			$d['rusak'] = $this->Dashboard_m->rusak();

			$this->load->view('dashboard/stocker', $d);
		} else if ($this->session->userdata('logged_in') != "" && $this->session->userdata('level') == "Manager") {

			//kirim data
			$d['order'] = $this->Dashboard_m->order();
			$d['dtrequest'] = $this->Dashboard_m->request();
			$d['rusak'] = $this->Dashboard_m->rusak();
			$d['user'] = $this->Dashboard_m->user();

			$this->load->view('dashboard/manager', $d);
		} else {
			redirect('auth/logout');
		}
	}
}

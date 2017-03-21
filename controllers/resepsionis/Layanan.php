<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Layanan extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url'));
		}

		public function template($layout="",$data=array())
		{
			$data['header'] = $this->load->view('resepsionis/template/Header',$data,TRUE);
			$data['body']	= $this->load->view('resepsionis/'.$layout,$data,TRUE);
			$data['footer']	= $this->load->view('resepsionis/template/Footer',$data,TRUE);
			
			$this->load->view('resepsionis/template/Kerangka',$data);
		}

		public function index()
		{
			$this->template('Layanan');
		}

	}

 ?>
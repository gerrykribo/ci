<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profil extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('url'));
			$this->load->library(array('PageTemplate'));
		}

		public function index()
		{
			$this->pagetemplate->template('Profil');
		}

		public function visiMisi()
		{
			$this->pagetemplate->template('Visi_Misi');
		}

		public function sturkturOrganisasi()
		{
			$this->pagetemplate->template('StrukturOrganisasi');
		}

	}
	
 ?>
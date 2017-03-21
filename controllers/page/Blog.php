<?php 

    defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * { item_description }
     */
    class Blog extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url','form'));
            $this->load->library(array('PageTemplate'));
            $this->load->model(array('DBartikel'));
        }

        public function index()
        {
            //$this->load->view('page/coba');
            $data['artikel'] = $this->DBartikel->selectAll();
            $this->pagetemplate->template('Blog',$data);
        }

        public function coba()
        {
            $this->pagetemplate->template('coba');   
        }

    }

 ?>
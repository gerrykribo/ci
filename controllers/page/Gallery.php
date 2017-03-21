<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * { item_description }
     */
    class Gallery extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url'));
            $this->load->library(array('PageTemplate'));
            $this->load->model(array('DBgallery'));
        }

        public function index()
        {
            $data['gallery'] = $this->DBgallery->selectAll();
            $this->pagetemplate->template('Gallery',$data);
        }

        public function waktu()
        {
            echo date('l, d-m-Y  h:i:s a');
        }
    }
?>
<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * { item_description }
     */
    class PageTemplate
    {
        
        public  $_ci;

        public function __construct()
        {
            $this->_ci =& get_instance();
        }

        public function template($layout, $data = NULL)
        {
            $data['header'] = $this->_ci->load->view('page/template/Header',$data,true);
            $data['body']   = $this->_ci->load->view('page/'.$layout,$data,true);
            $data['footer'] = $this->_ci->load->view('page/template/Footer',$data,true);
            
            $this->_ci->load->view('page/template/Kerangka',$data);
        }

    }
    
 ?>
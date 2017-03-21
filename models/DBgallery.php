<?php

     defined('BASEPATH') OR exit('No direct script access allowed');

    /**
    * 
    */
    class DBgallery extends CI_Model
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->_ci = $this->load->database('default', TRUE);
        }

        public function totalFoto()
        {
            $sql = $this->_ci
                ->get('gallery')
                ->num_rows();
            return $sql;
        }

        public function selectAll()
        {
            $sql = $this->_ci
                ->get('gallery')
                ->result_array();
            return $sql;
        }

        public function simpanFoto($data)
        {
            $sql = $this->_ci
                ->insert('gallery', $data);
            return $sql;
        }

        public function getData($id)
        {
            $sql = $this->_ci
                ->get_where('gallery', array('id_gallery' => $id))
                ->result_array();
            return $sql;
        }

        public function simpanEdit($id,$data)
        {
            if (isset($data['file_foto'])) {
                $delete_foto = $this->getData($id);
                $path = 'assets/uploads/gallery/'.$delete_foto[0]['file_foto'];
                unlink($path);
            }

            $sql = $this->_ci
                ->update('gallery', $data, array('id_gallery' => $id));
            return $sql;

        }

        public function deleteFoto($id)
        {
            $delete_foto = $this->getData($id);
            $path = 'assets/uploads/gallery/'.$delete_foto[0]['file_foto'];
            unlink($path);

            $sql = $this->_ci
                ->delete('gallery', array('id_gallery' => $id));
            return $sql;
        }

    }

 ?>
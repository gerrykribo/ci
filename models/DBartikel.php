<?php 
    defined('BASEPATH') OR exit('No script defined access !');

    /**
    * data base name blog
    */
    class DBartikel extends CI_Model
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->_ci = $this->load->database('default', true);
        }

        public function dasbord()
        {
            $sql = $this->_ci
                ->select('*')
                ->from('artikel')
                ->order_by('tanggal_artikel'," DESC")
                ->limit(4)
                ->get()
                ->result_array();
            return $sql;
        }

        public function totalArtikel()
        {
            $sql = $this->_ci
                ->get('artikel')
                ->num_rows();
            return $sql;
        }

        public function selectAll()
        {
            $sql = $this->_ci
                ->get('artikel')
                ->result_array();
            return $sql;
        }

        public function simpanArtikel($data)
        {
            $sql = $this->_ci
                ->insert('artikel', $data);
            return $sql;
        }

        public function getEditArtikel($id)
        {
            $sql = $this->_ci
                ->get_where('artikel', array('id_artikel' => $id))
                ->result_array();
            return $sql;
        }

        public function simpanEdit($data,$id)
        {
            $sql = $this->_ci
                ->update('artikel', $data, array('id_artikel' => $id,));
            return $sql;
        }

        public function deleteArtikel($id)
        {
            $sql = $this->_ci
                ->delete('artikel', array('id_artikel' => $id));
            return $sql;
        }

    }
 ?>
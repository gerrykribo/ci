<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 2/1/17
 * Time: 12:48 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class DBadmin
 * @property CI_Model
 */
class DBadmin extends CI_Model {

    public $db;

    /**
     * DBadmin constructor.
     * @property CI_DB_driver $database
     */
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('', true);
    }

    public function cekUser($data)
    {
        $query = $this->db
            ->get_where('user',$data);

        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return False;
        }
    }

}
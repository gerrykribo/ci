<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 1/31/17
 * Time: 9:16 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Admin
 * @property My_admin
 */

class Admin extends My_admin {

    /**
     * Admin constructor.
     * @property CI_URI $url
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    // page dasbord
    public function index()
    {
        $data['grafig_kuisioner'] = $this->DBkuisioner->totalKuisioner();
        $data['jml_orang']        = $this->DBkuisioner->totalOrang();
        $data['jml_artikel']      = $this->DBartikel->totalArtikel();
        $data['jml_foto']         = $this->DBgallery->totalFoto();

        $this->admintemplate->template('admin/dasbord/Body',$data);
    }
    
    // page kusioner
    public function kuisioner()
    {
        $data['yuuhu'] = 1;
        $data['jml_orang']        = $this->DBkuisioner->totalOrang();

        $this->admintemplate->template('admin/kuisioner/Kuisioner',$data);
    }

    // end page dasbord
    public function logOut()
    {
        $this->session->sess_destroy();
        redirect('index.php/home/login');
    }

}
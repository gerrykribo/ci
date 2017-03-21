<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 * @property CI_Controller $this->load
 * @property  DBkuisioner
 *
 */
class Home extends CI_Controller {

    public $input;

    /**
     * Home constructor.
     * @property CI_URI $url
     * @property CI_Model $this
     * @property CI_Session_driver $session
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation','session','KuisionerLib'));
        $this->load->model(array('DBadmin','DBkuisioner','DBgallery','DBartikel'));
    }

    /**
     * Template web header, menu, footer
     * @param string $layout
     * @param array $data
     */
    public function template($layout="", $data=array())
    {
        $this->load->view('home/template/Header');
        $this->load->view('home/template/Menu');
        $this->load->view('home/template/Dasbord_Menu');
        $this->load->view('home/'.$layout, $data);
        $this->load->view('home/template/Footer');
    }


    public function index()
    {

        $kuisioner       = $this->input->get('kuisioner'); 
        $data['gallery'] = $this->DBgallery->selectAll();
        $data['artikel'] = $this->DBartikel->dasbord();

        if ($kuisioner == 'salah') {
            $data['error_kuisioner'] = '
            <div class="alert alert-warning">
                <button data-dismiss="alert" class="close" type="button">&times;</button>
                Anda Belum Memilih Kuisioner Layanan Kami
            </div>';

            $this->template('Body',$data);
        } elseif ($kuisioner == 'benar') {
            $data['error_kuisioner'] = '
            <div class="alert alert-success">
                <button data-dismiss="alert" class="close" type="button">&times;</button>
                Terima Kasih Telah Memberikan Tanggapan Anda Ke Kami
            </div>';
            
            $this->template('Body',$data);
        } else {
            $this->template('Body',$data);
        }
        
    }

    /**
     * Form page login
     */
    public function logIn()
    {
        $this->load->view('admin/Login');
    }

    /**
     * Login proses.
     *
     */
    public function prosesLogin()
    {
        $this->form_validation->set_rules('username', 'Password', 'required',
            $username = array('required' => 'Anda belum memasukan username'));
        $this->form_validation->set_rules('password', 'Email', 'required',
            $password = array('required' => 'Anda belum memasukan password.'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/Index');
        } else {
            $data = array(
                'username '  => $this->input->post('username'),
                'password'   => md5($this->input->post('password')),
            );

            $cek = $this->DBadmin->cekUser($data);

            if ($cek == False) {
                $cek['pesan'] = 'Username dan Password ada yang salah';

                $this->load->view('admin/Index',$cek);
            } else {
                $this->session->set_userdata('id_user', $cek[0]['id_user']);
                $this->session->set_userdata('level', $cek[0]['level']);

                redirect('index.php/admin/admin/index');
            }

        }
    }

    /**
     * Simpan data kuisioner
     * @return index
     */
    public function simpanKuisioner()
    {
        // id kuisioner
        $id_kuisioner       = date('mdYhis').'_quis_'.rand('1','100');
      
        // data resepsionis
        $layanan1           = 'resepsionis';
        $resepsionis        = $this->input->post('resepsionis');
        $tidakResepsionis   = $this->input->post('tidak-resepsionis');
        $lainResepsionis    = $this->input->post('lain2');

        if (count($resepsionis) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan1,$resepsionis,$tidakResepsionis,$lainResepsionis);
        }
        
        // data loket
        $layanan2           = 'loket';
        $loket              = $this->input->post('loket');
        $tidakLoket         = $this->input->post('tidak-loket');
        $lainLoket          = $this->input->post('lain2loket');

        if (count($loket) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan2,$loket,$tidakLoket,$lainLoket);
        }

        // data Poli Umum
        $layanan3          = 'umum';
        $umum              = $this->input->post('umum');
        $tidakUmum         = $this->input->post('tidak-umum');
        $lainUmum          = $this->input->post('lain2umum');
        
        if (count($umum) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan3,$umum,$tidakUmum,$lainUmum);
        }

        // data poli kia
        $layanan4         = 'kia';
        $kia              = $this->input->post('kia');
        $tidakKia         = $this->input->post('tidak-kia');
        $lainKia          = $this->input->post('lain2kia');
        
        if (count($kia) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan4,$kia,$tidakKia,$lainKia);
        }

        // data poli Gigi
        $layanan5          = 'gigi';
        $gigi              = $this->input->post('gigi');
        $tidakGigi         = $this->input->post('tidak-gigi');
        $lainGigi          = $this->input->post('lain2gigi');
        
        if (count($gigi) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan5,$gigi,$tidakGigi,$lainGigi);
        }

        // data poli Konsultasi GIZI/KRR/Sanitasi
        $layanan6                = 'konsultasi';
        $konsultasi              = $this->input->post('konsultasi');
        $tidakKonsultasi         = $this->input->post('tidak-konsultasi');
        $lainKonsultasi          = $this->input->post('lain2gigi');
        
        if (count($konsultasi) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan6,$konsultasi,$tidakKonsultasi,$lainKonsultasi);
        }

        // data Laboratorium
        $layanan7                  = 'laboratorium';
        $laboratorium              = $this->input->post('laboratorium');
        $tidakLaboratorium         = $this->input->post('tidak-laboratorium');
        $lainLaboratorium          = $this->input->post('lain2laboratorium');
        
        if (count($laboratorium) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan7,$laboratorium,$tidakLaboratorium,$lainLaboratorium);
        }

        // data Kamar Obat
        $layanan8               = 'kamarobat';
        $kamarObat              = $this->input->post('kamarObat');
        $tidakKamarObat         = $this->input->post('tidak-kamarObat');
        $lainkamarObat          = $this->input->post('lain2kamarObat');
        
        if (count($kamarObat) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan8,$kamarObat,$tidakKamarObat,$lainkamarObat);
        }

        // data UGD
        $layanan9   = 'ugd';
        $ugd        = $this->input->post('ugd');
        $tidakUgd   = $this->input->post('tidak-ugd');
        $lainUgd    = $this->input->post('lain2ugd');

        if (count($ugd) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan9,$ugd,$tidakUgd,$lainUgd);
        }

        // data Rawat Inap
        $layanan10      = 'rawatinap';
        $rawatInap      = $this->input->post('rawatInap');
        $tidakRawatInap = $this->input->post('tidak-rawatInap');
        $lainRawatInap  = $this->input->post('lain2rawatInap');

        if (count($rawatInap) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan10,$rawatInap,$tidakRawatInap,$lainRawatInap);
        }

        // data Parkir
        $layanan11   = 'parkir';
        $parkir      = $this->input->post('parkir');
        $tidakParkir = $this->input->post('tidak-parkir');
        $lainParkir  = $this->input->post('lain2parkir');

        if (count($parkir) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan11,$parkir,$tidakParkir,$lainParkir);
        }

        // data Ruang Tunggu
        $layanan12        = 'ruangtunggu';
        $ruangTunggu      = $this->input->post('ruangTunggu');
        $tidakRuangTunggu = $this->input->post('tidak-ruangTunggu');
        $lainRuangTunggu  = $this->input->post('lain2ruangTunggu');

        if (count($ruangTunggu) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan12,$ruangTunggu,$tidakRuangTunggu,$lainRuangTunggu);
        }

        // data Kamar Mandi
        $layanan13       = 'kamarmandi';
        $kamarMandi      = $this->input->post('kamarMandi');
        $tidakKamarMandi = $this->input->post('tidak-kamarMandi');
        $lainKamarMandi  = $this->input->post('lain2kamarMandi');

        if (count($kamarMandi) > 0) {
            $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan13,$kamarMandi,$tidakKamarMandi,$lainKamarMandi);
        }
        
        // end input data
        if (!isset($data)) {
            redirect('index.php/home/index?kuisioner=salah');
        } else {
            
            $this->DBkuisioner->inputKuisioner($data);
            redirect('index.php/home/index?kuisioner=benar');
        }
        
    }
}
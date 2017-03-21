<?php 
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Tanggapan extends CI_Controller
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url','form'));
            $this->load->library(array('PageTemplate','KuisionerLib'));
            $this->load->model(array('DBkuisioner'));
        }

        public function index()
        {
            $kuisioner = $this->input->get('kuisioner');
            $data['pelayanan'] = array('Resepsionis', 'Loket', 'Umum', 'Gigi', 'Kespro', 'KIA', 'Laboratorium', 'Gizi', 'Sanitasi', 'KRR', 'Kamar Obat', 'UGD', 'Kamar Bersalin', 'Rawat Inap');
            $data['namaVariabel']   = array('resepsionis', 'loket', 'umum', 'gigi', 'kespro', 'kia', 'laboratorium', 'gizi', 'sanitasi', 'krr', 'kamarObat', 'ugd', 'kaber', 'rawatInap');

            if ($kuisioner == 'salah') {
                $data['error_kuisioner'] = '
                <div class="alert alert-warning">
                    <button data-dismiss="alert" class="close" type="button">&times;</button>
                    Anda Belum Memilih Kuisioner Layanan Kami
                </div>';

                $this->pagetemplate->template('Tanggapan', $data);
            } elseif ($kuisioner == 'benar') {
                $data['error_kuisioner'] = '
                <div class="alert alert-success">
                    <button data-dismiss="alert" class="close" type="button">&times;</button>
                    Terima Kasih Telah Memberikan Tanggapan Anda Ke Kami
                </div>';
    
                $this->pagetemplate->template('Tanggapan', $data);
    
            } else {
                $data['error_kuisioner'] = null;
                $this->pagetemplate->template('Tanggapan', $data);
    
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
            $layanan2   = 'loket';
            $loket      = $this->input->post('loket');
            $tidakLoket = $this->input->post('tidak-loket');
            $lainLoket  = $this->input->post('lain2loket');

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

            // data poli Gigi
            $layanan4          = 'gigi';
            $gigi              = $this->input->post('gigi');
            $tidakGigi         = $this->input->post('tidak-gigi');
            $lainGigi          = $this->input->post('lain2gigi');
            
            if (count($gigi) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan4,$gigi,$tidakGigi,$lainGigi);
            }

            // data poli Kespro
            $layanan5    = 'kespro';
            $kespro      = $this->input->post('kespro');
            $tidakKespro = $this->input->post('tidak-kespro');
            $lainKespro  = $this->input->post('lain2kespro');
            
            if (count($kespro) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan5,$gigi,$tidakGigi,$lainGigi);
            }

            // data kia
            $layanan6         = 'kia';
            $kia              = $this->input->post('kia');
            $tidakKia         = $this->input->post('tidak-kia');
            $lainKia          = $this->input->post('lain2kia');
            
            if (count($kia) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan6,$kia,$tidakKia,$lainKia);
            }

            // data Laboratorium
            $layanan7                  = 'laboratorium';
            $laboratorium              = $this->input->post('laboratorium');
            $tidakLaboratorium         = $this->input->post('tidak-laboratorium');
            $lainLaboratorium          = $this->input->post('lain2laboratorium');
            
            if (count($laboratorium) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan7,$laboratorium,$tidakLaboratorium,$lainLaboratorium);
            }

            // data poli Konsultasi GIZI
            $layanan8  = 'gizi';
            $gizi      = $this->input->post('gizi');
            $tidakGizi = $this->input->post('tidak-gizi');
            $lainGizi  = $this->input->post('lain2gizi');
            
            if (count($gizi) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan8,$gigi,$tidakGizi,$lainGigi);
            }

            // data Sanitasi
            $layanan9      = 'sanitasi';
            $sanitasi      = $this->input->post('sanitasi');
            $tidakSanitasi = $this->input->post('tidak-sanitasi');
            $lainSanitasi  = $this->input->post('lain2sanitasi');
            
            if (count($sanitasi) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan9,$sanitasi,$tidakSanitasi,$lainSanitasi);
            }

            // data Krr
            $layanan10 = 'krr';
            $krr       = $this->input->post('krr');
            $tidakKrr  = $this->input->post('tidak-krr');
            $lainKrr   = $this->input->post('lain2krr');

            if (count($krr) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan10,$krr,$tidakKrr,$lainKrr);
            }

            // data Rawat Inap
            $layanan11      = 'kamarObat';
            $kamarObat      = $this->input->post('kamarObat');
            $tidakKamarObat = $this->input->post('tidak-kamarObat');
            $lainKamarObat  = $this->input->post('lain2kamarObat');

            if (count($kamarObat) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan11,$kamarObat,$tidakKamarObat,$lainKamarObat);
            }

            // data UGD
            $layanan12 = 'ugd';
            $ugd       = $this->input->post('ugd');
            $tidakUgd  = $this->input->post('tidak-ugd');
            $lainUgd   = $this->input->post('lain2ugd');

            if (count($ugd) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan12,$ugd,$tidakUgd,$lainUgd);
            }

            // data Kamar Bersalin
            $layanan13  = 'kaber';
            $kaber      = $this->input->post('kaber');
            $tidakKaber = $this->input->post('tidak-kaber');
            $lainKaber  = $this->input->post('lain2kaber');

            if (count($kaber) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan13,$kaber,$tidakKaber,$lainKaber);
            }

            // data Rawat Inap
            $layanan14      = 'rawatInap';
            $rawatInap      = $this->input->post('rawatInap');
            $tidakrawatInap = $this->input->post('tidak-rawatInap');
            $lainrawatInap  = $this->input->post('lain2rawatInap');

            if (count($rawatInap) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan14,$rawatInap,$tidakrawatInap,$lainrawatInap);
            }

             // data Rawat Inap
            $layanan15       = 'kamarMandi';
            $kamarMandi      = $this->input->post('kamarMandi');
            $tidakKamarMandi = $this->input->post('tidak-kamarMandi');
            $lainKamarMandi  = $this->input->post('lain2kamarMandi');

            if (count($kamarMandi) > 0) {
                $data[] = $this->kuisionerlib->kuisioner($id_kuisioner,$layanan15,$kamarMandi,$tidakKamarMandi,$lainKamarMandi);
            }
            
            // end input data
            if (!isset($data)) {
                redirect('index.php/page/tanggapan?kuisioner=salah');
            } else {
                $this->DBkuisioner->inputKuisioner($data);
                redirect('index.php/page/tanggapan?kuisioner=benar');
            }
        }

        public function simpanKeramahan()
        {
          $id_keramahan = date('mdYhis').'_keramahan_'.rand('1','100');

            foreach ($_POST as $key => $value) {

                if ($this->input->post($key) == 'tidak puas') {
                    $data[] = array(
                        'id_kuisioner'  => $id_keramahan,
                        'layanan'       => $key,
                        'tgl_kuisioner' => date('Y-m-d'),
                        'tidak_ramah'     => $this->input->post($key),
                    );
                } else {
                    $data[] = array(
                        'id_kuisioner'  => $id_keramahan,
                        'layanan'       => $key,
                        'tgl_kuisioner' => date('Y-m-d'),
                        'ramah'         => $this->input->post($key),
                    );
                }          
            }

            $query = $this->DBkuisioner->saveKeramahan($data);

            if ($query == true) {
                redirect('index.php/page/tanggapan?kuisioner=benar');
            } else {
                redirect('index.php/page/tanggapan?kuisioner=salah');
            }
        }

    }

?>
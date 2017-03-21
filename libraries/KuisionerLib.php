<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class KuisionerLib {

        public function kuisioner($id_kuisioner,$layanan,$jwb1,$jwb2,$lain)
        {   

            if ($jwb1 == 'tidak puas') {
               
            $pendalaman['id_kuisioner']  = $id_kuisioner;
            $pendalaman['tgl_kuisioner'] = date('Y-m-d');
            $pendalaman['tidak_puas']    = $jwb1;
         
                if (count($jwb2) > 0) {
                    
                    foreach ($jwb2 as $key => $value) {
                        
                        if ($value == 'lain lain') {
                            $pendalaman['lain_lain'] = $lain;
                        } elseif ($value == 'kecepatan tindakan') {
                            $pendalaman['kecepatan_tindakan'] = 'kecepatan tindakan';
                        } else {
                            $pendalaman[$value] = $value;
                        }

                    }

                    $data = array(
                        'layanan'               => $layanan,
                        'tanggapan'             => 'tidak',
                        'tidak'                 => $pendalaman,
                    );

                } else {
             
                    $data = array(
                        'layanan'               => $layanan,
                        'tanggapan'             => 'tidak',
                        'tidak'                 => $pendalaman,
                    );
             
                }

            } elseif ($jwb1 == 'puas') {
                $pendalaman['id_kuisioner']  = $id_kuisioner;
                $pendalaman['tgl_kuisioner'] = date('Y-m-d');
                $pendalaman['puas']          = 'puas';
                
                $data = array(
                    'layanan'       => $layanan,
                    'tanggapan'     => 'puas',
                    'tidak'         => $pendalaman,
                );
            }

            return $data;
        }

        // data kuisioner
        public function kuisionerJS($kuisioner)
        {
            $data['dataLabels'] = array("Januari", "February", "Maret", "April", "Mey", "Juni", "July", "Agustus", "Oktober", "November", "Desember");
            $data['totalTahin'] = array(
                    'label: "Puas",
                    fillColor: "rgba(210, 214, 223, 1)",
                    strokeColor: "rgba(210, 214, 222, 1)",
                    pointColor: "rgba(210, 214, 222, 1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: <?php echo json_encode($grafig_kuisioner[0]);'
                ); 
        }

    }
 
 ?>
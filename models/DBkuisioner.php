<?php
/**
 * Created by PhpStorm.
 * User: gerry
 * Date: 2/5/17
 * Time: 12:16 AM
 */

 defined('BASEPATH') OR exit('No direct script access allowed');


 class DBkuisioner extends CI_Model
 {
    public function __construct()
    {
         parent::__construct();
         $this->db = $this->load->database('default', true);
    }

    public function inputKuisioner($data)
    {
        // for ($i=0; $i < count($data); $i++) {
        //     $this->db->insert($data[$i]['layanan'],$data[$i]['tidak']);
        // }

        for ($i=0; $i < count($data); $i++) { 

            $data[$i]['tidak']['layanan'] = $data[$i]['layanan'];

            $this->db->insert('kuisioner', $data[$i]['tidak']);
        }

        return true;
    }

    public function totalKuisioner()
    {

        $table  = array('resepsionis', 'loket', 'umum', 'gigi', 'kespro', 'kia', 'laboratorium', 'gizi', 'sanitasi', 'krr', 'kamarObat', 'ugd', 'kaber', 'rawatInap', 'kamarMandi');
        $field  = array('puas', 'tidak_puas');

        for ($i=0; $i < count($table); $i++) { 
            
            for ($w=0; $w < count($field); $w++) {
                $sql[$i][]= $this->db
                    ->select(array($field[$w],'layanan'))
                    ->from('kuisioner')
                    ->where(array('layanan' => $table[$i], $field[$w].' !=' => 'NULL'))
                    ->get()
                    ->num_rows();
            }

            $data[0][] = $sql[$i][0];
            $data[1][] = $sql[$i][1]; 

        }

        return $data;
    }

    public function totalOrang()
    {
        $sql = $this->db
            ->select('id_kuisioner')
            ->from('kuisioner')
            ->group_by('id_kuisioner')
            ->get()
            ->num_rows();

        return $sql;
    }

    // keramahan
    
    public function saveKeramahan($data)
    {
        for ($w=0; $w < count($data); $w++) { 
            $sql = $this->db->insert('keramahan_petugas',$data[$w]);
        }
        return $sql;
    }

    public function totalKuisionerKeramahan()
    {
        $table  = array('resepsionis', 'loket', 'umum', 'gigi', 'kespro', 'kia', 'laboratorium', 'gizi', 'sanitasi', 'krr', 'kamarObat', 'ugd', 'kaber', 'rawatInap');
        $field  = array('ramah', 'tidak_ramah');

        for ($i=0; $i < count($table); $i++) { 
            
            for ($w=0; $w < count($field); $w++) {
                $sql[$i][]= $this->db
                    ->select(array($field[$w],'layanan'))
                    ->from('keramahan_petugas')
                    ->where(array('layanan' => $table[$i], $field[$w].' !=' => 'NULL'))
                    ->get()
                    ->num_rows();
            }

            $data[0][] = $sql[$i][0];
            $data[1][] = $sql[$i][1]; 

        }

        return $data;
    }

    public function totalOrangKeramahan()
    {
        $sql = $this->db
            ->select('id_kuisioner')
            ->from('keramahan_petugas')
            ->group_by('id_kuisioner')
            ->get()
            ->num_rows();

        return $sql;
    }

}
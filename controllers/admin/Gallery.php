<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    /**
    * 
    */
    class Gallery extends My_Admin
    {
        
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * tampil data gallery
         */
        public function index()
        {
            $data['tampilArtikel']= 1;
            $this->session->unset_userdata('id_foto');
            $data['gallery'] = $this->DBgallery->selectAll();
            $this->admintemplate->template('admin/gallery/DataGallery',$data);
        }

        /**
         * form tambah data
         */
        public function tambahFoto()
        {
            $data['error'] = " ";
            $this->admintemplate->template('admin/gallery/TambahFoto', $data);
        }

        /**
         * simpan data
         */
        public function simpanFoto()
        {

            $this->form_validation->set_rules('judul_foto', 'Judul Foto', 'required', 
                array('required' => '%s harus di isi.')
                );
            $this->form_validation->set_rules('deskripsi_foto', 'Deskripsi Foto', 'required', 
                array('required' => '%s harus di isi.')
                );

            $config['upload_path']          = 'assets/uploads/gallery/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('file_foto') == FALSE | $this->form_validation->run() == FALSE) {
                $data['error']  = $this->upload->display_errors('<code>','</code>');
                $this->admintemplate->template('admin/gallery/TambahFoto',$data);
            } else {
                $upload_image = array('upload_data' => $this->upload->data());
                $data = array(
                        'tanggal_foto'      => date('Y-m-d'),
                        'judul_foto'        => $this->input->post('judul_foto'),
                        'pelayanan_foto'    => $this->input->post('jenis_foto'),
                        'deskripsi_foto'    => $this->input->post('deskripsi_foto'),
                        'file_foto'         => $upload_image['upload_data']['file_name'],
                    );
                $sql = $this->DBgallery->simpanFoto($data);
                if ($sql == TRUE) {
                    $data['sukses']     = 1;
                    $data['error']      = " ";
                    $this->admintemplate->template('admin/gallery/TambahFoto',$data);
                }
            }
        }

        /**
         * form edit foto
         */
        public function editFoto()
        {
            $id                 = $this->uri->segment(4);
            $data['sukses']     = $this->uri->segment(5);
            $data['dataEdit']   = $this->DBgallery->getData($id);
            $data['error']      = " ";
            if (isset($data['dataEdit'])) {
                $this->session->set_userdata('id_foto', $id);
                $this->admintemplate->template('admin/gallery/EditFoto',$data);
            } else {
                redirect('index.php/admin/gallery/index');
            }
            
        }

        public function simpanEdit()
        {
            $id = $this->session->id_foto;
            $data['dataEdit'] = $this->DBgallery->getData($id);

            $this->form_validation->set_rules('judul_foto', 'Waktu edit data judul harus di isi.', 'required', 
                array('required' => '%s')
                );
            $this->form_validation->set_rules('deskripsi_foto', 'Waktu edit data judul harus di isi.', 'required', 
                array('required' => '%s')
                );

            $config['upload_path']          = 'assets/uploads/gallery/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;

            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('file_foto') == FALSE || $this->form_validation->run() == FALSE) {
                
                $allowed  = array('gif', 'png', 'jpg');
                $filename = isset($_FILES['file_foto']['name']);
                $ext      = pathinfo($filename, PATHINFO_EXTENSION);
                
                if($this->form_validation->run() == TRUE) {
                    
                    $edit = array(
                        'tanggal_foto'      => date('Y-m-d'),
                        'judul_foto'        => $this->input->post('judul_foto'),
                        'pelayanan_foto'    => $this->input->post('jenis_foto'),
                        'deskripsi_foto'    => $this->input->post('deskripsi_foto'),
                    );

                    $sql = $this->DBgallery->simpanEdit($id,$edit);

                    if ($sql == true) {
                        redirect('index.php/admin/gallery/editFoto/'.$id.'/sukses');
                    }                        

                } elseif($this->form_validation->run() == FALSE) {

                    $data['error']    = " ";
                    $this->admintemplate->template('admin/gallery/EditFoto',$data);
                
                } elseif (!in_array($ext, $allowed)) {
                
                    $data['error']  = $this->upload->display_errors('<code>','</code>');
                    $this->admintemplate->template('admin/gallery/EditFoto',$data);
                
                }

            } else {
                $upload_image = $this->upload->data();
                $edit         = array(
                    'tanggal_foto'      => date('Y-m-d'),
                    'judul_foto'        => $this->input->post('judul_foto'),
                    'pelayanan_foto'    => $this->input->post('jenis_foto'),
                    'deskripsi_foto'    => $this->input->post('deskripsi_foto'),
                    'file_foto'         => $upload_image['file_name'],
                );

                $sql = $this->DBgallery->simpanEdit($id,$edit);
                if ($sql == true) {
                    redirect('index.php/admin/gallery/editFoto/'.$id.'/sukses');
                }
            }
            
        }

        public function deleteFoto()
        {
            $id = $this->uri->segment(4);
            $sql= $this->DBgallery->deleteFoto($id);

            if ($sql == TRUE) {
                redirect('index.php/admin/gallery/index');
            } else {
                $this->load->view('error/html/error_404');
            }
        }

    }

 ?>
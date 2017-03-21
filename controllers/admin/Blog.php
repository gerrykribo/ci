<?php
    
    defined("BASEPATH") OR exit("N access defined script !");

    /**
    * 
    */
    class Blog extends My_Admin
    {
        
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * [page input artikel]
         */
        public function index()
        {
            $data['sukses']  = $this->uri->segment(4);
            $data['editTex'] = 1;
            $this->admintemplate->template('admin/blog/Blog',$data);
        }

        public function simpanBlog()
        {

            $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'required', array(
                'required' => '%s harus di isi.')
            );
            $this->form_validation->set_rules('jenis_artikel', 'Jenis Artikel', 'required', array(
                'required' => '%s harus di isi.')
            );
            $this->form_validation->set_rules('deskripsi_artikel', 'Diskripsi Artikel', 'required', array(
                'required' => '%s harus di isi.')
            );

            if ($this->form_validation->run() == FALSE) {
                $data['editTex'] = 1;
                $this->admintemplate->template('admin/blog/Blog',$data);
            } else {
                $data = array(
                        'tanggal_artikel'   => date('Y-m-d'),
                        'judul_artikel'     => $this->input->post('judul_artikel'),
                        'jenis_artikel'     => $this->input->post('jenis_artikel'),
                        'ringkasan_artikel' => $this->input->post('ulasan_artikel'),
                        'deskripsi_artikel' => $this->input->post('deskripsi_artikel'),
                    );
                $sql = $this->DBartikel->simpanArtikel($data);
                if ($sql == TRUE) {
                    $data['editTex']    = 1;
                    redirect('index.php/admin/blog/index/sukses');
                }
            }
            
            /*$config['upload_path']          = 'assets/uploads/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['encrypt_name']         = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('foto_artikel') == FALSE && $this->form_validation->run() == FALSE) {
                $data = array(
                    'editTex'   => 1,
                    'error'     => $this->upload->display_errors(),
                    );

                $this->admintemplate->template('admin/blog/Blog',$data);
            } elseif ($this->form_validation->run() == FALSE) {
                $data = array(
                    'editTex' => 1,);
                $this->admintemplate->template('admin/blog/Blog',$data);
            } else {
                $upload_image = array('upload_data' => $this->upload->data());
                $data = array(
                        'tgl_blog'      => date('Y-m-d'),
                        'jenis_blog'    => $this->input->post('judul_artikel'),
                        'judul_blog'    => $this->input->post('jenis_artikel'),
                        'isi_blog'      => $this->input->post('deskripsi_artikel'),
                        'foto_blog'     => $upload_image['upload_data']['file_name'],
                    );
                $sql = $this->DBartikel->simpanArtikel($data);
                if ($sql == TRUE) {
                    $data['sukses']     = 1;
                    $data['editTex']    = 1;
                    $this->admintemplate->template('admin/blog/Blog',$data);
                }
            }*/
        }

        public function tampilArtikel()
        {
            $data['tampilArtikel']= 1;
            $data['dataArtikel']  = $this->DBartikel->selectAll();
            $this->admintemplate->template('admin/blog/tampilBlog',$data);
        }

        public function editArtikel()
        {
            $id = $this->uri->segment(4);
            $data['editTex']     = 1;
            $data['dataArtikel'] = $this->DBartikel->getEditArtikel($id);
            if (isset($data['dataArtikel'])) {
                $this->session->set_userdata('id_artikel', $id);
                $this->admintemplate->template('admin/blog/EditArtikel',$data);
            } else {
                redirect('index.php/admin/blog/tampilArtikel');
            }
            
        }

        public function simpanEdit()
        {
            $id = $this->session->id_artikel;
            $data['dataArtikel'] = $this->DBartikel->getEditArtikel($id);
            $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'required', array(
                'required' => '%s harus di isi.')
            );
            $this->form_validation->set_rules('jenis_artikel', 'Jenis Artikel', 'required', array(
                'required' => '%s harus di isi.')
            );
            $this->form_validation->set_rules('ringkasan_artikel', 'Ringkasan Artikel', 'required', array(
                'required' => '%s harus di isi.')
            );
            $this->form_validation->set_rules('deskripsi_artikel', 'Diskripsi Artikel', 'required', array(
                'required' => '%s harus di isi.')
            );

            if ($this->form_validation->run() == FALSE) {
                $data['editTex'] = 1;
                $this->admintemplate->template('admin/blog/EditArtikel',$data);
            } else {
                $id   = $this->input->post('id_artikel');
                $data = array(
                        'tanggal_artikel'   => date('Y-m-d'),
                        'judul_artikel'     => $this->input->post('judul_artikel'),
                        'jenis_artikel'     => $this->input->post('jenis_artikel'),
                        'ringkasan_artikel' => $this->input->post('ringkasan_artikel'),
                        'deskripsi_artikel' => $this->input->post('deskripsi_artikel'),
                    );
                $sql = $this->DBartikel->simpanEdit($data,$id);
                if ($sql == TRUE) {
                    redirect('index.php/admin/blog/tampilArtikel');
                }
            }
        }

        public function deleteArtikel()
        {
            $id = $this->uri->segment(4);
            $sql= $this->DBartikel->deleteArtikel($id);

            if ($sql == TRUE) {
                redirect('index.php/admin/blog/tampilArtikel');
            } else {
                $this->load->view('error/html/error_404');
            }

        }
 
    }


 ?>
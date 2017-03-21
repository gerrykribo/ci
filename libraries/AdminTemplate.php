<?php 

    defined("BASEPATH") OR exit("No scripct detected");

    /**
    * template admin
    */
    class AdminTemplate 
    {
        
        public  $_ci;

        public function __construct()
        {
            $this->_ci =& get_instance();
        }

        public function template($conten, $data = NULL)
        {
            $data['header']     = $this->_ci->load->view('admin/template/Header',$data,true);
            $data['menu']       = $this->_ci->load->view('admin/template/Menu',$data,true);
            $data['body']       = $this->_ci->load->view($conten,$data,true);
            $data['footer']     = $this->_ci->load->view('admin/template/Footer',$data, true);
            $data['cek']        = $this->templateJSON($conten);
            $this->_ci->load->view('admin/template/Kerangka', $data);
        }

        public function templateJSON($conten)
        {

            switch ($conten) {
                case 'admin/dasbord/Body':  
                    $cek = array(
                        'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                        'assets/admin/bootstrap/js/bootstrap.min.js',
                        'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                        'assets/admin/plugins/fastclick/fastclick.js',
                        'assets/admin/dist/js/app.min.js',
                        'assets/admin/plugins/chartjs/Chart.min.js',
                    );
                    return $cek;
                case 'admin/kuisioner/Kuisioner':
                      $cek = array(
                            'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                            'assets/admin/bootstrap/js/bootstrap.min.js',
                            'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                            'assets/admin/plugins/fastclick/fastclick.js',
                            'assets/admin/dist/js/app.min.js',
                            'assets/admin/plugins/chartjs/Chart.min.js',
                        );

                    return $cek;
                case 'admin/blog/Blog':
                        $cek = array(
                            'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                            'assets/admin/bootstrap/js/bootstrap.min.js',
                            'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                            'assets/admin/plugins/fastclick/fastclick.js',
                            'assets/admin/dist/js/app.min.js',
                            'assets/admin/plugins/ckeditor/ckeditor.js',
                            );
                    return $cek;
                case 'admin/blog/tampilBlog':
                        $cek = array(
                            'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                            'assets/admin/bootstrap/js/bootstrap.min.js',
                            'assets/admin/plugins/datatables/jquery.dataTables.min.js',
                            'assets/admin/plugins/datatables/dataTables.bootstrap.min.js',
                            'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                            'assets/admin/plugins/fastclick/fastclick.js',
                            'assets/admin/dist/js/app.min.js',
                            );
                    return $cek;
                case 'admin/blog/EditArtikel':
                        $cek = array(
                            'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                            'assets/admin/bootstrap/js/bootstrap.min.js',
                            'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                            'assets/admin/plugins/fastclick/fastclick.js',
                            'assets/admin/dist/js/app.min.js',
                            'assets/admin/plugins/ckeditor/ckeditor.js',
                            );
                    return $cek;
                 case 'admin/gallery/DataGallery':
                        $cek = array(
                            'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                            'assets/admin/bootstrap/js/bootstrap.min.js',
                            'assets/admin/plugins/datatables/jquery.dataTables.min.js',
                            'assets/admin/plugins/datatables/dataTables.bootstrap.min.js',
                            'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                            'assets/admin/plugins/fastclick/fastclick.js',
                            'assets/admin/dist/js/app.min.js',
                            );
                    return $cek;
                case 'admin/gallery/TambahFoto':
                        $cek = array(
                            'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                            'assets/admin/bootstrap/js/bootstrap.min.js',
                            'assets/admin/plugins/datatables/jquery.dataTables.min.js',
                            'assets/admin/plugins/datatables/dataTables.bootstrap.min.js',
                            'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                            'assets/admin/plugins/fastclick/fastclick.js',
                            'assets/admin/dist/js/app.min.js',
                            );
                    return $cek;
                case 'admin/gallery/EditFoto':
                        $cek = array(
                            'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                            'assets/admin/bootstrap/js/bootstrap.min.js',
                            'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                            'assets/admin/plugins/fastclick/fastclick.js',
                            'assets/admin/dist/js/app.min.js',
                            'assets/admin/plugins/ckeditor/ckeditor.js',
                            );
                    return $cek;
                default:
                    $cek = array(
                        'assets/admin/plugins/jQuery/jquery-2.2.3.min.js',
                        'assets/admin/bootstrap/js/bootstrap.min.js',
                        'assets/admin/plugins/slimScroll/jquery.slimscroll.min.js',
                        'assets/admin/plugins/fastclick/fastclick.js',
                        'assets/admin/dist/js/app.min.js',
                    );
                    return $cek;
            }
        }
    }

?>
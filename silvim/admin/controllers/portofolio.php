<?php 

        class portofolio extends Controller{
            {
                public function index(){
                    //tampung method getProfile() dari portofolioModel.php di $data
                    $data['profile'] = $this ->model('PortofolioModel')->getProfile();
                  
                    //tampung method getAbout() dari PortofolioModel.php di $data
                    $data ['about'] = $this->model('PortofolioModel')->getAbout();
                  
                    //tampung method getProject() dari PortofolioModel.php di $data
                    $data['project'] = $this->model('PortofolioModel')->getProject();
                  
                  
                    //kirim parameter $data ke file index.php yang ada di folder views/portofolio
                    $this->view('portofolio/index',$data);
            }
        }
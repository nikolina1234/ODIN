<?php

    class IgraController extends CI_Controller
    {
        public function playGame()
        {
            $this->view('IgreHomePage');
        }

        public function view($page = 'HomePage')
        {
            if (!file_exists(APPPATH.'views/'.$page.'.php'))
            {
                show_404();
            }

            $this->load->view('inc/header');
            $this->load->view($page,[]);
            $this->load->view('inc/footer');
        }

        public function spojnice()
        {
            $this->load->model('IgraModel');

            $pojmovi = $this->IgraModel->getSpojnice();
            
            session_start();

            $_SESSION['pojmovi'] = $pojmovi;
            
            $this->view('SpojniceView');
        }

    }

?>
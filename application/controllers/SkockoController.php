<?php

    class SkockoController extends CI_Controller
    {

        public function Skocko()
        {
            $this->view('SkockoView');
        }
       
        public function view($page)
        {
            if (!file_exists(APPPATH.'views/'.$page.'.php'))
            {
                show_404();
            }

            $this->load->view('inc/header');
            $this->load->view($page,[]);
            $this->load->view('inc/footer');
        }

    }


?>
<?php

    class KoZnaZnaController extends CI_Controller
    {

        public function KoZnaZna()
        {
            $this->load->model('KoZnaZnaModel');
            $niz =  $this->KoZnaZnaModel->getKoZnaZna();

           session_start();

           $_SESSION['koznazna'] = $niz[0];

           
            $odgovori = array($niz[0]->tacan,$niz[0]->netacan1,$niz[0]->netacan2,$niz[0]->netacan3);

            shuffle($odgovori);

            $_SESSION['odgovori'] = $odgovori;

           $this->view('KoZnaZnaView');
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
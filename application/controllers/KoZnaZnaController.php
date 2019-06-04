<?php

    class KoZnaZnaController extends CI_Controller
    {

        public function KoZnaZna()
        {
            $this->load->model('KoZnaZnaModel');
            $niz =  $this->KoZnaZnaModel->getKoZnaZna();

           session_start();

           $_SESSION['koznazna0'] = $niz[0];
           $_SESSION['koznazna1'] = $niz[1];
           $_SESSION['koznazna2'] = $niz[2];
           $_SESSION['koznazna3'] = $niz[3];
           $_SESSION['koznazna4'] = $niz[4];

            $odgovori0 = array($niz[0]->tacan,$niz[0]->netacan1,$niz[0]->netacan2,$niz[0]->netacan3);

            shuffle($odgovori0);

            $_SESSION['odgovori0'] = $odgovori0;

            $odgovori1 = array($niz[1]->tacan,$niz[1]->netacan1,$niz[1]->netacan2,$niz[1]->netacan3);

            shuffle($odgovori1);

            $_SESSION['odgovori1'] = $odgovori1;

            $odgovori2 = array($niz[2]->tacan,$niz[2]->netacan1,$niz[2]->netacan2,$niz[2]->netacan3);

            shuffle($odgovori2);

            $_SESSION['odgovori2'] = $odgovori2;

            $odgovori3 = array($niz[3]->tacan,$niz[3]->netacan1,$niz[3]->netacan2,$niz[3]->netacan3);

            shuffle($odgovori3);

            $_SESSION['odgovori3'] = $odgovori3;

            $odgovori4 = array($niz[4]->tacan,$niz[4]->netacan1,$niz[4]->netacan2,$niz[4]->netacan3);

            shuffle($odgovori4);

            $_SESSION['odgovori4'] = $odgovori4;

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

        public function check()
        {
            $odgovor = $_POST['odgovor'];

            $pitanje = $_POST['pitanje'];

            $this->load->model('KoZnaZnaModel');

            echo $this->KoZnaZnaModel->proveri($odgovor,$pitanje);

            
        }

    }


?>
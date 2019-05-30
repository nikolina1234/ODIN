<?php

    class AdminController extends CI_Controller
    {
        private $model = null;

        public function prikazBaze()
        {
            $this->view('AdminPrikazBaze');
        }
        public function prikazSlagalice()
        {
            $this->load->model('AdminModel');

            $results = $this->AdminModel->getWords();

            

            session_start();

            $_SESSION['reci'] = $results;

            $this->load->view('inc/header');
            $this->load->view('AdminPrikazSlagalice');
            $this->load->view('inc/footer');

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

        public function backToHome()
        {
            $this->view('AdminHomePage');
        }

        public function backToPrikazBaze()
        {
            $this->view('AdminPrikazBaze');
        }

        public function prikazModeratora()
        {
            $this->load->model('AdminModel');

            $results = $this->AdminModel->getModerators();

            

            session_start();

            $_SESSION['moderatori'] = $results;

            $this->load->view('inc/header');
            $this->load->view('AdminPrikazModeratora');
            $this->load->view('inc/footer');
        }

        public function izbaciModeratora($modname)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->deleteModerator($modname);

            $this->prikazModeratora();
        }

        public function prikazRegistrovanih()
        {
            $this->load->model('AdminModel');

            $results = $this->AdminModel->getRegistrovani();

            

            session_start();

            $_SESSION['korisnici'] = $results;

            $this->load->view('inc/header');
            $this->load->view('AdminPrikazRegistrovanih');
            $this->load->view('inc/footer');
        }

        public function izbaciRegistrovanog($korisnik)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->deleteRegistrovani($korisnik);

            $this->prikazRegistrovanih();
        }

        public function prikazSpojnica()
        {
            $this->load->model('AdminModel');

            $niz = $this->AdminModel->getSpojnice();

            session_start();

            $_SESSION['spojnice'] = $niz;

            $this->view("AdminPrikazSpojnica");
        }

        public function prikazKoZnaZna()
        {
            $this->load->model('AdminModel');

            $niz = $this->AdminModel->getKoZnaZna();

            session_start();

            $_SESSION['pitanja'] = $niz;

            $this->view("AdminPrikazKoZnaZna");
        }

        public function prikazAsocijacije()
        {
            $this->load->model('AdminModel');

            $niz = $this->AdminModel->getAsocijacije();

            session_start();

            $_SESSION['asocijacija'] = $niz;

            $this->view("AdminPrikazAsocijacija");
        }

        public function korZahtevi()
        {
            $this->load->model('AdminModel');

            $results = $this->AdminModel->getZahtevi();

            session_start();

            $_SESSION['korisnici'] = $results;

            $this->view('AdminKorisnickiZahtevi');
            
        }

        public function prihvatiMod($korisnik)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->prihvatiMod($korisnik);

            $this->korZahtevi();
        }

        public function odbijMod($korisnik)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->odbijMod($korisnik);

            $this->korZahtevi();
        }
    }


?>
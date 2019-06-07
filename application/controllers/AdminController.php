<!--
    @author Igor Durić 0646/16
-->
<?php

    class AdminController extends CI_Controller
    {
        private $model = null;

        /*
            Trivijalna funckija, salje na stranu koja daje mogucnost biranja za koju se igru prikazuje baza
        */
        public function prikazBaze()
        {
            $this->view('AdminPrikazBaze');
        }
        
        /*
            Prikazuje bazu za slagalicu
        */
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
        
        /*
	   	    Prikaz stranice, prekopirano sa CodeIgniter tutorial-a
            
            @args : page - stranica za prikaz
	   */

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
   
        /*
            Trivijalna funkcija. vraca na pocetnu stranicu Admina
        */
        public function backToHome()
        {
            $this->view('AdminHomePage');
        }
        
        /*
            Trivijalna funckija, vraca na stranicu sa koje se moze birati za koju se igru gleda stanje baze
        */
        public function backToPrikazBaze()
        {
            $this->view('AdminPrikazBaze');
        }

        /*
            Prikazuje sve moderatore
        */
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

        /*
            Uzima trazenog moderatora i ukida mu privilegije
            
            @args : modname - identifikacija moderatora koji se brise
        */
        public function izbaciModeratora($modname)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->deleteModerator($modname);

            $this->prikazModeratora();
        }

        /*
            Prikaz svih registrovanih igraca
        */
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

        /*
            Uzima trazenog korisnika i izbacuje ga iz baze
            
            @args : korisnik - identifikacija korisnika koji se brise
        */
        public function izbaciRegistrovanog($korisnik)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->deleteRegistrovani($korisnik);

            $this->prikazRegistrovanih();
        }

        /*
            Prikazuje bazu za spojnice
        */
        public function prikazSpojnica()
        {
            $this->load->model('AdminModel');

            $niz = $this->AdminModel->getSpojnice();

            session_start();

            $_SESSION['spojnice'] = $niz;

            $this->view("AdminPrikazSpojnica");
        }
        
        /*
            Prikazuje stanje baze za ko zna zna 
        */
        public function prikazKoZnaZna()
        {
            $this->load->model('AdminModel');
            $niz = $this->AdminModel->getKoZnaZna();

            session_start();

            $_SESSION['pitanja'] = $niz;

            $this->view("AdminPrikazKoZnaZna");
        }

        /*
            Prikazuje stanje baze za asocijacije 
        */
        public function prikazAsocijacije()
        {
            $this->load->model('AdminModel');
            $niz = $this->AdminModel->getAsocijacije();

            session_start();

            $_SESSION['asocijacija'] = $niz;

            $this->view("AdminPrikazAsocijacija");
        }

        /*
            Prikazuje korisnicke zahteve 
        */
        public function korZahtevi()
        {
            $this->load->model('AdminModel');

            $results = $this->AdminModel->getZahtevi();

            session_start();

            $_SESSION['korisnici'] = $results;

            $this->view('AdminKorisnickiZahtevi');
            
        }

        /*
            Korisnik se unapredjuje u moderatora
            
            @args : korisnik - identifikacija korisnika koji se unapredjuje
        */
        public function prihvatiMod($korisnik)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->prihvatiMod($korisnik);

            $this->korZahtevi();
        }
        
        /*
            Korisniku se odbija zahtev za moderatora
            
            @args : korisnik - identifikacija korisnika
        */
        public function odbijMod($korisnik)
        {
            $this->load->model('AdminModel');

            $this->AdminModel->odbijMod($korisnik);

            $this->korZahtevi();
        }
    }


?>

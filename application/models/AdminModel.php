<?php
    /*
		Author: Igor Duric 0646/2016
	*/
    class AdminModel extends CI_Model
    {
        /*
            kreiram novu instancu i vezujem bazu
        */
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }

        /*
            Uzimam reci za slagalicu iz baze i vracam ih za prikaz
            
            @return niz reci
        */
        public function getWords()
        {
            $query = $this->db->query("SELECT * FROM Slagalica");
            $niz = array();
            
                foreach($query->result() as $row)
                {
                    array_push($niz,$row->rec);
                }
            return $niz;
        }

        /*
            Uzimam sve moderatore i vracam ih za prikaz
            
            @return niz moderatora
        */        
        public function getModerators()
        {
            $query = $this->db->query("SELECT * FROM Korisnik WHERE je_moderator = 1");
            $niz = array();
            
            foreach($query->result() as $row)
            {
                array_push($niz,$row->korisnicko_ime);
            }
             return $niz;
        }
        
        /*
            Korisniku se ukidaju privilegije moderatora
            
            @args : modname - identifikacija moderatora 
        */
        public function deleteModerator($modname)
        {
            $query = $this->db->query("UPDATE Korisnik SET je_moderator = 0 WHERE korisnicko_ime = '$modname'");
        }

        /*
            Uzimam sve registrovane korisnike iz baze i vracam ih za prikaz 
            
            @return niz korisnika
        */
        public function getRegistrovani()
        {
            $query = $this->db->query("SELECT * FROM Korisnik WHERE je_admin = 0");
            $niz = array();
            
            foreach($query->result() as $row)
            {
                array_push($niz,$row->korisnicko_ime);
            }
             return $niz;
        }

        /*
            Brisem registrovanog korisnika iz baze
            
            @args : korisnik - identifikacija korisnika
        */
        public function deleteRegistrovani($korisnik)
        {
            $query = $this->db->query("DELETE FROM Korisnik WHERE korisnicko_ime = '$korisnik'");
        }

        /*
            Uzimam sve pojmove za spojnicu i vracam ih na prikaz 
            
            @return niz pojmova
        */
        public function getSpojnice()
        {
            $query = $this->db->query("SELECT * FROM Spojnice");

            $pojmovi = array();
            $opis = array();

            foreach($query->result() as $row)
            {
                array_push($pojmovi,$row);
            }

            $query = $this->db->query("SELECT * FROM spojnica_opis");

            foreach($query->result() as $row)
            {
                array_push($opis,$row);
            }

            $niz = array($pojmovi,$opis);
            return $niz;
        } 

        /*
            Uzimam sva pitanja za ko zna zna i vracam ih na prikaz 
            
            @return niz pitanja
        */
        public function getKoZnaZna()
        {
            $query = $this->db->query("SELECT * FROM Pitanje");

            $pitanja = array();
            foreach($query->result() as $row)
            {
                array_push($pitanja,$row);
            }

            return $pitanja;
        }

        /*
            Uzimam sve asocijacije i vracam ih na prikaz
            
            @return niz asocijacija
        */
        public function getAsocijacije()
        {
            $query = $this->db->query("SELECT * FROM Asocijacija");

            $asoc = array();
            foreach($query->result() as $row)
            {
                array_push($asoc,$row);
            }

            return $asoc;
        }

        /*
            Uzimam sve zahteve korisnika za moderatora i vracam ih na prikaz 
            
            @return niz zahteva korisnika
        */
        public function getZahtevi()
        {
            $query = $this->db->query("SELECT * FROM Korisnik WHERE zeli_mod = 1");

            $korisnici = array();
            foreach($query->result() as $row)
            {
                array_push($korisnici,$row);
            }

            return $korisnici;
        }

        /*
            Prihvata se zahtev korisnika da postane moderator
            
            @args : korisnik - identifikacija korisnika
        */ 
        public function prihvatiMod($korisnik)
        {
            $query = $this->db->query("UPDATE Korisnik SET zeli_mod=0,je_moderator=1 WHERE korisnicko_ime = '$korisnik'");
        }

        /*
            Odbija se zahtev korisnika da postane moderator
            
            @args : korisnik - identifikacija korisnika
        */
        public function odbijMod($korisnik)
        {
            $query = $this->db->query("UPDATE Korisnik SET zeli_mod=0 WHERE korisnicko_ime = '$korisnik'");
        }
    }

?>

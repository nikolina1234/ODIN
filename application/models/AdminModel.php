<?php

    class AdminModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }

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

        public function deleteModerator($modname)
        {
            $query = $this->db->query("UPDATE Korisnik SET je_moderator = 0 WHERE korisnicko_ime = '$modname'");
        }

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

        public function deleteRegistrovani($korisnik)
        {
            $query = $this->db->query("DELETE FROM Korisnik WHERE korisnicko_ime = '$korisnik'");
        }

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

        public function prihvatiMod($korisnik)
        {
            $query = $this->db->query("UPDATE Korisnik SET zeli_mod=0,je_moderator=1 WHERE korisnicko_ime = '$korisnik'");
        }

        public function odbijMod($korisnik)
        {
            $query = $this->db->query("UPDATE Korisnik SET zeli_mod=0 WHERE korisnicko_ime = '$korisnik'");
        }
    }

?>
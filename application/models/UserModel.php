<?php
session_start();

	/*
		Author : Nikolina Stojić 0639/2016
		
		Author : Ognjen Petkovic 0526/2016
	*/
    class UserModel extends CI_Model
    {
		/*
			Konstruktor
		*/
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }
        /**
		   
		  @args - $user,$pass 
          @retVal:
           -1 -> wrong username
          
            0 -> success (ordinary user)
            2 -> succes (admin)
            3 -> success (moderator)
          
            1 -> wrong pass
         */
        public function loginAuthenticate($user,$pass)
        {        
            $query = $this->db->query("SELECT * FROM KORISNIK WHERE korisnicko_ime = '$user'");


            $row = $query->result();

            if ($row == null) return -1;

            $query = $this->db->query("SELECT * FROM KORISNIK WHERE korisnicko_ime = '$user' AND lozinka = '$pass'");

            $row = $query->result();

            if ($row == null)
            {
                return 1;
            }
            else
            {
                foreach($query->result() as $row)
                {
                    if ($row->je_admin == 1) return 2;
                    else
                        if ($row->je_moderator == 1) return 3;
                        else
                            return 0;
                }
            }
        }

        /*
		
		   @args - $usertype,$username,$password,$passwordConf,$sex,$email	
          retVal:
           0 -> success
           -1 -> username already exists or username is empty
           -2 -> did not check usertype
           -3 -> did not enter password
           -4 -> pass conf and pass do not match
           -5 -> did not check sex type
           -6 -> bad e-mail format or e-mail already exists
         */
        function authenticateRegistration($usertype,$username,$password,$passwordConf,$sex,$email)
        {
            $query = $this->db->query("SELECT * FROM KORISNIK WHERE korisnicko_ime = '$username'");

            if ($query->result()!=null || empty($username))
            {
                return -1;
            }
            
            if ($usertype == -1)
            {
                return -2;
            }

            if (empty($password))
            {
                return -3;
            }

            if ($passwordConf != $password)
            {
                return -4;
            }

            if ($sex == -1)
            {
                return -5;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                return -6;
            }

            $query = $this->db->query("SELECT * FROM KORISNIK WHERE e_mail = '$email'");

            if ($query->result()!=null)
            {
                return -6;
            }

             //SUCCESS
            
             //TODO: if moderator, insert into table korisnicki zahtevi

            $pol = 0;

            if ($sex == 1)
            {
                $pol = 1;
            }

            $zeli_mod = 0;
            if ($usertype=='mod')
            {
                $zeli_mod = 1;
            }
            $query = $this->db->query
            ("INSERT INTO Korisnik(korisnicko_ime,lozinka,e_mail,zeli_mod,je_moderator,je_admin,pol,br_poena) VALUES ('$username','$password','$email',$zeli_mod,0,0,$pol,0);");
        
            return 0;
        }

        /**
          Ova funkcija se ne koristi! TODO: Delete
         */
        public function authenticateGameplayName($gameplayname,$user)
        {
            $query = $this->db->query("SELECT * FROM KORISNIK WHERE gameplay_ime = '$gameplayname'");

            if ($query->result()!=null || empty($gameplayname))
            {
                return -1;
            }

                //add gameplay name to DB

                $query = $this->db->query("UPDATE Korisnik SET gameplay_ime = '$gameplayname' WHERE korisnicko_ime = '$user'");

                return 0;
        }

          /*
			Ova funkcija se ne koristi! TODO: Delete
         */
        public function getGameplayName($user)
        {

            $query = $this->db->query("SELECT * FROM KORISNIK WHERE korisnicko_ime = '$user'");

            foreach($query->result() as $row)
            {
                if (empty($row->gameplay_ime)) 
                {
                    return -1;
                }
                else
                {
                  return 0;
                }
            }
        }

		/*	
			Vraca korisnike sortirane po broju poena
		*/
        public function getKorisnici()
        {
            $query = $this->db->query("SELECT * FROM KORISNIK ORDER BY br_poena DESC");

            $korisnici = array();
            
            foreach($query->result() as $row)
            {
                array_push($korisnici,$row);
            }

            return $korisnici;
        }
        /**
         *Brise sesiju registrovanog igraca i apdejtuje njegove poene tako sto na stare doda novoosvojene
         *@return void
         *@author Nikolina Stojić 0639/2016
         */
        public function updatePoints(){
            if(!empty($_SESSION['username'])){
                $kor = $_SESSION['username'];
                //unset($_SESSION['username']);
            }
            if(!empty($_SESSION['uk_poeni']))$points = $_SESSION['uk_poeni'];
            else $points = 0;

            if (!empty($_SESSION['uk_poeni']))unset($_SESSION['uk_poeni']);
            unset($_SESSION['slagalica']);
            unset($_SESSION['moj_broj']);
            unset($_SESSION['skocko']);
            unset($_SESSION['ko_zna_zna']);
            unset($_SESSION['spojnice']);
            unset($_SESSION['asocijacije']);

            $sql = "UPDATE Korisnik SET br_poena=br_poena+'$points' WHERE korisnicko_ime='$kor'";
            $this->db->query($sql);

        }
    }

?>


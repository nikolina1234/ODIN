<?php

    class UserModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }
        /**
         * retVal:
         *  -1 -> wrong username
         * 
         *   0 -> success (ordinary user)
         *   2 -> succes (admin)
         *   3 -> success (moderator)
         * 
         *   1 -> wrong pass
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

        /**
         * retVal:
         *   0 -> success
         *  -1 -> username already exists or username is empty
         *  -2 -> did not check usertype
         *  -3 -> did not enter password
         *  -4 -> pass conf and pass do not match
         *  -5 -> did not check sex type
         *  -6 -> bad e-mail format or e-mail already exists
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
            ("INSERT INTO Korisnik(korisnicko_ime,lozinka,e_mail,zeli_mod,je_moderator,je_admin,pol,br_poena,rang) VALUES ('$username','$password','$email',$zeli_mod,0,0,$pol,0,0);");
        
            return 0;
        }

        /**
         * retVal:
         * 
         * -1: -> gameplay name already exists
         *  0: -> success
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

          /**
         * retVal:
         * 
         * -1: -> gameplay name does not exist
         *  0: -> success
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
    }

?>


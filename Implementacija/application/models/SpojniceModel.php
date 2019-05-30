<?php

    class SpojniceModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }

        public function getSpojnice()
        {
            $maxid = 0;
            $query = $this->db->query("SELECT MAX(id_spojnice) as maxid FROM spojnica_opis;");

                foreach($query->result() as $row)
                {
                    $maxid = $row->maxid;    
                }
            
            $id = rand(1,$maxid);
            
            $query = $this->db->query("SELECT * FROM spojnica_opis WHERE id_spojnice = $id");
            
            while ($query->result()==null)
            {
                $id = rand(1,$maxid);
            
                $query = $this->db->query("SELECT * FROM spojnica_opis WHERE id_spojnice = $id");
            }

            $retVal = 0;
            
                foreach($query->result() as $row)
                {
                    $retVal = $row;
                }
            return $retVal;
        }

        public function getSpojniceS($id)
        {

           /* $maxid = 0;
            $query = $this->db->query("SELECT MAX(id_spojnice) as maxid FROM spojnice;");

                foreach($query->result() as $row)
                {
                    $maxid = $row->maxid;    
                }
            
            $id = rand(1,$maxid);
            
            $query = $this->db->query("SELECT * FROM spojnice WHERE id_spojnice = $id");
            
            while ($query->result()==null)
            {
                $id = rand(1,$maxid);
            
                $query = $this->db->query("SELECT * FROM spojnice WHERE id_spojnice = $id");
            }*/

            $query = $this->db->query("SELECT * FROM spojnice WHERE id_spojnice = $id");
            $retVal = array();
            
                foreach($query->result() as $row)
                {
                    array_push($retVal,$row->opis1,$row->opis2);
                }
            return $retVal;
        }

        public function getOpis($opis1,$opis2)
        {
            $query = $this->db->query("SELECT * FROM spojnice WHERE (opis1 = '$opis1' AND opis2 = '$opis2') OR (opis2 = '$opis1' AND opis1 = '$opis2') ");

            $flag = false;

                foreach($query->result() as $row)
                {
                    $flag = true;
                }
            return $flag;
            
        }
    }
?>
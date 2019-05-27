<?php

    class IgraModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }

        public function getSpojnice()
        {
            $query = $this->db->query("SELECT MAX(id_spojnice) as id_spojnica FROM spojnica_opis;");

            $max_number = 0;

            foreach($query->result() as $row)
            {
               $max_number = $row->id_spojnica;
            }

            $randomNumber = rand(1,$max_number);

            $query = $this->db->query("SELECT * FROM spojnica_opis WHERE id_spojnice = $randomNumber");


            while ($query->result()==null)
            {
                $randomNumber = rand(1,$max_number);
                $query = $this->db->query("SELECT * FROM spojnica_opis WHERE id_spojnice = $randomNumber");
                
            }
            $pojmovi = array();         


            $id_spojnice = 0;
            foreach($query->result() as $row)
            {
               array_push($pojmovi,$row->opis_spojnice);
               $id_spojnice = $row->id_spojnice;
            }

            $query = $this->db->query("SELECT * FROM spojnice WHERE id_spojnice = $id_spojnice");

            foreach($query->result() as $row)
            {
                array_push($pojmovi,$row->opis1,$row->opis2);
            }

            return $pojmovi;
        }
    }

?>
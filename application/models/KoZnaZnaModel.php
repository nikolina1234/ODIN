<?php

    class KoZnaZnaModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }

       public function getKoZnaZna()
       {    
            $retVal = array();

            for ($i=0;$i<1;$i++)
            {

            
                $maxid = 0;
                $query = $this->db->query("SELECT MAX(id_pitanje) as maxid FROM pitanje;");

                    foreach($query->result() as $row)
                    {
                        $maxid = $row->maxid;    
                    }
                
                $id = rand(1,$maxid);
                
                $query = $this->db->query("SELECT * FROM pitanje WHERE id_pitanje = $id");
                
                while ($query->result()==null)
                {
                    $id = rand(1,$maxid);
                
                    $query = $this->db->query("SELECT * FROM pitanje WHERE id_pitanje = $id");
                }             
                   foreach($query->result() as $row)
                    {
                       $retVal[0] = $row;
                    }
         }

         return $retVal;
       }
    }

?>
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

            $alreadyPut = array();
            $i = 0;
            $retVal = array();

          
            for ($i=0;$i<5;$i++)
            {

            
                $maxid = 0;
                $minid = 0;

                $query = $this->db->query("SELECT MAX(id_pitanje) as maxid FROM pitanje;");

                    foreach($query->result() as $row)
                    {
                        $maxid = $row->maxid;    
                    }

                    $query = $this->db->query("SELECT MIN(id_pitanje) as minid FROM pitanje;");

                    foreach($query->result() as $row)
                    {
                        $minid = $row->minid;    
                    }
                
                
                $id = rand($minid,$maxid);
                
                $query = $this->db->query("SELECT * FROM pitanje WHERE id_pitanje = $id");
                
                while ($query->result()==null || in_array($id,$alreadyPut))
                {
                    $id = rand($minid,$maxid);
                
                    $query = $this->db->query("SELECT * FROM pitanje WHERE id_pitanje = $id");
                }          
                
                    $alreadyPut[$i] = $id;
                   foreach($query->result() as $row)
                    {
                       $retVal[$i] = $row;
                    }
         }

         return $retVal;
       }

       public function proveri($odgovor,$pitanje)
       {
            $query = $this->db->query("SELECT * FROM pitanje WHERE pitanje='$pitanje' and tacan = '$odgovor' ");

            if ($query->result()==null) return false;
            else   
                return true;
       }
    }

?>
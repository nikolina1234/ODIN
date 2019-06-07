<?php

	/*
	@author Igor Duric 0646/2016
	*/

    class AsocijacijeModel extends CI_Model {
    	/*
		kreiram novu instancu i vezujem bazu
    	*/
 	public function __construct() {
            parent::__construct(); 
            $this->load->database();
        }
	    
	    
	public function getAsocijacije() {
            $maxid = 0;

            $query = $this->db->query("SELECT MAX(id_asocijacija) as maxid FROM asocijacija;");

                foreach($query->result() as $row)
                {
                    $maxid = $row->maxid;    
                }

            $id = rand(1,$maxid);

            $query = $this->db->query("SELECT * FROM Asocijacija WHERE id_asocijacija = $id");    

            while ($query->result()==null)
            {
                $id = rand(1,$maxid);

                $query = $this->db->query("SELECT * FROM Asocijacija WHERE id_asocijacija = $id");  
            }

            $retVal = 0;
            
            foreach($query->result() as $row)
            {
                $retVal = $row;            
            }
                
            return $retVal;
		}
	}
?>

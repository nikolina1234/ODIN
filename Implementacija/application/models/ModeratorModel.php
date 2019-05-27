<?php

    class ModeratorModel extends CI_Model
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->database();
        }

       public function commitWord($rec)
       {
           if (ctype_alpha($rec))
           {
            $query = $this->db->query("SELECT * FROM slagalica WHERE rec = '$rec'");
            if ($query->result()!=null) return false;

            $query = $this->db->query("INSERT INTO Slagalica (rec) VALUES ('$rec');");
            
            return true;
           }
           else
            return false;
       }

       public function checkSpojnica($opis)
       {
         $query = $this->db->query("SELECT * FROM spojnica_opis WHERE opis_spojnice ='$opis' ;");

         if ($query->result()!=null)
         {
             return false;
         }
         
         $query = $this->db->query("INSERT INTO Spojnica_opis (opis_spojnice) VALUES ('$opis')");

         $id = -1;

         $query = $this->db->query("SELECT * FROM spojnica_opis WHERE opis_spojnice ='$opis' ;");

            foreach($query->result() as $row)
            {
                $id = $row->id_spojnice;
            }

            $levo1 = $_POST['levo1'];
            $levo2 = $_POST['levo2'];
            $levo3 = $_POST['levo3'];
            $levo4 = $_POST['levo4'];
            $levo5 = $_POST['levo5'];

            $desno1 = $_POST['desno1'];
            $desno2 = $_POST['desno2'];
            $desno3 = $_POST['desno3'];
            $desno4 = $_POST['desno4'];
            $desno5 = $_POST['desno5'];

            $query = $this->db->query
            (
            "INSERT INTO Spojnice (opis1,opis2,id_spojnice) 
            VALUES ('$levo1','$desno1',$id)"
            ); 

            $query = $this->db->query
            (
            "INSERT INTO Spojnice (opis1,opis2,id_spojnice) 
            VALUES ('$levo2','$desno2',$id)"
            );

            $query = $this->db->query
            (
            "INSERT INTO Spojnice (opis1,opis2,id_spojnice) 
            VALUES ('$levo3','$desno3',$id)"
            );

            $query = $this->db->query
            (
            "INSERT INTO Spojnice (opis1,opis2,id_spojnice) 
            VALUES ('$levo4','$desno4',$id)"
            );

            $query = $this->db->query
            (
            "INSERT INTO Spojnice (opis1,opis2,id_spojnice) 
            VALUES ('$levo5','$desno5',$id)"
            );

        return true;
       }

       public function ubaciKoZnaZna($pitanje,$t,$n1,$n2,$n3)
       {
            $query = $this->db->query("SELECT * FROM pitanje WHERE pitanje ='$pitanje' ;");

            if ($query->result()!=null)
            {
                return false;
            }

            $query = $this->db->query
            (
            "INSERT INTO Pitanje (pitanje,tacan,netacan1,netacan2,netacan3) 
             VALUES ('$pitanje','$t','$n1','$n2','$n3')"
            ); 

            return true;
       }
	   public function checkAsocijacija($aa1,$aa2,$aa3,$aa4,$aa_konacno,$bb1,$bb2,$bb3,$bb4,$bb_konacno,$cc1,$cc2,$cc3,$cc4,$cc_konacno,$dd1,$dd2,$dd3,$dd4,$dd_konacno,$kon)
	   {
		   /*$query = $this->db->query("SELECT asoc_konacno FROM asocijacija WHERE asoc_konacno = '$kon' ;");
		   
		   if ($query->result()!=null)
		   {
			   return false;
		   }*/
		   
		   $query = $this->db->query
		   (
		   "INSERT INTO asocijacija (a1,a2,a3,a4,a_konacno,b1,b2,b3,b4,b_konacno,c1,c2,c3,c4,c_konacno,d1,d2,d3,d4,d_konacno,asoc_konacno)
		   VALUES ('$aa1','$aa2','$aa3','$aa4','$aa_konacno','$bb1','$bb2','$bb3','$bb4','$bb_konacno','$cc1','$cc2','$cc3','$cc4','$cc_konacno','$dd1','$dd2','$dd3','$dd4','$dd_konacno','$kon');"
           );
           
           return true;
	   }
	  
    }

?>
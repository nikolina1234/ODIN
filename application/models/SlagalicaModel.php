<?php

/**
 *SlagalicaModel - model za igranje igre Slagalica
 *@version 1.0
 *@author Nikolina Stojić 0639/2016
 */
class SlagalicaModel extends CI_Model
{
    private $slova = [
        'а', 'б', 'в', 'г', 'д', 'ђ', 'е', 'ж', 'з', 'и', 'ј', 'к', 'л', 'љ', 'м', 'н', 'њ',
        'о', 'п', 'р', 'с', 'т', 'ћ', 'у', 'ф', 'х', 'ц', 'ч', 'џ', 'ш'];
    private $samoglasnici = ['а', 'е', 'и', 'о', 'у'];

    /**
     * Kreiranje nove instance i povezivanje s bazom
     * @return  void
     */
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    /**
     * Generise kombinaciju slova za koju se rec trazi
     * @return array
     */
    public function generate(){
        $rec = [];
        for ($i = 0; $i < 12; $i++)
        {
            if (random_int(0, 4) == 0)
                $rec[] = $this->samoglasnici[random_int(0, sizeof($this->samoglasnici) - 1)]; else
                $rec[] = $this->slova[random_int(0, sizeof($this->slova) - 1)];
        }
        return $rec;
    }

    /**
     * Proverava da li rec koju je korisnik napravio postoji u bazi
     * @param $user - string koji je korisnik napravio kao rec
     * @return void
     */
    public function validate($user)
    {
        $this->db->where('rec', $user);
        $query = $this->db->get('slagalica.slagalica');

        echo $query->num_rows();
    }

    /**
     * Pronalazi najduzu rec u bazi na osnovu zadatih slova
     * @param $user - kombinacija slova
     * @return array
     */
    public function solve($user){

        $sql =  "SELECT * from slagalica.slagalica";
        $query = $this->db->query($sql);
        $result = $query->result();

        if (sizeof($user) != 12) return null;
        $ret = null;
        $res = 0;

        foreach ($result as $row){
            $rec = $row->rec;
            $n = mb_strlen($rec);
            $f = $user;
            $len = 0;

            for ($i = 0; $i < $n; $i++){
                $slovo = mb_substr($rec, $i, 1);
                $flag = false;

                for ($j = 0; $j < 12; $j++) if ($f[$j] === $slovo){
                    $f[$j] = 0;
                    $flag = true;
                    $len++;
                    break;
                }

                if (!$flag) break;
            }

            if ($len == $n && $n > $res){
                $ret = $rec;
                $res = $n;
            }
        }

        return $ret;
    }
}

?>
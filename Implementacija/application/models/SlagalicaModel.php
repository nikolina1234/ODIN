<?php


class SlagalicaModel extends CI_Model
{
    private $reci;
    private $slova = [
        'а', 'б', 'в', 'г', 'д', 'ђ', 'е', 'ж', 'з', 'и', 'ј', 'к', 'л', 'љ', 'м', 'н', 'њ',
        'о', 'п', 'р', 'с', 'т', 'ћ', 'у', 'ф', 'х', 'ц', 'ч', 'џ', 'ш'];
    private $samoglasnici = ['а', 'е', 'и', 'о', 'у'];

    public function __construct()
    {
        parent::__construct();
        $fajl = fopen("resources/recnik.txt", "r");
        $this->reci = [];
        while (($rec = fgets($fajl)) != null) $this->reci[] = trim($rec);
        fclose($fajl);
    }

    public function generate()
    {
        $rec = [];
        for ($i = 0; $i < 12; $i++)
        {
            if (random_int(0, 4) == 0)
                $rec[] = $this->samoglasnici[random_int(0, sizeof($this->samoglasnici) - 1)]; else
                $rec[] = $this->slova[random_int(0, sizeof($this->slova) - 1)];
        }
        return $rec;
    }

    public function validate($user)
    {
        foreach ($this->reci as $rec) if ($user === $rec) return true;
        return false;
    }

    public function solve($user)
    {
        if (sizeof($user) != 12) return null;
        $ret = null;
        $res = 0;
        foreach ($this->reci as $rec)
        {
            $n = mb_strlen($rec);
            $f = $user;
            $len = 0;
            for ($i = 0; $i < $n; $i++)
            {
                $slovo = mb_substr($rec, $i, 1);
                $flag = false;
                for ($j = 0; $j < 12; $j++) if ($f[$j] === $slovo)
                {
                    $f[$j] = 0;
                    $flag = true;
                    $len++;
                    break;
                }
                if (!$flag) break;
            }
            if ($len == $n && $n > $res)
            {
                $ret = $rec;
                $res = $n;
            }
        }
        return $ret;
    }

    public function poeni($rec){
        $br_poe = $rec.mb_strlen($rec);

        return $br_poe;
    }
}

?>
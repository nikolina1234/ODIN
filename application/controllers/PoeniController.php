<?php

if (session_status() == PHP_SESSION_NONE) { session_start();}

/**
 *PoeniController - klasa za upravljanje i pamcenje poena po igrama
 *@version 1.0
 *@author Nikolina Stojić 0639/2016
 */
class PoeniController extends CI_Controller
{

    /**
     *Cuva poene za svaku igru posebno i ukupne poene
     *@return void
     */
    function update() {
         if (isset($_POST['igra'])) {
            $igra = $_POST['igra'];
            $poeni = 0;
            if (isset($_POST['ukupno'])){
                $poeni = intval($_POST['ukupno']);
                $_SESSION['uk_poeni'] = $_SESSION['uk_poeni'] + $poeni;
            }
            $_SESSION[$igra] = $poeni;
            echo $_SESSION['uk_poeni'];
        }
    }

    /**
     * Klasa za prikaz poena po igrama
     * @return void
     */
    function points(){
        $this->load->view('PoeniView');
    }
}
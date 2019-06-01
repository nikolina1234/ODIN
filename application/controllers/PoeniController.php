<?php

session_start();

class PoeniController extends CI_Controller
{

    function update() {
        print_r($_POST);
        if (isset($_POST['igra'])) {
            $igra = $_POST['igra'];
            $poeni = 0;
            if (isset($_POST['ukupno'])){
                $poeni = intval($_POST['ukupno']);
                $_SESSION['uk_poeni'] = $_SESSION['uk_poeni'] + $poeni;
            }
            $_SESSION[$igra] = $poeni;
            //$_SESSION['uk_poeni'] = $_SESSION['uk_poeni'] + $poeni;
            echo $_SESSION['uk_poeni'];
        }
    }

    function points(){
        $this->load->view('PoeniView');
    }
}
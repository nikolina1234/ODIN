<?php

session_start();

class PointsController extends CI_Controller
{

    function update() {
        print_r($_POST);
        if (isset($_POST['igra'])) {
            $igra = $_POST['igra'];
            $poeni = 0;
            if (isset($_POST['ukupno'])) $poeni = intval($_POST['ukupno']);
            $_SESSION[$igra] = $poeni;
            echo $_SESSION['slagalica'];
        }
    }
}
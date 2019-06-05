<?php
/**
 *MojBrojController - klasa za upravljanje igrom Moj broj
 *@version 1.0
 *@author Nikolina Stojić 0639/2016
 */

class MojBrojController extends CI_Controller
{
    /**
     *Prikazuje igru Moj Broj
     *@return void
     */
    public function index(){
        $this->load->view('MojBrojView');
    }
}
<?php

/**
 *SlagalicaController - klasa za prikaz i upravljanje igrom slagalica
 * @version 1.0
 * @author Nikolina Stojić 0639/2016
 */
class SlagalicaController extends CI_Controller
{
    /**
     *Ucitavanje igre i prikaz
     * @return void
     */
    public function index() {

            $this->load->model('SlagalicaModel');
            $this->niz = $this->SlagalicaModel->generate();
            $this->najduza_rec = $this->SlagalicaModel->solve($this->niz);
            $this->load->view('SlagalicaView', $this->najduza_rec);
            $this->load->view('inc/footer');

    }

    /**
     *Vrsi proveru da li rec postoji u bazi
     *@return boolean
     */
    public function ceker(){
        $this->load->model('SlagalicaModel');
        if($this->SlagalicaModel->validate($this->input->get('word')))
            echo true;
        else echo false;
    }



}
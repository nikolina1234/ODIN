<?php


class SlagalicaController extends CI_Controller
{
    private $model;
    //private $najduza_rec;

    public function index() {
       // $this->load->view('inc/header');

            $this->load->model('SlagalicaModel');
            $this->niz = $this->SlagalicaModel->generate();
            $this->najduza_rec = $this->SlagalicaModel->solve($this->niz);
            $this->load->view('SlagalicaView', $this->najduza_rec);
            $this->load->view('inc/footer');

        //$najduza_rec = $this->SlagalicaModel->solve($niz);
    }

    public function ceker(){
        $this->load->model('SlagalicaModel');
        if($this->SlagalicaModel->validate($this->input->get('word')))
            echo true;
        else echo false;
    }

    public function poeni(){
        $this->load->model('SlagalicaModel');
        if($this->SlagalicaModel->validate($this->input->get('word'))){
            echo $this->SlagalicaModel->poeni($this->input->get('word'));
        }
    }

}
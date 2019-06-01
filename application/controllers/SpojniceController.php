<?php


class SpojniceController extends CI_Controller
{

    public function Spojnice() 
    {
        $this->putSpojnice();
    }

    public function view($page)
    {
        if (!file_exists(APPPATH.'views/'.$page.'.php'))
        {
            show_404();
        }

        $this->load->view('inc/header');
        $this->load->view($page,[]);
        $this->load->view('inc/footer');
    }

    public function putSpojnice()
    {
        $this->load->model('SpojniceModel');

        $spojnica_opis = $this->SpojniceModel->getSpojnice();

        $spojnice = $this->SpojniceModel->getSpojniceS($spojnica_opis->id_spojnice);

        $levo = array($spojnice[0],$spojnice[2],$spojnice[4],$spojnice[6],$spojnice[8]);

        $desno = array($spojnice[1],$spojnice[3],$spojnice[5],$spojnice[7],$spojnice[9]);

        shuffle($desno);

        session_start();

        $_SESSION['opis'] = $spojnica_opis->opis_spojnice;

        $_SESSION['spojniceLevo'] = $levo;
        $_SESSION['spojniceDesno'] = $desno;

        $this->view('SpojniceView');
    }

    public function check()
    {
        $this->load->model('SpojniceModel');

        $success =  $this->SpojniceModel->getOpis($_POST['opis1'],$_POST['opis2']);

        echo $success;
    }

    public function ispis()
    {
        
    }

}
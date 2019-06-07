<?php
	
	/*
 	@author Igor Durić 0646/16
	*/
   class AsocijacijeController extends CI_Controller
   {
	   /*
	   	Uzimam jednu asocijaciju iz baze i prikazujem je preko sesije
	   */
	   public function Asocijacije()
	   {
		    $this->load->model('AsocijacijeModel');
            $ret =  $this->AsocijacijeModel->getAsocijacije();

			session_start();
            
            $_SESSION['a1'] = $ret->a1;
            $_SESSION['a2'] = $ret->a2;
            $_SESSION['a3'] = $ret->a3;
            $_SESSION['a4'] = $ret->a4;
            $_SESSION['a_konacno'] = $ret->a_konacno;


            $_SESSION['b1'] = $ret->b1;
            $_SESSION['b2'] = $ret->b2;
            $_SESSION['b3'] = $ret->b3;
            $_SESSION['b4'] = $ret->b4;
            $_SESSION['b_konacno'] = $ret->b_konacno;

            $_SESSION['c1'] = $ret->c1;
            $_SESSION['c2'] = $ret->c2;
            $_SESSION['c3'] = $ret->c3;
            $_SESSION['c4'] = $ret->c4;
            $_SESSION['c_konacno'] = $ret->c_konacno;

            $_SESSION['d1'] = $ret->d1;
            $_SESSION['d2'] = $ret->d2;
            $_SESSION['d3'] = $ret->d3;
            $_SESSION['d4'] = $ret->d4;
            $_SESSION['d_konacno'] = $ret->d_konacno;

            $_SESSION['asoc_konacno'] = $ret->asoc_konacno;
            $this->view('AsocijacijeView');
       }
       
	   /*
	   	prikaz stranice, prekopirano sa CodeIgniter tutorial-a
	   */
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
   }
?>

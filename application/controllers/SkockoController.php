<?php

	/*
		Author: Denis Dimitrijevic 0107/2016
		
		Author: Ognjen Petkovic 0526/2016
	*/
    class SkockoController extends CI_Controller
    {
		/*
			Prikaz skocka
		*/
        public function Skocko()
        {
            $this->view('SkockoView');
        }
       
		/*
			Ucitavanje view-a
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
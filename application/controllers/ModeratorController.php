<?php

class ModeratorController extends CI_Controller
{
    private $model;

    public function index()
    {
        $this->view();
    }

    public function view($page = 'HomePage')
    {
        if (!file_exists(APPPATH.'views/'.$page.'.php'))
        {
            show_404();
        }

        $this->load->view('inc/header');
        $this->load->view($page,[]);
        $this->load->view('inc/footer');
    }

    public function Slagalica()
    {
        $this->view("ModeratorSlagalica");
    }

    public function backToHome()
    {
        $this->view("ModeratorHomePage");
    }

    public function ubaciRec()
    {
        if (isset($_POST['rec']))
        {
            $this->load->model('ModeratorModel');

           $success = $this->ModeratorModel->commitWord($_POST['rec']);

           if ($success == true)
           {
                $_SESSION['class'] = "form-control is-valid";
                $this->view("ModeratorSlagalica");
           }
           else
           {
                session_start();

                $_SESSION['class'] = "form-control is-invalid";
                $this->view("ModeratorSlagalica");
           }
        }
    }

    public function Spojnice()
    {
        $this->view('ModeratorSpojnice');
    }

    public function ubaciSpojnice()
    {
        $this->load->model('ModeratorModel');
        $flag = false;
        session_start();

        if (empty($_POST['opis']))
        {
            $_SESSION['opisklasa'] = 'form-control is-invalid';
           
        }
        else
        {
            $_SESSION['opisklasa'] = 'form-control is-valid'; 
            $_SESSION['opisval'] = $_POST['opis']; 

            if (empty($_POST['levo1']))
            {
                $_SESSION['levo1'] = 'form-control is-invalid';
                
            }
            else
            {
                $_SESSION['levo1'] = 'form-control is-valid';
                $_SESSION['levo1val'] = $_POST['levo1'];
                if (empty($_POST['desno1']))
                {
                    $_SESSION['desno1'] = 'form-control is-invalid'; 
                }
                else
                {
                    $_SESSION['desno1'] = 'form-control is-valid';
                    $_SESSION['desno1val'] = $_POST['desno1'];
                    if (empty($_POST['levo2']))
                    {
                        $_SESSION['levo2'] = 'form-control is-invalid'; 
                    }
                    else
                    {
                        $_SESSION['levo2'] = 'form-control is-valid';
                        $_SESSION['levo2val'] = $_POST['levo2'];
                        if (empty($_POST['desno2']))
                        {
                            $_SESSION['desno2'] = 'form-control is-invalid'; 
                        }
                        else
                        {
                            $_SESSION['desno2'] = 'form-control is-valid';
                            $_SESSION['desno2val'] = $_POST['desno2'];
                            if (empty($_POST['levo3']))
                            {
                                $_SESSION['levo3'] = 'form-control is-invalid'; 
                            }
                            else
                            {
                                $_SESSION['levo3'] = 'form-control is-valid';
                                $_SESSION['levo3val'] = $_POST['levo3'];
                                if (empty($_POST['desno3']))
                                {
                                    $_SESSION['desno3'] = 'form-control is-invalid'; 
                                }
                                else
                                {
                                    $_SESSION['desno3'] = 'form-control is-valid';
                                    $_SESSION['desno3val'] = $_POST['desno3'];
                                    if (empty($_POST['levo4']))
                                    {
                                        $_SESSION['levo4'] = 'form-control is-invalid'; 
                                    }
                                    else
                                    {
                                        $_SESSION['levo4'] = 'form-control is-valid';
                                        $_SESSION['levo4val'] = $_POST['levo4'];
                                        if (empty($_POST['desno4']))
                                        {
                                            $_SESSION['desno4'] = 'form-control is-invalid'; 
                                        }
                                        else
                                        {
                                            $_SESSION['desno4'] = 'form-control is-valid';
                                            $_SESSION['desno4val'] = $_POST['desno4'];   
                                            if (empty($_POST['levo5']))
                                            {
                                                $_SESSION['levo5'] = 'form-control is-invalid'; 
                                            }
                                            else
                                            {
                                                $_SESSION['levo5'] = 'form-control is-valid';
                                                $_SESSION['levo5val'] = $_POST['levo5'];   
                                                if (empty($_POST['desno5']))
                                                {
                                                    $_SESSION['desno5'] = 'form-control is-invalid'; 
                                                }
                                                else
                                                {
                                                    $_SESSION['desno5'] = 'form-control is-valid';
                                                    $_SESSION['desno5val'] = $_POST['desno5'];
                                                    $success = $this->ModeratorModel->checkSpojnica($_POST['opis']);

                                                    if ($success == false)
                                                    {
                                                        $_SESSION['opisklasa'] = 'form-control is-invalid';                
                                                    }
                                                    else
                                                    {
                                                        unset($_SESSION['opisval']);
                                                        unset($_SESSION['levo1val']);
                                                        unset($_SESSION['levo2val']);
                                                        unset($_SESSION['levo3val']);
                                                        unset($_SESSION['levo4val']);
                                                        unset($_SESSION['levo5val']);

                                                        unset($_SESSION['desno1val']);
                                                        unset($_SESSION['desno2val']);
                                                        unset($_SESSION['desno3val']);
                                                        unset($_SESSION['desno4val']);
                                                        unset($_SESSION['desno5val']);

                                                    }
                                                    $flag = true;
                                                    $this->Spojnice();
                                                }
                                            }
                                        } 
                                    }
                                }

                            }
                        }
                    }
                }
            }
            
        }
        if (!$flag)
            $this->Spojnice();
        
        


    }

    public function KoZnaZna()
    {
        $this->view('ModeratorKoZnaZna');
    }

    public function ubaciKoZnaZna()
    {
        $this->load->model('ModeratorModel');
       session_start();
        $flag = false;
        if (empty($_POST['pitanje']))
        {
            $_SESSION['pitanjeklasa'] = 'form-control is-invalid';
           
        }
        else
        {
            $_SESSION['pitanjeklasa'] = 'form-control is-valid'; 
            $_SESSION['pitanjeval'] = $_POST['pitanje']; 

            if (empty($_POST['tacan']))
            {
                $_SESSION['tacanklasa'] = 'form-control is-invalid';
                
            }
            else
            {
                $_SESSION['tacanklasa'] = 'form-control is-valid';
                $_SESSION['tacanval'] = $_POST['tacan'];
                if (empty($_POST['netacan1']))
                {
                    $_SESSION['netacan1klasa'] = 'form-control is-invalid'; 
                }
                else
                {
                    $_SESSION['netacan1klasa'] = 'form-control is-valid';
                    $_SESSION['netacan1val'] = $_POST['netacan1'];
                    if (empty($_POST['netacan2']))
                    {
                        $_SESSION['netacan2klasa'] = 'form-control is-invalid'; 
                    }
                    else
                    {
                        $_SESSION['netacan2klasa'] = 'form-control is-valid';
                        $_SESSION['netacan2val'] = $_POST['netacan2'];
                        if (empty($_POST['netacan3']))
                        {
                            $_SESSION['netacan3klasa'] = 'form-control is-invalid'; 
                        }
                        else
                        {
                            $_SESSION['netacan3klasa'] = 'form-control is-valid';
                            $_SESSION['netacan3val'] = $_POST['netacan3'];

                           $success = $this->ModeratorModel->ubaciKoZnaZna
                                    (
                                            $_POST['pitanje'],
                                            $_POST['tacan'],
                                            $_POST['netacan1'],
                                            $_POST['netacan2'],
                                            $_POST['netacan3']
                                    );

                            if ($success == false)
                            {
                                $_SESSION['pitanjeklasa'] = 'form-control is-invalid'; 
                            }
                            else
                            {
                                unset($_SESSION['pitanjeval']);
                                unset($_SESSION['tacanval']);
                                unset($_SESSION['netacan1val']);
                                unset($_SESSION['netacan2val']);
                                unset($_SESSION['netacan3val']);
                            }
                            $flag = true;
                            $this->KoZnaZna();
                        }
                    }
                }
            }
        }
        if (!$flag)
            $this->KoZnaZna();
    }
	 public function Asocijacije()
    {
        $this->view('ModeratorAsocijacije');
    }
	public function ubaciAsocijacije()
	{
		$this->load->model('ModeratorModel');
        $flag = false;
        session_start();

        if (empty($_POST['asoc_konacno']))
        {
            $_SESSION['asoc_konacnoklasa'] = 'form-control is-invalid';
           
        }
        else
        {
            $_SESSION['asoc_konacnoklasa'] = 'form-control is-valid'; 
            $_SESSION['asoc_konacnoval'] = $_POST['asoc_konacno']; 

            if (empty($_POST['a1']))
            {
                $_SESSION['a1'] = 'form-control is-invalid';   
            }
            else
            {
                $_SESSION['a1'] = 'form-control is-valid';
                $_SESSION['a1val'] = $_POST['a1'];
                if (empty($_POST['a2']))
                {
                    $_SESSION['a2'] = 'form-control is-invalid'; 
                }
                else
                {
                    $_SESSION['a2'] = 'form-control is-valid';
                    $_SESSION['a2val'] = $_POST['a2'];
                    if (empty($_POST['a3']))
                    {
                        $_SESSION['a3'] = 'form-control is-invalid'; 
                    }
                    else
                    {
                        $_SESSION['a3'] = 'form-control is-valid';
                        $_SESSION['a3val'] = $_POST['a3'];
                        if (empty($_POST['a4']))
                        {
                            $_SESSION['a4'] = 'form-control is-invalid'; 
                        }
                        else
                        {
                            $_SESSION['a4'] = 'form-control is-valid';
                            $_SESSION['a4val'] = $_POST['a4'];
                            if (empty($_POST['a_konacno']))
                            {
                                $_SESSION['a_konacno'] = 'form-control is-invalid'; 
                            }
                            else
                            {
                                $_SESSION['a_konacno'] = 'form-control is-valid';
                                $_SESSION['a_konacnoval'] = $_POST['a_konacno'];
                                if (empty($_POST['b1']))
                                {
                                    $_SESSION['b1'] = 'form-control is-invalid'; 
                                }
                                else
                                {
                                    $_SESSION['b1'] = 'form-control is-valid';
                                    $_SESSION['b1val'] = $_POST['b1'];
                                    if (empty($_POST['b2']))
                                    {
                                        $_SESSION['b2'] = 'form-control is-invalid'; 
                                    }
                                    else
                                    {
                                        $_SESSION['b2'] = 'form-control is-valid';
                                        $_SESSION['b2val'] = $_POST['b2'];
                                        if (empty($_POST['b3']))
                                        {
                                            $_SESSION['b3'] = 'form-control is-invalid'; 
                                        }
                                        else
                                        {
                                            $_SESSION['b3'] = 'form-control is-valid';
                                            $_SESSION['b3val'] = $_POST['b3'];   
                                            if (empty($_POST['b4']))
                                            {
                                                $_SESSION['b4'] = 'form-control is-invalid'; 
                                            }
                                            else
                                            {
                                                $_SESSION['b4'] = 'form-control is-valid';
                                                $_SESSION['b4val'] = $_POST['b4'];   
                                                if (empty($_POST['b_konacno']))
                                                {
                                                    $_SESSION['b_konacno'] = 'form-control is-invalid'; 
                                                }
                                                else
                                                {
                                                    $_SESSION['b_konacno'] = 'form-control is-valid';
                                                    $_SESSION['b_konacnoval'] = $_POST['b_konacno'];
													if (empty($_POST['c_konacno']))
													{
														$_SESSION['c_konacno'] = 'form-control is-invalid';
													}
													else{
														$_SESSION['c_konacno'] = 'form-control is-valid';
                                                        $_SESSION['c_konacnoval'] = $_POST['c_konacno'];
														if (empty($_POST['c4']))
														{
															$_SESSION['c4'] = 'form-control is-invalid';
														}
														else
														{
															$_SESSION['c4'] = 'form-control is-valid';
                                                            $_SESSION['c4val'] = $_POST['c4'];
															if(empty($_POST['c3']))
														    {
																$_SESSION['c3'] = 'form-control is-invalid';
															}
															else
															{
																$_SESSION['c3'] = 'form-control is-valid';
                                                                $_SESSION['c3val'] = $_POST['c3'];
																if(empty($_POST['c2']))
																{
																	$_SESSION['c2'] = 'form-control is-invalid';
																}
																else
																{
																	$_SESSION['c2'] = 'form-control is-valid';
                                                                    $_SESSION['c2val'] = $_POST['c2'];
																	if(empty($_POST['c1']))
																	{
																		$_SESSION['c1'] = 'form-control is-invalid';
																	}
																	else
																	{
																		$_SESSION['c1'] = 'form-control is-valid';
                                                                        $_SESSION['c1val'] = $_POST['c1'];
																		if(empty($_POST['d_konacno']))
																		{
																			$_SESSION['d_konacno'] = 'form-control is-invalid';
																		}
																		else
																		{
																			$_SESSION['d_konacno'] = 'form-control is-valid';
                                                                            $_SESSION['d_konacnoval'] = $_POST['d_konacno'];
																			if(empty($_POST['d4']))
																			{
																				$_SESSION['d4'] = 'form-control is-invalid';
																			}
																			else
																			{
																				$_SESSION['d4'] = 'form-control is-valid';
                                                                                $_SESSION['d4val'] = $_POST['d4'];
																				if(empty($_POST['d3']))
																				{
																					$_SESSION['d3'] = 'form-control is-invalid';
																				}
																				else
																				{
																					$_SESSION['d3'] = 'form-control is-valid';
                                                                                    $_SESSION['d3val'] = $_POST['d3'];
																					if(empty($_POST['d2']))
																					{
																						$_SESSION['d2'] = 'form-control is-invalid';
																					}
																					else
																					{
																						$_SESSION['d2'] = 'form-control is-valid';
                                                                                        $_SESSION['d2val'] = $_POST['d2'];
																						if(empty($_POST['d1']))
																						{
																							$_SESSION['d1'] = 'form-control is-invalid';
																						}
																						else
																						{
																							$_SESSION['d1'] = 'form-control is-valid';
                                                                                            $_SESSION['d1val'] = $_POST['d1'];
																							
                                                                                            $success = $this->ModeratorModel->checkAsocijacija
                                                                                            (
                                                                                                $_POST['a1'],
                                                                                                $_POST['a2'],
                                                                                                $_POST['a3'],
                                                                                                $_POST['a4'],
                                                                                                $_POST['a_konacno'],
                                                                                                $_POST['b1'],
                                                                                                $_POST['b2'],
                                                                                                $_POST['b3'],
                                                                                                $_POST['b4'],
                                                                                                $_POST['b_konacno'],
                                                                                                $_POST['c1'],
                                                                                                $_POST['c2'],
                                                                                                $_POST['c3'],
                                                                                                $_POST['c4'],
                                                                                                $_POST['c_konacno'],
                                                                                                $_POST['d1'],
                                                                                                $_POST['d2'],
                                                                                                $_POST['d3'],
                                                                                                $_POST['d4'],
                                                                                                $_POST['d_konacno'],
                                                                                                $_POST['asoc_konacno']
                                                                                            );//
																						    if ($success == false)
                                                                                            {
                                                                                                 $_SESSION['asoc_konacnoklasa'] = 'form-control is-invalid';                
                                                                                            }
																							else
																							{
																								unset($_SESSION['asoc_konacnoval']);
																								
                                                                                                unset($_SESSION['a1val']);
                                                                                                unset($_SESSION['a2val']);
                                                                                                unset($_SESSION['a3val']);
                                                                                                unset($_SESSION['a4val']);
                                                                                                unset($_SESSION['a_konacnoval']);
																								
																								unset($_SESSION['b1val']);
                                                                                                unset($_SESSION['b2val']);
                                                                                                unset($_SESSION['b3val']);
                                                                                                unset($_SESSION['b4val']);
                                                                                                unset($_SESSION['b_konacnoval']);
																								
																								unset($_SESSION['c1val']);
                                                                                                unset($_SESSION['c2val']);
                                                                                                unset($_SESSION['c3val']);
                                                                                                unset($_SESSION['c4val']);
                                                                                                unset($_SESSION['c_konacnoval']);
																								
                                                                                                unset($_SESSION['d1val']);
                                                                                                unset($_SESSION['d2val']);
                                                                                                unset($_SESSION['d3val']);
                                                                                                unset($_SESSION['d4val']);
                                                                                                unset($_SESSION['d_konacnoval']);
																							}
																							$flag = true;
                                                                                            $this->Asocijacije();
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}                                                     
                                                }
                                            }
                                        } 
                                    }
                                }

                            }
                        }
                    }
                }
            }
            
        }
		if (!$flag)
            $this->Asocijacije();
	}
	
}
?>
<?php

    class UserController extends CI_Controller
    {
        private $model;

        public function index()
        {
            $this->view();
        }

        public function userHomePage()
        {
            $this->view('ObicanKorisnikHomePage');
        }
        public function adminHomePage()
        {
            $this->view('AdminHomePage');
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

        public function authenticateLogin()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $this->load->model('UserModel');
                $user = 0; 
                $pass = 0;

                 if (isset($_POST['user']))
                    $user = $_POST['user'];
                    
                 if (isset($_POST['pass']))   
                    $pass = $_POST['pass'];
                

                //session_start();
                

                $success = $this->UserModel->loginAuthenticate($user,$pass);

                if ($success == 2)
                {
                    $this->view('AdminHomePage');
                    //$this->view('ModeratorHomePage');
                }
                else
                    if ($success == 3)
                    {
                        $this->view('ModeratorHomePage');
                    }
                    else
                        if ($success == 0)
                        {
                            //$gameplayNameSet = $this->UserModel->getGameplayName($user);


                                $_SESSION['username'] = $user;
                                $_SESSION['pass'] = $pass;
                                $this->view('ObicanKorisnikHomePage');
                              
                        }
                        else
                            {
                            if ($success == -1 )
                            {
                                $_POST = 
                                [
                                    'u' => "form-control is-invalid",
                                    'p' => "form-control is-invalid"
                                ];
                            }
                            else
                                {
                                    $_POST = 
                                    [
                                        'p' => "form-control is-invalid",
                                        'userCorrect' => $user
                                    ];
                                }

                                $this->load->view('inc/header');
                                $this->load->view('HomePage',[]);
                                $this->load->view('inc/footer');
                            }      
                    }
                    unset($_POST['user']);
                    unset($_POST['pass']);
        }

        public function authenticateRegistration()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {

                $this->load->model("UserModel");

                $usertype = -1;
                $username = 0;
                $password = 0;
                $passwordConf = 0;
                $sex = -1;
                $email = 0;

                if (isset($_POST['tip']))
                {
                    $usertype = $_POST['tip'];
                }
                else
                {
                    $_POST['tip'] = 'obkor';
                    $usertype = 'obkor'; 
                }

                if (isset($_POST['username']))
                {
                    $username = $_POST['username'];
                }
                if (isset($_POST['passw']))
                {
                    $password = $_POST['passw'];
                }
                if (isset($_POST['passwConf']))
                {
                    $passwordConf = $_POST['passwConf'];
                }
                if (isset($_POST['pol']))
                {
                    $sex = $_POST['pol'];
                }
                if (isset($_POST['email']))
                {
                    $email = $_POST['email'];
                }

                $success = $this->UserModel->authenticateRegistration($usertype,$username,$password,$passwordConf,$sex,$email);

               if ($success == 0)
               {
                    //load after reg home page
                   if (session_status() == PHP_SESSION_NONE) { session_start();}

                    $_SESSION['username'] = $username;

                    $this->load->view('inc/header');
                    $this->view('ObicanKorisnikHomePage');
                    $this->load->view('inc/footer');
               }
               else
               {
                    if ($success == -1)
                    {
                        $_POST['usererr'] = "form-control is-invalid";
                    }
                    else
                        if ($success == -3)
                            {
                                $_POST['passerr'] = "form-control is-invalid";
                                $_POST['usercorrect'] = $username;
                            }
                        else
                            if ($success == -4)
                            {
                                    $_POST['passerr'] = "form-control is-invalid";
                                    $_POST['passconferr'] = "form-control is-invalid";
                                    $_POST['usercorrect'] = $username;
                            }
                           else
                                if($success == -5)
                                {
                                    $_POST['usercorrect'] = $username;
                                }
                                else
                                    if ($success == -6)
                                    {
                                        $_POST['usercorrect'] = $username;
                                        $_POST['emailerr'] = "form-control is-invalid";
                                    }

                            $this->load->view('inc/header');
                            $this->load->view("HomePage");
                            $this->load->view('inc/footer');
                   //loaduj homepage
               }
            }
        }

        public function authenticateGameplayName()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $gameplayname = null;

                if (isset($_POST['gameplayname']))
                {
                    $gameplayname = $_POST['gameplayname'];
                }

                $this->load->model("UserModel");

                session_start();

                $user = $_SESSION['username']; 

                $success = $this->UserModel->authenticateGameplayName($gameplayname,$user);

                if ($success == -1)
                {
                    $_POST['textboxclass'] = "form-control is-invalid";
                    $this->load->view('inc/header');
                    $this->load->view("ObicanKorisnikAfterRegistrationPage");
                    $this->load->view('inc/footer');
                }
                else
                {
                     $_POST['hellouser'] = $user;
                     $this->view('ObicanKorisnikHomePage'); 
                }


                
                
            }
        }

        public function guestPage()
        {
            $this->view("GostHomePage");
        }

        public function rangLista()
        {
            $this->load->model("UserModel");

            $korisnici = $this->UserModel->getKorisnici();



           $_SESSION['korisnici'] = $korisnici;

           $this->view('ObicanKorisnikRangLista');
        }

        /**
         * Poziva model koji dodaje osvojene poene starim poenima registrovanog korisnika
         * @return void
         * @author Nikolina Stojić 0639/2016
         */
        public function updatePoints(){
            $this->load->model("UserModel");
            $this->UserModel->updatePoints();
            $this->load->view('inc/header');
            $this->load->view('ObicanKorisnikHomePage');
        }
    }

?>
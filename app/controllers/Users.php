<?php
    class Users extends Controller{
        public function __construct(){
            
        }

        public function register(){
            //Check for posts
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //Proccess the form
            } else {
                //Init data
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_passworde_err' => ''
                ];

                $this->view('users/register', $data);
            }
        }
    }
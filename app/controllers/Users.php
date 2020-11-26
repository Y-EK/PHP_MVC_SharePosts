<?php
    class Users extends Controller{
        public function __constructor(){

        }

        public function register(){
            // Check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
            } else {
                // Init data
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_err' => ''
                ];

                // Load view
                $this->view('users/register', $data);
                
            }
        }
    }

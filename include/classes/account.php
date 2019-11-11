<?php
    class Account{
        private $errorArray;

        private function __construct(){
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
            $this->validateUsername($un);
             $this->validateFirstname($fn);
              $this->validateLastname($ln);
               $this->validateemail($em, $em2);
                $this->validatePasswords($pw, $pw2);

            if(empty($this->errorArray) == true){
                return true;
            }
            else{
                return false;
            }

        }

        private function validateUsername($un){
            if(strlen($un) > 25 || strlen($un)<5){
                array_push($this->errorArray, "Username must be between 5 and 25 characters");
                return;
            }

        }


        private function validateFirstname($fn){
            if(strlen($fn) > 25 || strlen($fn)<2){
                array_push($this->errorArray, "your first name must be between 2 and 25 characters");
                return;
            }

        }

        private function validateLastname($ln){
            if(strlen($ln) > 25 || strlen($ln)<2){
                array_push($this->errorArray, "your last name must be between 2 and 25 characters");
                return;
            }

        }

        private function validateemail($em, $em2){
            if($em != $em2){
                array_push($this->errorArray, "your email does not match!");
                return;
            }
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, "Email is invalid");
                return;
            }
        }


        private function validatePasswords($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errorArray, "your passwords don't match!");
                return;
            }
            if(preg_match('/[^A-Za-z0-9]/', $pw)){
                array_push($this->errorArray, "Password should contain only letter and numbers");
                return;
            }
            if(strlen($pw) > 25 || strlen($pw)<8){
                array_push($this->errorArray, "Password must be between 8 and 25 characters");
                return;
        }
    }
?>
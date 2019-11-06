<?php
    class Account{
        private $errorArray;

        private function __construct(){
            $this->errorArray = array();
        }

        private function validateUsername($un){

            if(strlen($un) > 25 || strlen($un)<5){
                array_push($this->errorArray, "Username must be between 5 and 25 characters");
                return;
            }

        }

        private function validateemail{

            
        }
    }
?>
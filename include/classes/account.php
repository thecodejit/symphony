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


        private function validateFirstname($fn){

            if(strlen($fn) > 25 || strlen($fn)<2){
                array_push($this->errorArray, "your first name must be between 2 and 25 characters");
                return;
            }

        }

        private function validateFirstname($ln){

            if(strlen($ln) > 25 || strlen($ln)<2){
                array_push($this->errorArray, "your last name must be between 2 and 25 characters");
                return;
            }

        }

        private function validateemail{

            
        }
    }
?>
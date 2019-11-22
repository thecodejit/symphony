<?php
    class Account{
        private $con;
        private $errorArray;

        public function __construct($con){
            $this->con = $con;
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
            $this->validateUsername($un);
            $this->validateFirstname($fn);
            $this->validateLastname($ln);
            $this->validateemail($em, $em2);
            $this->validatePasswords($pw, $pw2);

            if(empty($this->errorArray) == true){
                return inserttodb($un, $fn, $ln, $em, $pw);
            }
            else{
                return false;
            }

        }

        public function geterror($error){
            if(!in_array($error, $this->errorArray)){
                $error = "";
            }
            return "<span class = 'error message'>$error</span>";
        }

        private function inserttodb($un, $fn, $ln, $em, $pw){
            $encryptpassword = md5($pw);
            $date = date("Y-m-d");
            $result = mysqli_query($this->con, "INSERT INTO users VALUES('', '$un', '$fn', '$ln', '$em', '$encryptpassword', '$date')");
            return $result;
        }

        private function validateUsername($un){
            if(strlen($un) > 25 || strlen($un)<5){
                array_push($this->errorArray, Constant::$usernamecharacters);
                return;
            }

        }


        private function validateFirstname($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray, Constant::$firstnamecharacter);
                return;
            }

        }

        private function validateLastname($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray, Constant::$lastnamecharacter);
                return;
            }

        }

        private function validateemail($em, $em2){
            if($em != $em2){
                array_push($this->errorArray, Constant::$emaildontmatch);
                return;
            }
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, Constant::$emailInvalid);
                return;
            }
        }


        private function validatePasswords($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errorArray, Constant::$passworddontmatch);
                return;
            }
            if(preg_match('/[^A-Za-z0-9]/', $pw)){
                array_push($this->errorArray, Constant::$passwordnotalphanumeric);
                return;
            }
            if(strlen($pw) > 25 || strlen($pw) < 8){
                array_push($this->errorArray, Constant::$passwordcharacters);
                return;
            }
        }
    }

?>
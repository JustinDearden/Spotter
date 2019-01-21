<?php
    class Account {

        private $errorArray;

        public function __construct() {
            $this->errorArray = array();
        }

        public function register($username, $firstName, $lastName, $email, $email2, $password, $password2) {
            $this->validateUsername($username);
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmails($email, $email2);
            $this->validatePasswords($password, $password2);
        }

        //Validation Functions
        private function validateUsername($username) {
            if (strlen($username) > 25 || strlen($username) < 5) {
                array_push($this->errorArray, "Your username must be between 5 and 25 characters");
                return;
            }

            //TODO: check if username exists (user table)
        }

        private function validateFirstName($firstname) {
            if (strlen($firstname) > 25 || strlen($firstname) < 5) {
                array_push($this->errorArray, "Your first name must be between 5 and 25 characters");
                return;
            }
        }

        private function validateLastName($lastname) {
            if (strlen($lastname) > 25 || strlen($lastname) < 5) {
                array_push($this->errorArray, "Your last name must be between 5 and 25 characters");
                return;
            }
        }

        private function validateEmails($email, $email2) {
            if ($email != email2) {
                array_push($this->errorArray, "Your emails don't match");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorArray, "Email is invalid");
            }

            //TODO: check if username hasn't been used
        }

        private function validatePasswords($password, $password2) {
            if ($password != $password2) {
                array_push($this->errorArray, "Your passwords don't match");
            }

            if (preg_match('/[^A-Za-z0-9]/',$password)) {
                array_push($this->errorArray, "Your password can only contain numbers and letters");
            }

            if (strlen($password) > 25 || strlen($password) < 5) {
                array_push($this->errorArray, "Your password must be between 5 and 25 characters");
                return;
            }
        }



    }


?>
<?php
    class Account {
        public function __construct() {

        }

        public function register() {
            $this->validateUsername($username);
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmails($email, $email2);
            $this->validatePasswords($password, $password2);
        }

        //Validation Functions
        private function validateUsername($username) {

        }

        private function validateFirstName($firstname) {
            
        }

        private function validateLastName($lastname) {
            
        }

        private function validateEmails($email, $email2) {
            
        }

        private function validatePasswords($password, $password2) {
            
        }



    }


?>
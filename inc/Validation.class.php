<?php 
    class Validation {
        public static $errors;
        static function hasErrors() {
            self::checkPost();
            if(empty(self::$errors))
                return self::$errors; //we good.
            else
                return self::$errors;
        }
        static function addError($err) {
            self::$errors[] = $err;
        }
        static function hasPost($required = false) {
            if(!isset($_POST["submit"])) {
                if($required)
                    self::$errors[] = "Missing Post Data.";
                return false;
            }
            return true;
        }
        static function checkPost(){
            if(isset($_POST['fname']) && strlen($_POST['fname']) == 0){
                self::addError('Please, First Name is a required field!');
            }
            if(isset($_POST['lname']) && strlen($_POST['lname']) == 0){
                self::addError('Please, Last Name is a required field!');
            }
            if(isset($_POST['email']) && strlen($_POST['email']) == 0){
                self::addError('Please, Email is a required field!');
            }
            if($_POST['gender'] != 'male' && $_POST['gender'] != 'female' ) {
                self::addError('Please, select a valid gender!');
            }
            if(isset($_POST['address']) && strlen($_POST['address']) == 0){
                self::addError('Please, Address is a required field!');
            }
            if(isset($_POST['city']) && strlen($_POST['city']) == 0){
                self::addError('Please, City is a required field!');
            }
            if(isset($_POST['country']) && strlen($_POST['country']) == 0){
                self::addError('Please, Country is a required field!');
            }
        }
    }


?>
<?php 
    class Validation {
        public static $errors;
        static function hasErrors() {
            if(empty($errors))
                return false; //we good.
            else
                return true;
        }
        static function printErrors() {
            if(self::hasErrors()) {
                echo "<ul>";
                foreach($errors as $error) {
                    echo "<li>" . $error . "</li>";
                }
                echo "</ul>";
            }
        }
        static function addError($err) {
            $errors[] = $err;
        }
        static function hasPost($required = false) {
            if(!isset($_POST["submit"])) {
                if($required)
                    $errors[] = "Missing Post Data.";
                return false;
            }
            return true;
        }
    }


?>
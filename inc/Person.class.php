<?php 
/*
    Constructor expects full information variables.
*/
class Person { 
    private $email; 
    private $fname;
    private $lname;
    private $gender;
    private $address;
    private $city;
    private $country; 
    
    // Create a default contructor
    function __construct($email,$fname,$lname,$gender,$address,$city,$country) {
        $this->email = $email;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->address = $address;
        $this->city = $city;
        $this->country = $country;
    }
    
    // Get the values and save on the variables
    function getEmail() { 
        return $this->email; 
    } 
    function getFirstName(){
        return $this->fname;
    }
    function getLastName() {
        return $this->lname;
    }
    function getGender($asBoolean = true) {
        if($asBoolean)
            return $this->gender === strtolower("male") ? 0 : 1;
        return $this->gender;
    }
    function getAddress() {
        return $this->address;
    }
    function getCity() {
        return $this->city;
    }
    function getCountry() {
        return $this->country;
    }
    function toString() {
        return
               self::getEmail() . "," . 
               self::getFirstName() . "," .
               self::getLastName() . "," .
               self::getGender(false) . "," . 
               self::getAddress() . "," . 
               self::getCity() . "," . 
               self::getCountry();
    }
} 


?>
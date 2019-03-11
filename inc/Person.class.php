<?php 

// class Person {
//     static function createPersons($content) {
//         $person = array();
//         //var_dump($content);
//         for ($i = 1; $i < sizeof($content); $i++) {
//             $person = array('email' => $content[$i][0],
//                             'firstName' => $content[$i][1],
//                             'lastName' => $content[$i][2],
//                             'gender' => $content[$i][3],
//                             'address' => $content[$i][4],
//                             'city' => $content[$i][5],
//                             'country' => $content[$i][6]);
//         }
//         return $person;
//     }
// }
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
    function __construct($email,$fname,$lname,$gender,$address,$city,$country) {
        $this->email = $email;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->address = $address;
        $this->city = $city;
        $this->country = $country;
    }
    
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
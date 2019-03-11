<?php 

class Person {
    static function createPersons($content) {
        $person = array();
        //var_dump($content);
        for ($i = 1; $i < sizeof($content); $i++) {
            $person = array('email' => $content[$i][0],
                            'firstName' => $content[$i][1],
                            'lastName' => $content[$i][2],
                            'gender' => $content[$i][3],
                            'address' => $content[$i][4],
                            'city' => $content[$i][5],
                            'country' => $content[$i][6]);
        }
        return $person;
    }
}

?>
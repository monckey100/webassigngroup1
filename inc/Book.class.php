<?php 
    /*
        TODO: Need to encode commas and special characters.
              Need a toString(); function for class for FileAgent.

              Please refer to FileAgent documentation on expected output
    */

    class Book {
        /*
            Input: Expects 2D Array from FileAgent.
        */
        public static $array = [];
        static function cleanArray($array) {
            foreach($array as &$line) {
                if(count($line) === 7) {
                    self::$array[] = new Person(
                        $line[0],
                        $line[1],
                        $line[2],
                        $line[3],
                        $line[4],
                        $line[5],
                        $line[6]
                    );
                } else {
                    throw new Exception("Unexpected line count: " . count($line));
                }
            }
        }
        static function getPerson($id) {
            if(count(self::$array) > $id - 1) {
                return self::$array[$id];
            } else {
                throw new Exception("ID out of bounds.");
            }
        }
        static function getIndex() {
            if(isset($_POST)) {
                if(isset($_POST["hiddenID"])) { //get current ID.
                    if($_POST["submit"] === "Next") {
                        $_POST["hiddenID"]++;
                        if($_POST["hiddenID"] >= count(self::$array))
                            $_POST["hiddenID"] = 1;
                    }
                    if($_POST["submit"] === "Previous") {
                        $_POST["hiddenID"]--;
                        if($_POST["hiddenID"] <= 0)
                            $_POST["hiddenID"] = count(self::$array) - 1;
                    }
                } else {
                    $_POST["hiddenID"] = 1;
                }
                return $_POST["hiddenID"];
            } else {
                return 1; //renders first available person.
            }
        }
        static function updateBook($Person) {
            $array[] = $Person;
            FileAgent::write(DB_FILE,PHP_EOL.$Person->toString(),true);
        }
        static function saveBook() {
            FileAgent::write(DB_FILE,self::toString());
        }
        static function deletePerson($ID) {
            array_splice(self::$array, $ID, 1);
        }
        static function toString() {
            $mString = "";
            foreach(self::$array as &$Person) {
                if($Person != self::$array[0])
                    $mString .= PHP_EOL.$Person->toString(); 
                else
                    $mString .= $Person->toString(); 
            }
            return $mString;
        }
    }
?>
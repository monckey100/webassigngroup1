<?php 
class FileAgent {

    static function read($fileName)    {
        $myfile = fopen($fileName, "r") or die("Unable to open file!");
        $m = fread($myfile,filesize($fileName));
        fclose($myfile);
        return $m;
    }
    static function write($fileName,$contents,$doappend = false) {
        /*
            INPUT: filename, expected string, should we append to end of file
            OUTPUT: True if successful, program terminates function if fail to open file.
        */
        $m = "w";
        if($doappend)
            $m = "a";
        $myfile = fopen($fileName, $m) or die("Unable to open file!");
        fwrite($myfile,$contents);
        fclose($myfile);
        return true; //file wrote.
    }
    static function parse($myfile) {
        /*
            INPUT: email,firstname,lastname,gender,address,city,country\nemail,firstname...
            OUTPUT: $lines[0][6] == country;
        */
        $lines = explode(PHP_EOL,$myfile);
        foreach ($lines as &$line) {
            $line = explode(",",str_replace(array("\n", "\r"), '', $line));
        }
       return $lines; 
    }
}
?>
<?php

// get the files required for the program
require("inc/config.inc.php");
require("inc/Book.class.php");
require("inc/FileAgent.class.php");
require("inc/Page.class.php");
require("inc/Person.class.php");
require("inc/Validation.class.php");

// Core of the program
Book::cleanArray(FileAgent::parse(FileAgent::read(DB_FILE)));
Page::$title = "Assignment #1 - Group X";
Page::header();
if(Validation::hasPost()) {
    if($_POST["submit"] === "Delete") {
        Book::deletePerson(Book::getIndex());
        Book::saveBook();
    }
    if($_POST["submit"] === "Save") {
        $errors = Validation::hasErrors();
        if(!$errors){
            Validation::cleanPOST();
            $Person = new Person(
                $_POST["email"],
                $_POST["fname"],
                $_POST["lname"],
                $_POST["gender"],
                $_POST["address"],
                $_POST["city"],
                $_POST["country"]
            );
            Book::updateBook($Person);
        } else {
            Page::printErrors($errors);
        }
    }
}
Page::form(Book::getPerson(Book::getIndex()));
Page::footer();

?>
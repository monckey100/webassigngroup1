<?php

require("inc/config.inc.php");
require("inc/Book.class.php");
require("inc/FileAgent.class.php");
require("inc/Page.class.php");
require("inc/Person.class.php");
require("inc/Validation.class.php");

Page::$title = "Assignment 1 - Group X";
Page::header();
Page::form();
Page::footer();

?>
<?php
    // for loop (foreach) 
    // use  'super global variable' $_POST/$_GET
    foreach($_POST as $key => $value){
        print "{$key}: \"{$value}\"<br>";
    }

    // GET (read only) 
    // extract the name/ value pairs added to the end of the url and print them to the screen

    // breaks them into key value pairs 
    foreach($_GET as $key => $value){
        // interpolation template 
        print "{$key}: \"{$value}\"<br>"; // need to escape quotes with \ \ 
    }

    // anything added to the url (paramerers) is a get variable 
    // http://ramsdensl.students.cofc.edu/CSCI215_Spring2022/08/e8.3-echo.php?x=11&y=2&green=blue 
    // variable pairs are x='11', y='2', green='blue' 
?>
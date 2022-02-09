<?php

require 'db-pswd.inc.php';

try {
    //DOCKER
    $conection = new PDO('mysql:host=mysql;dbname=oceans_db', DOCKER[0], DOCKER[1]);

    print "SUCCESS! Connected to the database!";

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
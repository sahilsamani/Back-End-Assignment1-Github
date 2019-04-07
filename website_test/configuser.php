<?php

$host       = "localhost";
$username   = "root";
$password   = "secret";
$dbname     = "fitness_tracker_app"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; 
// will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

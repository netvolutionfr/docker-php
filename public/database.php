<?php
$serveur = "mysql";
$dbname = "test";
$dbuser = "test";
$dbpassword = "test";
$connexion = new PDO("mysql:host=$serveur;dbname=$dbname",$dbuser,$dbpassword);

<?php
ini_set('display_errors', 'Off');

//const DB_SERVER = 'plazma.rs';
//const DB_USER = 'plazmars_plazmau';
//const DB_PASS = 'plazma2017HugeMedia';
//const DB_NAME = 'plazmars_plazma';

const DB_SERVER = 'localhost';
const DB_USER = 'uniada_admin';
const DB_PASS = 'weareawesome2018';
const DB_NAME = 'uniada_website';

try {
    $db= new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Greska!");
}

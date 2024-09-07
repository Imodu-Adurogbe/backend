<?php

$config = require('config.php');
$db = new Database($config['database']);



$header ='My NOTES';
$i= 0;

$notes=$db->query('select * from notes where USER_ID = ?',[$i]) ->fetchAll();

 require "views/notes.view.php";
 
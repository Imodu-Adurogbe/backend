<?php

$config = require('config.php');
$db = new Database($config['database']);



$header ='NOTE';


$note=$db->query('select * from notes where id = :id',[
    'id' => $_GET['id']
])->fetch();

if(! $note){
    abort();
}
$currentUserId=0;

if ($note['USER_ID'] !== $currentUserId){
    abort(Response::FORBIDDEN);
}

 require "views/note.view.php";
 
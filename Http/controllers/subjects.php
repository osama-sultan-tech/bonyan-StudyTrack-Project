<?php

$heading = 'Your Subjects List';
$current_user = 2;

$config = require '../config.php';

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : abort();


$db = new Database($config['database'], 'root', '');

$Query =  "SELECT * FROM subjects where user_id = :user_id";

$subjects = $db->query($Query, ['user_id' => $user_id])->get();

if(! $subjects){
    abort();
}


authorize($subjects[0]['user_id'] !== $current_user);



require('../views/subjects.view.php');

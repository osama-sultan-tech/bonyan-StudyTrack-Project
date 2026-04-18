<?php

$heading = 'Notes of ' . ' { name of sub } ' . ' Subject';
$current_user = 2;

$subject_id = isset($_GET['subject_id']) ? $_GET['subject_id'] : abort();

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : abort();

$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

$query =  "SELECT * FROM notes where subject_id = :subject_id  and user_id = :user_id";

$notes = $db->query($query, ['subject_id' => $subject_id, 'user_id' => $user_id ])->get();

//dd($notes);

if(! $notes){
    abort();
}

//authorize($notes[0]['user_id'] !== $current_user);



require('../views/notes.view.php');
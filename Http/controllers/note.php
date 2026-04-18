<?php


$note_id = isset($_GET['note_id']) ? $_GET['note_id'] : abort();

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : abort();

$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

$query =  "SELECT * FROM notes where id = :note_id and user_id = :user_id";

$note = $db->query($query, ['note_id' => $note_id, 'user_id'=>$user_id])->fetch(PDO::FETCH_ASSOC);

$heading = $note['title'];

//dd($note);

require('../views/note.view.php');
<?php

require  '../Core/Database.php';



$note_id = isset($_GET['note_id']) ? $_GET['note_id'] : abort();

$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

$query =  "SELECT * FROM notes where id = :note_id";

$note = $db->query($query, ['note_id' => $note_id])->fetch(PDO::FETCH_ASSOC);

$heading = $note['title'];

//dd($note);

require('../views/note.view.php');
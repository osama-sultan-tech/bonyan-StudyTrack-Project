<?php

require  '../Core/Database.php';



$id = $_GET['note_id'] ? $_GET['note_id'] : 1;

$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

$query =  "SELECT * FROM notes where id = :note_id";

$note = $db->query($query, ['note_id' => $id])->fetch(PDO::FETCH_ASSOC);

$heading = $note['title'];

//dd($note);

require('../views/note.view.php');
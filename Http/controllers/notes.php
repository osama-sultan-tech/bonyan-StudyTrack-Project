<?php

require  '../Core/Database.php';

$heading = 'Notes of ' . ' { name of sub } ' . ' Subject';

$id = $_GET['subject_id'] ? $_GET['subject_id'] : 1;

$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

$query =  "SELECT * FROM notes where subject_id = :subject_id";

$notes = $db->query($query, ['subject_id' => $id])->fetchall(PDO::FETCH_ASSOC);


require('../views/notes.view.php');
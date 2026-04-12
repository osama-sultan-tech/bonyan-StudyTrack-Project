<?php

require  '../Core/Database.php';

$heading = 'Notes of ' . ' { name of sub } ' . ' Subject';

$subject_id = isset($_GET['subject_id']) ? $_GET['subject_id'] : abort();

$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

$query =  "SELECT * FROM notes where subject_id = :subject_id";

$notes = $db->query($query, ['subject_id' => $subject_id])->fetchall(PDO::FETCH_ASSOC);


require('../views/notes.view.php');
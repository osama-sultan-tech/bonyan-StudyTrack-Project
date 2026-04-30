<?php

$heading = 'Create New Note';

$config = require('../config.php');
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : abort();
$subject_id = isset($_GET['subject_id']) ? $_GET['subject_id'] : abort();


$db = new Database($config['database'], 'root', '');

$Query =  "SELECT name FROM subjects where id = :id ";

$current_subject = $db->query($Query, ['id' => $subject_id])->findOrFail();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    dd($_POST);
    $db->query("INSERT INTO notes (title, content, user_id, subject_id) VALUES (:title, :content, :user_id ,:subject_id)",[
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'user_id' => $user_id,
        'subject_id' =>$subject_id
    ]);

    header('location: /notes?subject_id=' . $subject_id . '&user_id=' . $user_id);
    exit();
}

require '../views/note-create.view.php';
<?php

$heading = 'Create New Subject';

$config = require('../config.php');

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : abort();


$db = new Database($config['database'], 'root', '');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db->query("INSERT INTO subjects ( name, user_id) VALUES (:name, :user_id)",[
        'user_id' => $user_id,
        'name' => $_POST['subject-name']
    ]);

//    dd($user_id);
    header('location: /subjects?user_id='.$user_id);
    exit();
}

require '../views/subject-create.view.php';
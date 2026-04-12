<?php

require  '../Core/Database.php';

$heading = 'Your Subjects List';

$config = require '../config.php';

$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : abort();



$db = new Database($config['database'], 'root', '');

$Query =  "SELECT * FROM subjects where user_id = :user_id";

$subjects = $db->query($Query, ['user_id' => $user_id])->fetchAll();


//dd($subjects);



require('../views/subjects.view.php');

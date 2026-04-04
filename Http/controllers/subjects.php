<?php

require  '../Core/Database.php';

$heading = 'Your Subjects List';

$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

$Query =  "SELECT * FROM subjects where user_id = 1";

$subjects = $db->query($Query)->fetchAll();


//dd($subjects);

require('../views/subjects.view.php');

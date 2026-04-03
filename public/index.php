<?php

require '../router.php';
require '../Core/Database.php';


$config = require '../config.php';


$db = new Database($config['database'], 'root', '');

//dd($_GET['id']);
$id = $_GET['id'] ? $_GET['id'] : 1;


$query = "SELECT * FROM notes where id = :id";

$notes = $db->query($query, ['id' => $id])->fetch(PDO::FETCH_ASSOC);

//echo "<ul class='list-disc list-inside px-4 py-6'>";
//foreach ($notes as $note) {
//    echo '<li>' . $note['title'] . '</li>';
//}
//echo "</ul>";

echo '<br/>';
echo '##########################################';
echo '<br/>';
echo '<br/>';

dd($notes);



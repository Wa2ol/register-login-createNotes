<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);



$currentUserId = 1;


$note = $db->query(
    'select * from posts where id = :id',
    [
        'id' => $_POST['id']
    ]
)->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query('delete from posts where id = :id', [
    'id' => $_POST['id']
]);

header('location: /pro/notes');
exit();

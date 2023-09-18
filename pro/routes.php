<?php

$router->get('/pro/', '/index.php');
$router->get('/pro/about', '/about.php');
$router->get('/pro/contact', '/contact.php');

$router->get('/pro/notes', '/notes/index.php')->only('auth');;
$router->get('/pro/note', '/notes/show.php');
$router->get('/pro/notes/create', '/notes/create.php');

$router->get('/pro/note/edit', '/notes/edit.php');


$router->delete('/pro/note', '/notes/destroy.php');

$router->post('/pro/notes', '/notes/store.php');

$router->patch('/pro/note', '/notes/update.php');

$router->get('/pro/register', '/registration/create.php')->only('guest');
$router->post('/pro/register', '/registration/store.php');

$router->get('/pro/login', '/session/create.php')->only('guest');
$router->post('/pro/session', '/session/store.php')->only('guest');
$router->delete('/pro/session', '/session/destroy.php')->only('auth');

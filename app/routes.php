<?php

use App\Models\User;

$app->get('/', function() use ($app) {
    $user = new User;
    echo $user->name . '<br>';
    $app->render('home.php');
});

$app->get('/users', function() use ($app) {
    $users = User::all();
    $app->render('home.twig', [
        'users' => $users
    ]);
});

$app->get('/posts/new', function() use ($app)  {
    $app->render('posts/new.php');
});

$app->post('/posts/new', function() {
    echo 'Data post';
});
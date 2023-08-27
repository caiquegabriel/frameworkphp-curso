<?php

    include('Route.php');

    Route::get('/', function () {
        echo "<a href='profile'> Perfil </a>";
        die('Entrou na raiz');
    });

    Route::post('/', function () {
        echo "Post 1";
    });

    Route::put('/', function () {
        echo "Put 1";
    });

    Route::delete('/', function () {
        echo "Delete 1";
    });

    Route::delete('/2', function () {
        echo "Delete 2";
    });
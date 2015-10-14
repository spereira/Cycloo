<?php


// Doctrine (db)

$app['db.options'] = array(

    'driver'   => 'pdo_mysql',

    'charset'  => 'utf8',

    'host'     => 'localhost',

    'port'     => '3306',

    'dbname'   => 'cycloo',   //nom de la base

    'user'     => 'cycloo_user',   // nom de l'utilisateur
  
    'password' => 'secret',   //mot de passe 

);

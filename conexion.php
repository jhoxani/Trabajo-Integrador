<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=proyecto;port=3306';
    $db_user='root';
    $db_pass= '';
    $opt= [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''];

    try{
        $db = new PDO($dsn, $db_user, $db_pass, $opt);
    }

    catch(PDOException $PDOException){
        echo $exception->getMessage();
    }
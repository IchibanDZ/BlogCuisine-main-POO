<?php

function dbconnect()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=blog_cuisine', 'root', '');
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


<?php

// model.php
function open_database_connection()
{
    $connection = new PDO("mysql:host=localhost;dbname=blog_db", 'blog_db', 'blog_db');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connection;
}

function close_database_connection(PDO &$connection)
{
    $connection = null;
}

function get_all_contact() {
    $connection = open_database_connection();
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exécuter la requête
    $result = $connection->query('SELECT id, name, forname FROM contact');
    $contacts = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $contacts[] = $row;
    }

    // Fermer la connexion
    close_database_connection($connection);
    return $contacts;
}

function get_contact_by_id(int $id) {
    $connection = open_database_connection();    
    $stmt = $connection->prepare('SELECT * FROM contact WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    close_database_connection($connection);
    return $contact;
}
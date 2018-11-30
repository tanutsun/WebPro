<?php

try {
    $db = new PDO('mysql:host=' . DB_HOST . '; dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

    $db->exec("SET CHARACTER SET utf8");
    $db->exec("SET NAMES utf8");
    $db->exec("SET character_set_results=utf8");
    $db->exec("SET character_set_client=utf8");
    $db->exec("SET character_set_connection=utf8");

} catch (PDOException $e) {
    $this->error = $e->getMessage();
}

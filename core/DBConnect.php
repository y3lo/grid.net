<?php

try {
    $db = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
}
catch(PDOException $e) {
    $db_error  = $e->getMessage();
}
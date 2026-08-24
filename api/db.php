<?php
    header("Content-Type: application/json");

    $connection = mysqli_connect('localhost', 'root', '', 'jwl');

    if(!$connection){
        echo json_encode([
            'error'=>'true',
            'error_message'=>'An error occured while connnecting to the database'
        ]);
        
        return;
    }
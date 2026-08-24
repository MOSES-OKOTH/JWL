<?php
    header("Content-Type: application/json");


    include "../db.php";


    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['subject']) && isset($_POST['message']) && (isset($_POST['email']) || isset($_POST['phone']))){
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $timestamp = date('YmdHis');

        $sql = "INSERT INTO messages (first_name, last_name, phone_number, email, subject, message_body) VALUES ('{$first_name}', '{$last_name}', '{$phone}', '{$email}', '{$subject}', '{$message}');";


        $result = mysqli_query($connection, $sql);

        if($result){
            echo json_encode([
                'error' => false,
                'error_message' => '',
                'response' => 'Message sent successfully.'
            ]);
        } else{
            echo json_encode([
                'error' => true,
                'error_message' => 'An error occured while processing your request. Please try again later.'
            ]);
        }
    } else{
        echo json_encode([
            'error' => true,
            'error_message' => 'Invalid parameters to process your request',
        ]);
    }
?>
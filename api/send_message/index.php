<?php
    include "../db.php";

    $raw = file_get_contents("php://input");

    $raw = json_decode($raw, true);

    if(isset($raw["firstName"]) && isset($raw["lastName"]) && isset($raw["phone"]) && isset($raw["email"]) && isset($raw["subject"]) && isset($raw["message"])){
        $firstName = $raw["firstName"];
        $lastName = $raw["lastName"];
        $phone = $raw["phone"];
        $email = $raw["email"];
        $subject = $raw["subject"];
        $message = $raw["message"];

        $sql = "INSERT INTO messages (first_name,last_name,phone_number,email,subject,message_body) VALUES ('{$firstName}','{$lastName}','{$phone}','{$email}','{$subject}','{$message}');";

        $result = mysqli_query($connection, $sql);

        if($result){
            echo json_encode([
                "error"=>false,
                "response"=>"Message sent successfully!"
            ]);

            mysqli_close($connection);

            return;
        } else{
            echo json_encode([
                "error"=>true,
                "error_message"=>"An internal error occured and we could not submit your message. Please try again later"
            ]);

            return;
        }

    } else{
        echo json_encode([
            "error" => true,
            "error_message" => "Invalid parameters to process your request. Please try again"
        ]);
    }
?>
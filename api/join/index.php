<?php
    include "../db.php";

    if($_SERVER['REQUEST_METHOD'] !== 'POST'){
        http_response_code(403);

        echo json_encode([
            'error' => true,
            'error_message' => 'Invalid request method'
        ]);

        return;
    }

    $rawData = file_get_contents('php://input');

    if(!empty($rawData)){
        $data = json_decode($rawData, true);

        if(isset($data['firstName']) && isset($data['lastName']) && isset($data['phoneNumber']) && isset($data['program']) && isset($data['county'])){
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $phoneNumber = $data['phoneNumber'];
            $email = $data['email'];
            $program = $data['program'];
            $county = $data['county'];

            $sql = "INSERT INTO joinees (first_name, last_name, phone_number, email, program, county) VALUES ('{$firstName}','{$lastName}','{$phoneNumber}','{$email}','{$program}','{$county}')";

            $result = mysqli_query($connection, $sql);

            if($result){
                echo json_encode([
                    'error' => false,
                    'response' => 'Thanks for your interest in joining us!'
                ]);

                return;
            } else{
                echo json_encode([
                    'error' => true,
                    'error_message' => 'An error occured! Please try again later'
                ]);

                return;
            }

        } else{
            echo json_encode([
                'error' => true,
                'error_message' => 'Invalid/incomplete parameters to process your request'
            ]);

            return;
        }
    } else{
        echo json_encode([
            'error' => true,
            'error_message' => 'Empty request body'
        ]);

        return;
    }

?>
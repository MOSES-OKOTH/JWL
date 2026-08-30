<?php
    include "../constants.php";
    include "../auth.php";

    if($_SERVER['REQUEST_METHOD'] !== 'GET'){
        http_response_code(405);

        echo json_encode([
            "error" => true,
            "error_message" => "Invalid request method!"
        ]);

        return;
    }


    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $header = json_encode([
            "Content-Type" => "application/json",
            "Authorization" => "Bearer ".$accessToken
        ]);

        $payload = json_encode([
            "Password" => PASSWORD,
            "BusinessShortCode" => PAYBILL_NUMBER,
            "Timestamp" => TIMESTAMP,
            "CheckoutRequestID" => $id
        ]);

        $ch = curl_init(STK_QUERY_URL);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Bearer ".$accessToken
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        $data = json_decode($response, true);

        if(isset($data['ResponseCode'])){
            if($data['ResponseCode'] == 0){
                if(isset($data['ResultCode']) & $data['ResultCode'] == 0){
                    echo json_encode([
                        "error" => false,
                        "response" => "Payment received successfully. Thanks!"
                    ]);

                    return;
                } else{
                    echo json_encode([
                        "error" => true,
                        "error_message" => "Transaction incomplete.Please try again"
                    ]);

                    return;
                }
            } else{
                echo json_encode([
                    "error" => true,
                    "error_message" => "An error occured while processing your request. Please try again"
                ]);

                return;
            }
        } else{
            echo json_encode([
                "error" => true,
                "error_message" => "An error occured. Please try again"
            ]);

            return;
        }
    } else{
        echo json_encode([
            "error" => true,
            "error_message" => "Invalid parameters to complete your request",
        ]);

        return;
    }
?>
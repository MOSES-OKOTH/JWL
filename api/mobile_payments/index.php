<?php
    include "./auth.php";
    include "./constants.php";

    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        echo json_encode([
            "error" => true,
            "error_message" => "Invalid request method!"
        ]);

        return;
    }

    $rawData = file_get_contents("php://input");

    if(!empty($rawData)){
        $data = json_decode($rawData, true);

        if(!isset($data['phoneNumber']) || !isset($data['amount']) || !isset($data['accountNumber'])) {
            http_response_code(400);

            echo json_encode([
                "error" => true,
                "error_message" => "All required parameters not set! Please try again",
            ]);

            return;
        }

        $phone = $data['phoneNumber'];
        $amount = $data['amount'];
        $account = $data['accountNumber'];

        $payload = json_encode([
            "Password" => PASSWORD,
            "BusinessShortCode" => PAYBILL_NUMBER,
            "Timestamp" => TIMESTAMP,
            "Amount" => $amount,
            "PartyA" => $phone,
            "PartyB" => PAYBILL_NUMBER,
            "TransactionType" => "CustomerPayBillOnline",
            "PhoneNumber" => $phone,
            "TransactionDesc" => "Payment to JWL",
            "AccountReference" => $account,
            "CallBackURL" => STK_CALLBACK_URL
        ]);

        $ch = curl_init(STK_PUSH_URL);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
            "Authorization: Bearer ".$accessToken
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        $httpRes = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($httpRes == 200){
            $responseData = json_decode($response, true);

            if($responseData['ResponseCode'] == 0){
                $requestID = $responseData['CheckoutRequestID'];

                echo json_encode([
                    "error" => false,
                    "response" => $requestID
                ]);

                return;
            } else{
                http_response_code(500);

                echo json_encode([
                    "error" => true,
                    "error_message" => $responseData
                ]);

                return;
            }
        } else{
            http_response_code(400);
            
            echo json_encode(array(
                "error" => true,
                "error_message" => "Failed to initiate STK Push. HTTP Code: ".$httpRes,
                "response" => $responseData
            ));

            return;
        }
    } else {
        echo json_encode([
            "error" => true,
            "error_message" => "Empty request! Please try again"
        ]);

        return;
    }
?>
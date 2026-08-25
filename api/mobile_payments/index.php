<?php
    // Including the authorization file for access token
    include "./auth.php";
    include "./constants.php";

    // Setting up the headers
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');
    header('Content-Type: application/json');


    // Making sure the request method is POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);

        echo json_encode([
            'error' => true,
            'message' => 'Method Not Allowed. Please use POST method.'
        ]);

        exit;
    }

    $rawData = file_get_contents('php://input');
    
    if(!empty($rawData)){
        $data = json_decode($rawData, true);

        // Ensuring all the needed fields are set
        if(!isset($data['phoneNumber']) || !isset($data['amount']) || !isset($data['accountNumber'])){
            http_response_code(400);

            echo json_encode(array(
                "error" => true,
                "message" => "Invalid data. Please provide a valid request body."
            ));

            exit;
        } else{
            $phoneNumber = $data['phoneNumber'];
            $amount = $data['amount'];
            $accountNumber = $data['accountNumber'];

            // Making sure the provided amount is valid
            if(!is_numeric($amount) && $amount < 0){
                http_response_code(400);
                
                echo json_encode(array(
                    "error" => true,
                    "message" => "Invalid amount. Please provide a valid amount."
                ));

                exit;
            }

            // Making sure the provided phone number is valid
            if(!preg_match('/^\+?254[0-9]{9}$/', $phoneNumber)){
                http_response_code(400);
                
                echo json_encode(array(
                    "error" => true,
                    "message" => "Invalid phone number. Please provide a valid phone number."
                ));

                exit;
            }

            // echo json_encode(array(
            //     "phone" => $phoneNumber,
            //     "ammount" => $amount,
            //     "account" => $accountNumber
            // ));
            
            $stkPushCurl = curl_init();

            curl_setopt_array($stkPushCurl, array(
                CURLOPT_URL => STK_PUSH_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode(array(
                    "BusinessShortCode" => PAYBILL_NUMBER,
                    "Password" => PASSWORD,
                    "Timestamp" => TIMESTAMP,
                    "TransactionType" => "CustomerPayBillOnline",
                    "Amount" => $amount,
                    "PartyA" => $phoneNumber,
                    "PartyB" => PAYBILL_NUMBER,
                    "PhoneNumber" => $phoneNumber,
                    "CallBackURL" => "https://example.com/callback",
                    "AccountReference" => $accountNumber,
                    "TransactionDesc" => "Payment for " . $accountNumber
                )),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Authorization: Bearer ' . $accessToken
                )
            ));

            $response = curl_exec($stkPushCurl);
            $httpCode = curl_getinfo($stkPushCurl, CURLINFO_HTTP_CODE);

            // Checking the Response HTTP Codes 
            if ($httpCode === 200) {
                $responseData = json_decode($response, true);
                
                if(isset($responseData['ResponseCode']) && $responseData['ResponseCode'] === '0'){
                    http_response_code(200);
                    
                    echo json_encode(array(
                        "error" => false,
                        "message" => "STK Push request sent successfully.",
                        "response" => $responseData
                    ));
                } else {
                    http_response_code(400);
                    
                    echo json_encode(array(
                        "error" => "1",
                        "message" => "Failed to initiate STK Push. Please try again later.",
                        "response" => $responseData
                    ));
                }
            } else {
                http_response_code($httpCode);
                
                echo json_encode(array(
                    "error" => true,
                    "message" => "Failed to initiate STK Push. HTTP Code: $httpCode",
                ));
            }

        }
    } else{
        http_response_code(400);
        
        echo json_encode(array(    
            "error" => true,
            "message" => "Empty request body. Please provide a valid request body."
        ));

        exit;
    }

    

?>
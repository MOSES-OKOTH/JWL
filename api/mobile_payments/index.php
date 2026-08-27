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

        echo $response;
    } else {
        echo json_encode([
            "error" => true,
            "error_message" => "Empty request! Please try again"
        ]);

        return;
    }
?>
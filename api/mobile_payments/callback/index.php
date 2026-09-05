<?php
    /* Database File */
    include "../../db.php";

    header("Content-Type: application/json");

    $rawMpesaResponse = file_get_contents("php://input");

    $mpesaResponse = json_decode($rawMpesaResponse);

    $merchantRequestId = $mpesaResponse->Body->stkCallback->MerchantRequestID;
    $checkoutRequestId = $mpesaResponse->Body->stkCallback->CheckoutRequestID;
    $resultCode = $mpesaResponse->Body->stkCallback->ResultCode;
    $resultDesc = $mpesaResponse->Body->stkCallback->ResultDesc;
    $amount = $mpesaResponse->Body->stkCallback->CallbackMetadata->Item[0]->Value;
    $transactionId = $mpesaResponse->Body->stkCallback->CallbackMetadata->Item[1]->Value;
    $phoneNumber = $mpesaResponse->Body->stkCallback->CallbackMetadata->Item[4]->Value;
    $firstName = $lastName = 'N/A';
    $timestamp = date("YmdHis");

    if($resultCode == 0){
        $sql = "INSERT INTO transactions (transactionId, phoneNumber, amount, timestamp, referenceNumber) VALUES ('$transactionId', '$phoneNumber', '$amount', $timestamp, '$checkoutRequestId')";

        $res = mysqli_query($connection, $sql);

        if($res){
            $parkingSql = "UPDATE parking SET transactionId = '$transactionId' WHERE transactionId = '$checkoutRequestId'";

            $parkingRes = mysqli_query($connection, $parkingSql);

            if(!$parkingRes){
                die("Error: " . $connection->error);
            }
        } else{
            die("Error: " . $connection->error);
        }
    }


?>
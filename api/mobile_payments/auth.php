<?php
    // Include the needed variables
    include __DIR__.'/constants.php';

    $authHeader = base64_encode(CONSUMER_KEY . ':' . CONSUMER_SECRET);

    $authCurl = curl_init(AUTH_URL);

    curl_setopt($authCurl, CURLOPT_HTTPHEADER, ['Authorization: Basic '.$authHeader]);

    curl_setopt($authCurl, CURLOPT_RETURNTRANSFER, 1);

    $accessToken = curl_exec($authCurl);

    if (curl_errno($authCurl)) {
        // Returning a server error response
        http_response_code(500);

        curl_close($authCurl);

        echo json_encode([
            'error' => '1',
            'message' => "Failed to authenticate with Safaricom API: " . curl_error($authCurl)
        ]);
        
        exit;
    } else{
        // Returning OK Status
        http_response_code(200);

        $accessToken = json_decode($accessToken);

        $accessToken = $accessToken->access_token;
        
        curl_close($authCurl);

        // echo $accessToken;
    }
?>
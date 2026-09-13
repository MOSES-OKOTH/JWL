<?php
    // Consumer Key and Consumer Secret - From Safaricom Developer Portal
    define('CONSUMER_KEY', 'IO5as0YBVp1I7Ft1wTGSuao1qe4rVlje45I1lGxzcnAtp4io');
    define('CONSUMER_SECRET', '5WHiWGIQ3qV6ogkWwxkfDsvVMoUuZidGlJj7tDPr6GwgwDkaGFExpxpgJSfemfEj');



    // Authorization URL
    define('AUTH_URL', 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');

    // QR Code URL
    define('QR_CODE_URL', 'https://sandbox.safaricom.co.ke/mpesa/qr/v1/generate');

    // STK Push URL
    define('STK_PUSH_URL', 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');

    // STK Query URL
    define('STK_QUERY_URL', 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query');

    // STK Callback URL
    define('STK_CALLBACK_URL', 'https://jwlkenya.hstn.me/api/mobile_payments/callback/');

    // Passkey
    define('PASSKEY', 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919');

    // Paybill Number
    define('PAYBILL_NUMBER', '174379');

    // Timestamp
    date_default_timezone_set('Africa/Nairobi');
    define('TIMESTAMP', date('YmdHis'));

    // Password
    define('PASSWORD', base64_encode(PAYBILL_NUMBER . PASSKEY . TIMESTAMP));

    // Passkey
    define('PASSKEY', 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919');
?>
<?php

// اطلاعات درگاه پرداخت
$merchant_id = 'YOUR_MERCHANT_ID';
$amount = 10000; // به تومان
$callback_url = 'YOUR_CALLBACK_URL';

// ایجاد درخواست پرداخت
$data = array(
    'amount' => $amount,
    'merchant_id' => $merchant_id,
    'callback_url' => $callback_url,
);

$curl = curl_init('https://api.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer YOUR_API_KEY',
));

$response = curl_exec($curl);
curl_close($curl);

$result = json_decode($response, true);

// بررسی خطا
if ($result['status'] != 100) {
    echo 'خطا در ایجاد درخواست پرداخت: ' . $result['message'];
    exit;
}

// ارجاع به درگاه پرداخت
$authority = $result['data']['authority'];
header('Location: https://www.zarinpal.com/pg/StartPayment/' . $authority);

?>

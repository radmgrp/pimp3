
<?php
/*
Template Name:pay

*/
 
$apikey = '0c9589-818682-9c70cb-a99b81-d7d898'; 


global $wpdb;

$hash = $_POST['hash'];

$data = [
'platform_id' => (int) $_POST['platform_id'], // ID платформы
'payment_id' => (int) $_POST['payment_id'], // ID валюты
'order_id' => (int) $_POST['order_id'], // Payment ID Вашей платформы
'amount' => $_POST['amount'], // сумма транзакции
'txhash' => $_POST['txhash'], // Хэш или идентификатор транзакции. ID транзакции можно найти в истории транзакций PassimPay в вашем аккаунте.
'address_from' => $_POST['address_from'], // адрес отправителя
'address_to' => $_POST['address_to'], // адрес получателя
'fee' => $_POST['fee'], // комиссия сети
];

if (isset($_POST['confirmations']))
{
$data['confirmations'] = $_POST['confirmations']; // количество подтверждений сети (Bitcoin, Litecoin, Dogecoin, Bitcoin Cash)
}

if (isset($_POST['tag']))
{
$data['tag'] = $_POST['tag']; // For Ripple XRP
}

$payload = http_build_query($data);

if (!isset($hash) || hash_hmac('sha256', $payload, $apikey) != $hash)
{
return false;
}



$result = $wpdb->get_results( "SELECT * FROM wp_passimpay_orders WHERE order_id =".$data["order_id"], OBJECT  );
$result=json_decode(json_encode($result), true);

if($data['amount']*1>0 && $result[0]["status"]!='payed'){
  
   
 $rate=1;   
  

    $url = 'https://api.passimpay.io/currencies';
$payload = http_build_query(['platform_id' => $platform_id ]);
$hash = hash_hmac('sha256', $payload, $apikey);
$platform_id = $data["platform_id"];
$data2 = [
'platform_id' => $platform_id,
'hash' => $hash,
];

$post_data = http_build_query($data2);

$curl = curl_init();
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
$result = curl_exec($curl);
curl_close( $curl );

$result = json_decode($result, true);

// Варианты ответов
// В случае успеха
if (isset($result['result']) && $result['result'] == 1)
{
$payments = $result['list'];
foreach($payments as $val){
    if($val['id']==$data['payment_id']){
$rate=$val["rate_usd"];
       
    }
}
}
// В случае ошибки
else
{
$error = $result['message']; // Текст ошибки
}
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

 $results = $wpdb->get_results( "SELECT * FROM wp_woo_wallet_transactions WHERE user_id =1", OBJECT  );

$results=json_decode(json_encode($results), true);
$pp=$data['amount']*$rate;
$amount=$results[0]["amount"]*1+$pp;
$balance=$results[0]["balance"]*1+$pp;
$wpdb->get_results( "INSERT into wp_woo_wallet_transactions WHERE user_id = 1", OBJECT  );
$wpdb->update( 'wp_woo_wallet_transactions', [ 'amount' => $amount, 'balance' => $balance ],
  ['user_id' => 1] );
$wpdb->update( 'wp_passimpay_orders', [ 'status' => 'payed'],
  ['order_id' => $data["order_id"]] );

  $wpdb->update( 'wp_passimpay_orders', [ 'cash' => json_encode($data)],
  ['order_id' => $data["order_id"]] ); 
}
   ?> 

<?php
//get_footer();
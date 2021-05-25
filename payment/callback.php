<?php

     require_once('WebToPay.php');
      
     try{
         $response = WebToPay::checkResponse($_GET, [
             'projectid' => 203325,
             'sign_password' => '40a8e50752d27a50d1aed5747991505f',
             'currency' => 'EUR',
             'amount' => $price * 100,
             'orderid' => 0,
             'log' => 'callback.txt',
         ]);
      
         if ($response['test'] !== '0') {
             //throw new Exception('Testing, real payment was not made');
         }
      
         if ($response['type'] !== 'macro') {
             throw new Exception('Only macro payment callbacks are accepted');
         }

      
         $orderId = $response['orderid'];
         $amount = $response['amount'];
         $currency = $response['currency'];
         //@todo: check, if order with $orderId is already approved (callback can be repeated several times)
         //@todo: check, if order amount and currency matches $amount and $currency
         //@todo: confirm order

         echo 'OK';
     } catch(Exception $e) {
         echo get_class($e) . ':' . $e->getMessage();
     }
    

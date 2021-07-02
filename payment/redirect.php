<?php
     $price = $_POST['payment'];
	 $orderNumber = $_POST['phone-number'];
	 
     require_once('WebToPay.php');
      
     function get_self_url() {
         $s = substr(strtolower($_SERVER['SERVER_PROTOCOL']), 0, strpos($_SERVER['SERVER_PROTOCOL'], '/'));
      
         if (count($_SERVER['HTTPS']) > 0) {
             $s .= ($_SERVER['HTTPS'] === 'on') ? 's' : '';
         }
      
         $s .= '://' . $_SERVER['HTTP_HOST'];
      
         if (count($_SERVER['SERVER_PORT']) > 0 && $_SERVER['SERVER_PORT'] !== '80') {
             $s .= ':' . $_SERVER['SERVER_PORT'];
         }
      
         $s .= dirname($_SERVER['SCRIPT_NAME']);
      
         return $s;
     }
      
     try {
         $self_url = get_self_url();
      
         $request = WebToPay::redirectToPayment([
             'projectid' => 203325,
             'sign_password' => '40a8e50752d27a50d1aed5747991505f',
             'orderid' => 0,
             'amount' => $price * 100,
             'currency' => 'EUR',
             'country' => 'LV',
             'accepturl' => $self_url . '/accept.php',
             'cancelurl' => $self_url . '/cancel.php',
             'callbackurl' => $self_url . '/callback.php',
             'test' => 1,
         ]);
     } catch (WebToPayException $e) {
         // handle exception
     }
	 

	// sending mail
	//$price = $_POST['payment'];
	//$area = $_POST['final-area'];
	//$term = $_POST['final-term'];
	//$size = $_POST['final-size'];
    //$phone = $_POST['phone-number'];
    //$transport = $_POST['needed-transport'];
        
	
	//$message = "<b>Price to pay:</b> ".$price."<br/><b>Selected Area:</b> ".$area."<br/><b>Selected Term:</b> ".$term."<br/><b>Selected Size:</b> ".$size."<br/><b>Transport:</b> ".$transport"<br/><b>Phone number:</b> ".$phone""; 

	//$to = 'info@noliktava1.lv';  // Кому письмо
	//$topic = "New lead"; // Тема письма
	
	//$headers  = 'MIME-Version: 1.0' . "\r\n";
	//$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	//$headers .= 'From: Noliktava1 Form <info@noliktava1.lv>' . "\r\n";
	// функция, которая отправляет наше письмо. 
	//mail($to, $topic, $message, $headers);
	
	
?>
	
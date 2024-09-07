<?php

require('./instamojo.php');
const API_KEY ="test_f04165b4bdb0362fd4f7552d7be";
const AUTH_TOKEN = "test_ef6877f9a037ee6b3b3687413a6";
 

if(isset($_POST['payit']) )
{
    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://test.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
            'purpose'  => '800 by '. $_POST['roonum'],
            "amount" => $_POST['amt'],
            "roonum" => $_POST['roonum'],
            "mname" => $_POST['mname'],  
            "redirect_url" => "http://localhost/apartment_maintenance/updated_payment.php?roomNo=". $_POST['roonum']
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
}
?>

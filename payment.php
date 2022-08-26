<?php
require './vendor/autoload.php';
if(isset($_POST['stripeToken'])){
     \Stripe\Stripe::setApiKey('sk_test_51LaCWfSDChRBwbLfWBwRH8HZJ9rL4Cg6IIIclAri0CoxhlsPNszoiseqJYPoGjDVTXR6w7GhetNFUZPtWRgdmz6800wty03TEY');

$token=$_POST['stripeToken'];
$email=$_POST['stripeEmail'];
$charge=\Stripe\Charge::create(array(
    'amount'=>999,
    'currency'=>'usd',
    'description'=>'stripe Charge',
    'source'=>$token
));
print_r($charge);
}
?>
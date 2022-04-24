<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

$firstName     = $_POST["firstName"]; 
$lastName      = $_POST["lastName"]; 
$email         = $_POST["email"];
// $streetAddress = $_POST["streetAddress"];
// $city          = $_POST["city"];
// $state         = $_POST["state"];
// $postalCode    = $_POST["postalCode"];
$cart          = $_POST["cart"]; // might need to do id, name qty individually

$confirmationId = uniqid();

$confirmationInfo = [ 
    'confirmationId' => $confirmationId, 
    'firstName'      => $firstName,
    'lastName'       => $lastName,
    'email'          => $email,
    'cart'           => $cart
]; 

echo json_encode($confirmationInfo);
?>
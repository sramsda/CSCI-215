<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    //TODO
    $content = file_get_contents("php://input");
    $order = json_decode($content, true);

    $tacoTotal    = $order[tacoCount]    * $order[tacoPrice]; 
    $burritoTotal = $order[burritoCount] * $order[burritoPrice];
    $nachoTotal   = $order[nachoCount]   * $order[nachoPrice]; 

    $subTotal   = $tacoTotal + $burritoTotal + $nachoTotal; 
    $taxTotal   = $subTotal  * $order[taxAmount]; 
    $grandTotal = $subTotal  + $taxTotal; 

    $orderInfo = [
        'tacoTotal'      => $tacoTotal,
        'burritoTotal'   => $burritoTotal,
        'nachoTotal'     => $nachoTotal, 
        'subTotal'       => $subTotal,
        'taxTotal'       => $taxTotal,
        'grandTotal'     => $grandTotal,
        'tacoCount'      => $order[tacoCount],
        'burritoCount'   => $order[burritoCount],
        'nachoCount'     => $order[nachoCount],

    ]; 

    echo json_encode($orderInfo); 
    
?>
<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    //TODO
    $menuInfo = [ 'taco' => 1.19, 'burrito' => 2.49, 'nacho'=> 4.89];

    echo json_encode($menuInfo)


?>
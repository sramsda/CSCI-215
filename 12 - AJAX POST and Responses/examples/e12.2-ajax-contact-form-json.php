<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');


    $content = file_get_contents("php://input");
    $user = json_decode($content, true);


    $id = uniqid();
    $formInfo = [ 'id' => $id, 'name' => $user[name], 'email' => $user[email], 'comments' => $user[comments]];

    echo json_encode($formInfo);

?>
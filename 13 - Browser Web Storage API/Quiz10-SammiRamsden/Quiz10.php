<?php
    // for CORS
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
    header('Content-Type: application/json');

    $productsArray = [
        [
            'id' => '123',
            'name' => 'apple',
            'unitCost' => 1.20,
            'quantity' => 5
        ],

        [
            'id' => '234',
            'name' => 'banana',
            'unitCost' => 1.80,
            'quantity' => 5
        ],

        [
            'id' => '345',
            'name' => 'pear',
            'unitCost' => 2.05,
            'quantity' => 5
        ],

        [
            'id' => '456',
            'name' => 'strawberry',
            'unitCost' => 4.99,
            'quantity' => 5
        ],

        [
            'id' => '567',
            'name' => 'cherry',
            'unitCost' => 5.02,
            'quantity' => 5
        ]

    ];

    echo json_encode($productsArray); 
    
?>
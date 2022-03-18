<?php
/*create an array of stock info with attributes: 
- symbol
- name
- last price
- change (points)
- change (percent) 

Program should: recieve stock symbol and return related company name 
*/ 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

// array of company information
$companiesArray = [
    [
        "symbol" => "DIDI",
        "name" => "DiDi Global Inc.", 
        "lastPrice" => 4.0200,
        "pointsChange" => 1.4600,
        "percentChange" => 53.03
    ],

    [
        "symbol" => "STNE",
        "name" => "StoneCo Ltd", 
        "lastPrice" => 13.56,
        "pointsChange" => 3.95,
        "percentChange" => 41.12
    ],

    [
        "symbol" => "NVDA",
        "name" => "NVIDIA Corporation", 
        "lastPrice" => 260.46,
        "pointsChange" => 12.80,
        "percentChange" => 5.17
    ],

    [
        "symbol" => "GME",
        "name" => "GameStop Corp.", 
        "lastPrice" => 90.24,
        "pointsChange" => 2.54,
        "percentChange" => 2.90
    ],

    [
        "symbol" => "TSLA",
        "name" => "Tesla, Inc.", 
        "lastPrice" => 897.95,
        "pointsChange" => 26.35,
        "percentChange" => 3.02
    ],
]; 

// recieve stock symbol and return corresponding company name 
$companyName = ''; 

if($_GET['symbol']){
    $currentSymbol = $_GET['symbol'];
    foreach($companiesArray as $company){
        if($currentSymbol === $company['symbol']){
            $companyName = $company['name'];
            break;
        }
    }
}else{
    $companyName = 'Please provide a valid symbol';
}

echo $companyName; 
?>
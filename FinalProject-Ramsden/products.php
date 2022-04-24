<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Content-Type: application/json');

$instruments = [
    [
        "id" => "683fadb5-692d-4533-9f99-afcbbba5abbd",
        "name" => "Flute",
        "description" => "A wind instrument made from a tube with holes along it that are stopped by the fingers or keys, held vertically or horizontally so that the player's breath strikes a narrow edge.",
        "unitPrice" => 105.99,
        "image" => "flute.jpg",
        "averageStars" => "4.8 out of 5 stars"
    ],

    [
        "id" => "2c54f240-0659-4075-9540-5bb415d828eb",
        "name" => "Clarinet",
        "description" => "A single-reed woodwind instrument having a cylindrical tube with a moderately flared bell and a usual range from D below middle C upward for 3¹/₂ octaves",
        "unitPrice" => 150.48,
        "image" => "clarinet.jpg",
        "averageStars" => "3.5 out of 5 stars"
    ],

    [
        "id" => "b8cd4b4d-5792-44e1-bae4-2973ca891530",
        "name" => "Oboe",
        "description" => "A double-reed woodwind instrument having a conical tube, a brilliant penetrating tone, and a usual range from B flat below middle C upward for over 2¹/₂ octaves.",
        "unitPrice" => 129.65,
        "image" => "oboe.jpg",
        "averageStars" => "4.0 out of 5 stars"
    ],

    [
        "id" => "3c7c0b2c-573e-4577-bcf7-a15f0991fcc9",
        "name" => "Bassoon",
        "description" => "A double-reed woodwind instrument having a long U-shaped conical tube connected to the mouthpiece by a thin metal tube and a usual range two octaves lower than that of the oboe",
        "unitPrice" => 535.30,
        "image" => "bassoon.jpg",
        "averageStars" => "4.9 out of 5 stars"
    ],

    [
        "id" => "e6733287-3eae-4855-b1ea-a16aaee904d9",
        "name" => "Saxophone",
        "description" => "One of a group of single-reed woodwind instruments usually ranging from soprano to bass and characterized by a conical metal tube and finger keys",
        "unitPrice" => 235.44,
        "image" => "sax.jpg",
        "averageStars" => "3.2 out of 5 stars"
    ],

    [
        "id" => "b2e3fec9-a089-429a-942c-39f35fa69a14",
        "name" => "Trumpet",
        "description" => "A wind instrument consisting of a conical or cylindrical usually metal tube, a cup-shaped mouthpiece, and a flared bell. Specifically, a valved brass instrument having a cylindrical tube with two turns and a usual range from F sharp below middle C upward for 2¹/₂ octave",
        "unitPrice" => 175.99,
        "image" => "trumpet.jpg",
        "averageStars" => "2.9 out of 5 stars"
    ],

    [
        "id" => "ab22d94d-238e-421e-8f15-5ba2e65ab76a",
        "name" => "Trombone",
        "description" => "A brass instrument consisting of a long cylindrical metal tube with two turns and having a movable slide or valves for varying the tone and a usual range one octave lower than that of the trumpet",
        "unitPrice" => 399.99,
        "image" => "trombone.jpg",
        "averageStars" => "3.75 out of 5 stars"
    ],

    [
        "id" => "938ee029-cff1-4a75-bf86-8f630f4e8201",
        "name" => "French horn",
        "description" => "A circular valved brass instrument having a conical bore, a funnel-shaped mouthpiece, and a usual range from B below the bass staff upward for more than three octaves",
        "unitPrice" => 444.44,
        "image" => "frenchHorn.jpg",
        "averageStars" => "2.2 out of 5 stars"
    ],

    [
        "id" => "e5b30f04-9c27-4246-a4aa-d0970e662238",
        "name" => "Keyboard",
        "description" => "A bank of keys on a musical instrument (such as a piano) that usually consists of seven white and five raised black keys to the octave",
        "unitPrice" => 765.75,
        "image" => "keyboard.jpg",
        "averageStars" => "5.0 out of 5 stars"
    ],

    [
        "id" => "f3b2aff6-18a1-4eb6-8087-122146a245cb",
        "name" => "Guitar",
        "description" => "A flat-bodied stringed instrument with a long fretted neck and usually six strings played with a pick or with the fingers",
        "unitPrice" => 649.99,
        "image" => "guitar.jpg",
        "averageStars" => "4.25 out of 5 stars"
    ]
];

$results = [];
if ($_GET['id']) {
    $id = $_GET['id'];
    foreach ($instruments as $item) {
        if ($id === $item['id']) {
            $results = $item;
        }
    }
} else {
    $results = $instruments;
}

echo json_encode($results);
?>
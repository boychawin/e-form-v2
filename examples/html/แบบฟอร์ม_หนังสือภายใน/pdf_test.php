<?php

// Example data
$data = [
    [
        "page" => 0,
        "data" => [
            [
                "id" => "paragraph-id-68",
                "type" => "paragraph",
                "message" => "dfdfdfdf"
            ]
        ]
    ],
    [
        "page" => 1,
        "data" => [
            [
                "id" => "paragraph-id-526",
                "type" => "paragraph",
                "message" => "dfdfdfdf"
            ]
        ]
    ]
];

// Loop through pages and display messages
// $data = json_decode($json_data, true);

$page_count = count($data);

for ($i = 0; $i < $page_count; $i++) {
    // Do something with each page
    echo "Page " . ($i + 1) . ":\n";
    foreach ($data[$i]['data'] as $item) {
        echo $item['message'] . "\n";
    }
}

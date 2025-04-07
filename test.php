<?php
require 'TuyaCloud.php';

$options = [
    'baseUrl' => 'https://openapi.tuyaus.com', // URL API of Tuya
    'accessKey' => 'xxxxxxxxxxxxxxxxxxxxxxx', // access key of your app
    'secretKey' => 'xxxxxxxxxxxxxxxxxxxxxxx', // access secret of your app
];

$tuya = new TuyaCloud($options);
try {
    // to get the device status
    // you must pass the device_id
    $device1 = $tuya->getDevice('xxxxxxxxxxxxxxxxxxxxxxx');
    $device2 = $tuya->getDevice('xxxxxxxxxxxxxxxxxxxxxxx');
    echo json_encode($device2);


    // $commands = [
    //     "commands" => [
    //         [
    //             "code" => "switch_1",
    //             "value" => true
    //         ]
    //     ]
    // ];
    // $response = $tuya->setDevice('eb969c65f92be3effeztqf', $commands);
    // echo json_encode($response);
   
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

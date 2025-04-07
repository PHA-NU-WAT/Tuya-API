<?php
require 'TuyaCloud.php';

$options = [
    'baseUrl' => 'https://openapi.tuyaus.com', // URL API of Tuya
    'accessKey' => '73vh9uqn88dtxpv5k5fd', // access key of your app
    'secretKey' => '9b8e31453ccc4d1c9a748be0565cfb2c', // access secret of your app
];

$tuya = new TuyaCloud($options);
try {
    // to get the device status
    // you must pass the device_id
    $device1 = $tuya->getDevice('eb969c65f92be3effeztqf');
    $device2 = $tuya->getDevice('eb9f56ee79d69db886yszk');
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

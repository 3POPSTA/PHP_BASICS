<?php
    $url = "https://jsonplaceholder.typicode.com/users";
    
    //get data from url
    // $resouce = curl_init($url);
    // curl_setopt($resouce,CURLOPT_RETURNTRANSFER,true);
    // $reult = curl_exec($resouce);
    // echo $reult;

    //get status code
    // $info = curl_getinfo($resouce);
    // echo "<pre>";
    // var_dump($info);
    // echo "</pre>";
    // curl_close($resouce);

    //post request with curl
    $user = [
        "name" => "John Doe",
        "username" => "John",
        "email" => "john@example.com"
    ];
    $resouce = curl_init();
    curl_setopt_array($resouce,[
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ["content-type:application/json"],
        CURLOPT_POSTFIELDS => json_encode($user),

    ]);
    $result = curl_exec($resouce);
    // curl_close($resouce);
    echo $result;
?>
<?php
function getLocation()
{
    // $ip = request()->ip();
    $ip = '116.206.40.86'; // Surabaya
    // $ip = '202.80.212.141'; // Jakarta
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', "https://ipapi.co/$ip/json", ['verify' => false]);

    $location = json_decode($response->getBody());
    return $location->city;
}

?>

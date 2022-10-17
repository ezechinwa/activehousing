<?php

namespace activehousing;

header('Content-type: application/json');


class User {


public function get_single_user($id){
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://reqres.in/api/users/$id",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

}

public   function get_paginated_user_list($page_no=1){

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://reqres.in/api/users?page=$page_no",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;

}


}

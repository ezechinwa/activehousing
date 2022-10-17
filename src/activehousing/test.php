<?php

//require_once __DIR__ . '/vendor/autoload.php';
use activehousing\User;
require "index.php";

$data = new User();
$data->get_paginated_user_list(1);
//$data->get_paginated_user_list(1);
//


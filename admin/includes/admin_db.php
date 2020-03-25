<?php

# DB variables

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = 'root';
$db['db_name'] = 'cms';

# Make all DB variables into constants

foreach ($db as $key => $value) {
	define(strtoupper($key), $value);
}

# Connect To DB

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection) {
	//echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, magnam rerum. Esse veritatis nulla, deserunt alias repellendus accusantium neque? Accusamus similique, aut nam laudantium sint harum corporis debitis tempore dignissimos.";
}
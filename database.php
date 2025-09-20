<?php

$conn = mysqli_connect("localhost", "shoyadbek", "shoyadbek123!", "php_crud");

if ($conn) {

    // INSERT so‘rovi to‘g‘ri sintaksisda
    $conn->query("INSERT INTO users (id,name, mobile_number, created_at) VALUES (2,'shoyadbek', '901487981', NOW())");

    // SELECT so‘rovi
    $users = $conn->query("SELECT * FROM users")->fetch_all();

    var_dump($users);

} else {  
    echo "Ulanishda xato";
}

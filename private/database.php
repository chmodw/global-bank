<?php

require_once "db_credentials.php";

function db_connect()
{
    $conn =  mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $conn;
}

function db_disconnect($conn)
{
    if (isset($conn)) {
        mysqli_close($conn);
    }
}

function confirm_db_connect()
{
    if (mysqli_connect_errno()) {
        exit("Database connection failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
    }
}

function confirm_result_set($res)
{
    if (!$res) {
        exit("Database query Failed.");
    }
}

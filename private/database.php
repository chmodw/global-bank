<?php

require_once "db_credentials.php";

function db_connect()
{
    return mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
}

function db_disconnect($conn)
{
    if (isset($conn)) {
        mysqli_close($conn);
    }
}

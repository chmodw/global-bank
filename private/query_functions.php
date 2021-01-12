<?php

function find_all_subjects()
{
    global $db;

    $sql = "SELECT * FROM subjects ORDER BY position ASC";
    return mysqli_query($db, $sql);
}

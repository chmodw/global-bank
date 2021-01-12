<?php

function find_all_subjects()
{
    global $db;

    $sql = "SELECT * FROM subjects ORDER BY position ASC";
    $res = mysqli_query($db, $sql);
    confirm_result_set($res);
    return $res;
}

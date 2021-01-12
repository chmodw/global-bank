<?php

function find_all_subjects()
{
    global $db;

    $sql = "SELECT * FROM subjects ORDER BY position ASC";
    $res = mysqli_query($db, $sql);
    confirm_result_set($res);
    return $res;
}

function find_subject_by_id($id)
{
    global $db;

    $sql = "SELECT * FROM subjects WHERE id='" . $id . "'";
    $res = mysqli_query($db, $sql);
    confirm_result_set($res);
    $subject = mysqli_fetch_assoc($res);
    mysqli_free_result($res);
    // returning assoc array;
    return $subject;
}

function find_all_pages()
{
    global $db;

    $sql = "SELECT * FROM pages ORDER BY position ASC";
    $res = mysqli_query($db, $sql);
    confirm_result_set($res);
    return $res;
}

function insert_subject($menu_name, $position, $visible)
{
    global $db;

    $sql = "INSERT INTO subjects (menu_name, position, visible) VALUES (";
    $sql .= "'" . $menu_name . "',";
    $sql .= "'" . $position . "',";
    $sql .= "'" . $visible . "')";

    $result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        //Failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

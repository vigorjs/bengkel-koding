<?php
require 'db.php';
function createTodo($request)
{
    global $con;
    $todo = mysqli_real_escape_string($con, $request['todo']);
    $tgl_awal = mysqli_real_escape_string($con, $request['tgl_awal']);
    $tgl_akhir = mysqli_real_escape_string($con, $request['tgl_akhir']);

    $query = "INSERT INTO `todo`(`todo`,`tgl_awal`,`tgl_akhir`) VALUES('$todo','$tgl_awal','$tgl_akhir')";
    $execute_query = mysqli_query($con, $query);
    if ($execute_query) {
        header('location:todo.php');
    }
}

function getTodo()
{
    global $con;
    $query = "SELECT * FROM `todo`";
    $execute_query = mysqli_query($con, $query);
    return $execute_query;
}

function changeStatus($id, $status)
{
    global $con;
    if ($status === 'undone') {
        $query = "UPDATE `todo` SET `status`= 0 WHERE `id` = $id";
        $execute_query = mysqli_query($con, $query);
        if ($execute_query) {
            header('location: todo.php');
        }
    }
    if ($status === 'done') {
        $query = "UPDATE `todo` SET `status`= 1 WHERE `id` = $id";
        $execute_query = mysqli_query($con, $query);
        if ($execute_query) {
            header('location: todo.php');
        }
    }
}

function delete($id)
{
    global $con;
    $query = "DELETE FROM `todo` WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query);

    if ($execute_query) {
        header('location: todo.php');
    }
}

function getSingleTodo($id)
{
    global $con;
    $query = "SELECT * FROM `todo` WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query);
    $get_todo = mysqli_fetch_assoc($execute_query);
    return $get_todo;
}
function updateTodo($request)
{
    global $con;
    $id = mysqli_real_escape_string($con, $request['id']);
    $todo = mysqli_real_escape_string($con, $request['todo']);
    $tgl_awal = mysqli_real_escape_string($con, $request['tgl_awal']);
    $tgl_akhir = mysqli_real_escape_string($con, $request['tgl_akhir']);

    $query = "UPDATE `todo` SET `todo` = '$todo', `tgl_awal` = '$tgl_awal', `tgl_akhir` = '$tgl_akhir' WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query);
    if ($execute_query) {
        header('location: todo.php');
    }
}

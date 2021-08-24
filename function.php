<?php

$path = "demo.json";

function saveData($arr)
{
    global $path;
    $dataJson = json_encode($arr);
    file_put_contents($path, $dataJson);
}

function loadData()
{
    $data = file_get_contents($GLOBALS["path"]);
    $result = json_decode($data, true);
    return $result;
}

function addUser($data)
{
    $users = loadData();
    array_push($users, $data);
    saveData($users);
}

function deleteUser($index)
{
    $users = loadData();
    array_splice($users, $index, 1);
    saveData($users);
}

function getUserById($index)
{
    $users = loadData();
    return $users[$index];
}

function updateUser($index, $user)
{
    $users = loadData();
    $users[$index] = $user;
    saveData($users);
}

function login($username, $password){
    $users = loadData();
    foreach ($users as $user){
        if ($username == $user['name'] && $password == $user['password']){
            return true;
        }
    } 
    return false;
}
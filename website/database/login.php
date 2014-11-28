<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 25/11/2014
 * Time: 17:37
 */
include_once('database/connection.php'); // connects to the database


function authUser ($username, $password){
    global $db;
    $command = "SELECT id,username from USERS WHERE username= $username;
    $stmt = $db->query("$command");
    $stmt->execute();
}
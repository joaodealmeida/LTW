<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 25/11/2014
 * Time: 17:42
 */
include_once('database/login.php');

login($_GET['username'],$_GET['password']);

?>
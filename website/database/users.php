<?php

  function userExists($username, $password) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));  

    if( count($stmt->fetchAll()) > 0 )
		return true;
	
	return false;
  }


  function createUser($username, $password) {
    global $db;
	
	echo $username . ' ' . $password;
	
	//Check if user exits already on database
    $stmt = $db->prepare('SELECT * FROM users WHERE username = ?');
	$stmt->execute(array($username));
	if(count($stmt->fetchAll()) > 0 ){
		return false;
	}
	
	
    $stmt = $db->prepare('INSERT INTO users (username,password) VALUES (?, ?)');
    $stmt->execute(array($username, sha1($password)));  

    return true;
  }
  
  function getUserID($username) {
	global $db;
	
	$stmt = $db->prepare("SELECT * FROM users WHERE username = {$username} ");
	
	$userID = $stmt->fetch()['id'];
	
	return $userID;
  
  }
  
  
?>
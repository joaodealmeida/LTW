<?php

  function userExists($username, $password) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute(array($username, sha1($password)));  

    if( count($stmt->fetch()) > 0 )
		return true;
	
	return false;
  }


  function createUser($username, $password) {
    global $db;
	
	//Check if user exits already on database
    $stmt = $db->prepare("SELECT * FROM users WHERE username = {$username} ");
	if($stmt->fetch() == false)
		return false;
		
		
    $stmt = $db->prepare('INSERT INTO users (username,password) VALUES (?, ?)');
    $stmt->execute(array($user, sha1($password)));  

    return $stmt->fetch() !== false;
  }
  
  function getUserID($username) {
	global $db;
	
	$stmt = $db->prepare("SELECT * FROM users WHERE username = {$username} ");
	
	$userID = $stmt->fetch()['id'];
	
	return $userID;
  
  }
  
  
?>
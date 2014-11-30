<?php
  include_once(database/users.php)
  
  function getAllPools() {
	global $db;
	
	$stmt = $db->prepare('SELECT * FROM pools');
    $stmt->execute();  

    return $stmt->fetchAll();
  }
  
  function getPoolItem($id) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM pools WHERE id = ?');
    $stmt->execute(array($id));  

    return $stmt->fetch();
  }
  
  function createPool($question,$answers){
	global $db;
	

	
	//Create Poll
	$stmt = $db->prepare('INSERT INTO pools VALUES (?, ?, ?))';
	$stmt->execute(array($user_id, $question

	
	$stmt = db->prepare('SELECT last_insert_rowid() FROM pools ');
	$last_id_pool = $stmt->fetch();
	
	
	//Create answers and associating to the pool
	for($i = 0; $i < count($answers); $i++){
		$stmt = $db->prepare("INSERT INTO answers  VALUES ({$answers[$i]}, {$last_id_pool})");
	}
	
	
	
	

  
?>
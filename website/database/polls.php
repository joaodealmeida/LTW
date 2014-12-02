<?php
  
  function getAllPolls() {
	global $db;
	
	$stmt = $db->prepare('SELECT * FROM poll');
    $stmt->execute();  

    return $stmt->fetchAll();
  }
  
  function getPollItem($id) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM poll WHERE id = ?');
    $stmt->execute(array($id));  

    return $stmt->fetch();
  }
  
  function createPoll($question,$answers){
	global $db;
	

	
	//Create Poll
	$stmt = $db->prepare('INSERT INTO poll (user_id,question) VALUES (?, ?)');
	$stmt->execute(array($user_id, $question));

	
	$stmt = $db->prepare('SELECT last_insert_rowid() FROM poll ');
	$last_id_pool = $stmt->fetch();
	
	
	//Create answers and associating to the pool
	for($i = 0; $i < count($answers); $i++){
		$stmt = $db->prepare('INSERT INTO answers (text, poll_id) VALUES (?, ?)');
		$stmt->execute(array($answers[$i], $last_id_pool));
	}
	
   }
  
  function checkIfUserVotedAlready($poll_id, $user_id){
	$stmt = $db->prepare('SELECT * FROM choices WHERE poll_id = ? AND user_id = ?');
    $stmt->execute(array($poll_id, $user_id));  

    return count($stmt->fetch());
  }
  
  function voteOnPoll($poll_id, $user_id, $answer_id){
  
	if(checkIfUserVotedAlready($poll_id,$user_id) == 0)
		return false;
	
	$stmt = $db->prepare('INSERT INTO choice VALUES (?,?,?)');	
	$stmt->execute(array($poll_id, $user_id, $answer_id));
	
	return true;
  }
  
  function getPollAnswers($poll_id){
	$stmt = $db->prepare('SELECT answer_id from choices WHERE poll_id = ?');
	$stmt->execute(array($poll_id));
	
	$answers_id = $stmt->fetch();
	
	$answers_text = array();
	
	for($i = 0; i < count(answers_id); $i++){
		$stmt = $db->prepare('SELECT text from answers WHERE id = ? ');
		$stmt->execute(array($answers[i]));
		$answers_text[] = $stmt->fetch();
		}
	
	return $answers_text;
  }
	
	

  
?>
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
  
  function createPoll($question, $user_id, $answers, $image){
	global $db;
	

	//Make sure any ony of the question/answer is empty
	if(empty($question))
		return false;
		
	if(empty($image))
		$image = 'css/img/noimg.png';
	
	for($i = 0; $i < count($answers); $i++){
		if(empty($answers[$i]))
		 return false;
	}
	
	//Create Poll
	$stmt = $db->prepare('INSERT INTO poll (user_id,question, image) VALUES (?, ?, ?)');
	$stmt->execute(array($user_id, $question, $image));

	$last_id_pool = $db->lastInsertId();
	
	echo $last_id_poll;
	
	
	//Create answers and associating to the pool
	for($i = 0; $i < count($answers); $i++){
		$stmt = $db->prepare('INSERT INTO answers (text, poll_id) VALUES (?, ?)');
		$stmt->execute(array($answers[$i], $last_id_pool));
	}
	
	return true;
	
   }
  
  function checkIfUserVotedAlready($poll_id, $user_id){
	global $db;
	
	$stmt = $db->prepare('SELECT * FROM choice WHERE poll_id = ? AND user_id = ?');
    $stmt->execute(array($poll_id, $user_id));  

    if(count($stmt->fetchAll()) > 0)
		return true;
		
	return false;
  }
  
  function voteOnPoll($poll_id, $user_id, $answer_id){
	global $db;
	
	$stmt = $db->prepare('INSERT INTO choice VALUES (?,?,?)');	
	$stmt->execute(array($poll_id, $user_id, $answer_id));
	
	return true;
  }
  
  function getPollAnswers($poll_id){
	global $db;
	
	$stmt = $db->prepare('SELECT * from answers WHERE poll_id = ?');
	
	$stmt->execute(array($poll_id));
	
	$answers = $stmt->fetchAll();
	
	//$answers_text = array();
	
	/*for($i = 0; i < count(answers_id); $i++){
		$stmt = $db->prepare('SELECT * from answers WHERE id = ? ');
		$stmt->execute(array($answers[i]));
		$answers = $stmt->fetchAll();
		}
	*/
	
	return $answers;
  }
	
  function getChoiceCount($poll_id,$answer_id){
	global $db;
	
	$stmt = $db->prepare('SELECT * FROM choice WHERE poll_id = ? and answer_id = ?');
	$stmt->execute(array($poll_id,$answer_id)); 
	
	return count($stmt->fetchAll());
	
  }
	

  
?>
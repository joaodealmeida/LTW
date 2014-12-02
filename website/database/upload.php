<?php
  global $db;
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->prepare("INSERT INTO images VALUES(?)");
  $stmt->execute(array($_POST['title']));

  $id = $db->lastInsertId();

  $originalFileName = "images/originals/$id.jpg";
  $smallFileName = "images/thumbs_small/$id.jpg";
  $mediumFileName = "images/thumbs_medium/$id.jpg";

  move_uploaded_file($_FILES['image']['tmp_name'], $originalFileName);
  
  $original = imagecreatefromjpeg($originalFileName);
  
  $width = imagesx($original);
  $height = imagesy($original);
  $square = min($width, $height);

  // Create small square thumbnail
  $small = imagecreatetruecolor(200, 200); 
  imagecopyresized($small, $original, 0, 0, ($width>$square)?($width-$square)/2:0, ($height>$square)?($height-$square)/2:0, 200, 200, $square, $square);
  imagejpeg($small, $smallFileName);

  $mediumwidth = $width;
  $mediumheight = $height;

  if ($mediumwidth > 400) {
    $mediumwidth = 400;
    $mediumheight = $mediumheight * ( $mediumwidth / $width );
  }

  $medium = imagecreatetruecolor($mediumwidth, $mediumheight); 
  imagecopyresized($medium, $original, 0, 0, 0, 0, $mediumwidth, $mediumheight, $width, $height);
  imagejpeg($medium, $mediumFileName);

  header("Location: index.php");  
?>

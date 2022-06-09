<?php
include __DIR__ . '/db.php';



$array = ['success'=> true,
'response' => []];

//$array = $encodedJson;
$genre = $_GET['genre'];
$author = $_GET['author'];


if($genre == '' && $author == ''){
  $array['response'] = $encodedJson['response'];
}else if($genre != '' && $author == ''){

  foreach ($encodedJson['response'] as $value) {

    if($value['genre'] == $genre){
      $array['response'][] = $value; 
    }
    
  }
 
}
else if($genre == '' && $author != ''){

  foreach ($encodedJson['response'] as $value) {

    if($value['author'] == $author){
      $array['response'][] = $value; 
    }
    
  }
 
}else if($genre != '' && $author != ''){

  foreach ($encodedJson['response'] as $value) {

    if($value['author'] == $author && $value['genre'] == $genre){
      $array['response'][] = $value; 
    }
    
  }
 
}



header('Content-Type: application/json');

echo json_encode($array);

?>
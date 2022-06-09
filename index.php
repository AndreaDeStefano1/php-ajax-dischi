<?php

include __DIR__ . '/data-api/db.php';
 
foreach ($encodedJson['response'] as  $disco) {
  
  //var_dump($value);
 
    echo "<div><img src='$disco[poster]'> <br>" ;
    echo $disco['title'] . '<br>';
    echo $disco['author'] . '<br>';
    echo $disco['genre'] . '<br>';
    echo $disco['year'] . '</div>' ;
 
  
  
}
?>

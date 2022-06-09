<?php

include __DIR__ . '/./api.php';
 
foreach ($encodedJson as $key => $value) {
  if($key == 'response'){
  //var_dump($value);
  foreach ($value as $disco) {
    echo "<div><img src='$disco[poster]'> <br>" ;
    echo $disco['title'] . '<br>';
    echo $disco['author'] . '<br>';
    echo $disco['genre'] . '<br>';
    echo $disco['year'] . '</div>' ;
  }
  }
  
}
?>

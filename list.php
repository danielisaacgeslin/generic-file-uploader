<?php
  $files = scandir('./');

  echo '<h2>File list </h2>';
  echo '<ul>';
  for($i=0; $i<count($files); $i++){
    if(count($files[$i]) and $files[$i] != '.' and $files[$i] != '..' and strpos(strtolower($files[$i]), 'xml') !== false){
      echo '<li>',$files[$i],'</li>';
    }
  }
  echo '</ul>';
 ?>

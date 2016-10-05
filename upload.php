<?php

$response = json_encode(array('status' => 'ERROR', 'payload' => null));

function upload(){
  define('PATH', $_SERVER['DOCUMENT_ROOT'].'/generic-file-uploader/');
  define('FILE_NAME', basename($_FILES['fileToUpload']['name']));
  define('FILE_TEMP_NAME',$_FILES['fileToUpload']['tmp_name']);
  define('TARGET', PATH.FILE_NAME);

  return move_uploaded_file(FILE_TEMP_NAME, TARGET);
}

if(count($_FILES) and upload()){
  $response = json_encode(array('status' => 'OK', 'payload' => FILE_NAME));
}

echo $response;

?>

<?php

 if (isset($_GET['api'])){
    
    $api_url = $_GET['api'];
    echo $api_url;

 };

  function get_datos(string $URL){

      $result =  file_get_contents($URL);
      $repuesta = json_decode($result,true);    
   
      return $repuesta;

  };

?>
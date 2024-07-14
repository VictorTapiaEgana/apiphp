<?php
    
    require('functions/get_personajes.php');
    
    $arrayPersonajes = get_datos('https://dragonball-api.com/api/characters?limit=58');

    extract($arrayPersonajes);               
    
    require('card.php')

?>
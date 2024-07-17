<?php

    require ('../pages/components/head.php');
    require ('../pages/components/get_for_id_style.php');
    
    $logoImg = "../images/logo.png";

    require ('../pages/components/navBar.php');

    if(isset($_POST['detalle'])){
        
        require ('get_personajes.php');

        $url_detalle = $_POST['detalle'];      

        $result = get_datos ($url_detalle);       

        extract($result);                 
        
        require ('../pages/components/character_detail.php');
    
    }

    require('../pages/components/footer.php');    

?>
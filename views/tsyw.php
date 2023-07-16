<?php

if(isset($_GET['page'])) {
    
    $page = $_GET['page'];
    switch($page) {
        case 'home' :
            include 'home.php';
            break;

            case 'daftar' :
                include 'daftar.php';
                break;  

        case 'data' :
            include 'tampil_data.php';
            break;  
    }

}else{
    // include 'home.php';
    // include 'daftar.php';
    include 'tampil_data.php';
    
}


?>
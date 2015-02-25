<?php
    require_once(__DIR__ . "/../model/config.php");
    
    unset($_SESSION["authenitcated"]);
    
    session_destroy();
    
    header("Location: " . $path . "index.php");
    

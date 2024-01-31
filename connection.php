<?php      
    $host = "mysql.itu.edu.tr";  
    $user = "db74453";  
    $password = 'twp92NHLDf';  
    $db_name = "db74453";  

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error()); 

    }  
    ?>  


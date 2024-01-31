<?php
    include 'connection.php';
    $username = test_input($username);
    $password = test_input($password);

    $sql_query = "SELECT COUNT(*) As cntUser From Users WHERE user='".$username."' AND password='".$password."'";
    $result = mysqli_query($c,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];
    echo $count;

      
    if($count>0){  
        setcookie("user",$username);
        header("Location: main.php");  
        exit();
    }  
    else{  
        header('Location: index.php');
    }     
    echo $username.$password;
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>
<?php
            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "0000";
            $dbName = "demo";
            mysql_connect($host, $dbUsername, $password);
            mysql_select_db($dbName);
            
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $sql = "select * from users where email='".$email."' AND password='".$password."'
        limit 1";

        $result = mysql_query($sql);

        if(my_sql_rows($result)==1) {
            echo "You have been Succesfully singed in!";
            exit();
        }
        else {
            echo "failed :/";
            exit();
        }
    }


    

?>
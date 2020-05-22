<?php


            $host = "localhost";
            $dbUsername = "root";
            $dbPassword = "0000";
            $dbName = "demo";


            
        $con = mysqli_connect($host,$dbUsername,$dbPassword,$dbName);
        $email=$_POST['email'];
        $password=$_POST['password'];
        
       /* if(isset($_POST['email'])){
            
            $email=$_POST['email'];
            $password=$_POST['password'];
            
            $sql="select * from loginform where user='".$email."'AND Pass='".$password."' limit 1";
            
            $result=mysql_query($sql);
            
            if(mysql_num_rows($result)==1){
                echo " You Have Successfully Logged in";
                exit();
            }
            else{
                echo " You Have Entered Incorrect Password";
                exit();
            }
                
        }
        // // //

          /*  $con = mysqli_connect($host, $dbUsername, $password $dbName);
          */
            // Check connection
            if ( mysqli_connect_errno() ) {
            // If there is an error with the connection, stop the script and display the error.
                exit('Failed to connect to MySQL: ' . mysqli_connect_error());
            }
            
            
            if ( !isset($_POST['email'], $_POST['password']) ) {
                // Could not get the data that should have been sent.
                exit('Please fill both the username and password fields!');
            }
            
            $result = mysqli_query($con, "select * from users where email='".$email."' AND password='".$password."'
            limit 1");
            
            $row = mysqli_fetch_array($result);
            
            if($row["email"]==$email && $row["password"]==$password)
            header( "refresh:3;url=/ProjectTest/welcome.html" );
            else
            header( "refresh:0;url=/ProjectTest/failed.html" );
/*

            
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

*/
    

?>
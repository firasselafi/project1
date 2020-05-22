<?php
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $state = filter_input(INPUT_POST, 'state');
    if (!empty($email) || !empty($password) || !empty($state)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "0000";
        $dbName = "demo";
        // create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

            if(mysqli_connect_error()) {
                        die('Connect Error('. mysqli_connect_error().')'
                        . mysqli_connect_error());
            }
                    else {
                        $sql = "INSERT INTO users (email, password, state) values('$email', '$password' ,'$state')";
                        // prepare statemnt
                                if($conn->query($sql)) {
                                    
                                    $conn->close();
                                    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Please wait , we are redirecting you</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>';
                                  header( "refresh:3;url=/ProjectTest/login.html" );

                                    
                                }
                        
                        }

                }
            
    

    
?>
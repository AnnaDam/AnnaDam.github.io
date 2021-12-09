<?php
        $servername = "fdb34.awardspace.net"; 
        $password = "1mqnabzvxc";
        $username = "3885246_sqlbase";
        $db = "3885246_sqlbase";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $db);
        
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        } else {
              echo "pieslēgts";  
        }
 ?>
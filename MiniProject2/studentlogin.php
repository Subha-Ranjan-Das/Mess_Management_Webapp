<?php
   include("config.php");
   $username = $_POST['user'];  
   $password = $_POST['pass'];  
     
       //to prevent from mysqli injection  
       $username = stripcslashes($username);  
       $password = stripcslashes($password);  
       $username = mysqli_real_escape_string($db, $username);  
       $password = mysqli_real_escape_string($db, $password);  
     
       $sql = "select * from register where username = '$username' and pass = '$password'";  
       $result = mysqli_query($db, $sql);  
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       $count = mysqli_num_rows($result);  
     if(!empty($username) && !empty($password) ){    
       if($count == 1){  
         header('Location: mess.html');;  
       }  
       else{  
         echo '<script type ="text/JavaScript">';  
          echo 'if(confirm("invalid username and password ")){';
         echo 'window.location.href = "studentlogin.html"';
         echo '}';
         // echo 'alert("you have already paid!! ")';  
          echo '</script>'; 
       } }
       else{
        echo '<script type ="text/JavaScript">';  
        echo 'if(confirm("wait!! empty field detected !!! please fill ")){';
       echo 'window.location.href = "studentlogin.html"';
       echo '}';
       // echo 'alert("you have already paid!! ")';  
        echo '</script>'; 

       }    
?>  
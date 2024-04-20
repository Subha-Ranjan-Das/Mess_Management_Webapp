<?php
   include("config.php");
   $user = $_POST['userid'];  
    
     
       //to prevent from mysqli injection  
       $username = stripcslashes($username);  
       
       $username = mysqli_real_escape_string($db, $username);  
        
     
       $sql = "INSERT INTO messpay(user) VALUES('$user') ";  
        
    if(!empty($user)) {   
       if ($db->query($sql) === TRUE) {  
         header('Location: payment.html');;  
       }  
       else{  
         echo '<script type ="text/JavaScript">';  
         echo 'if(confirm("you have already paid!! ")){';
        echo 'window.location.href = "selectplan.html"';
        echo '}';
        // echo 'alert("you have already paid!! ")';  
         echo '</script>'; 
       }
      }
      else{
        
          echo '<script type ="text/JavaScript">';  
          echo 'if(confirm("wait!! empty field detected !!! please fill ")){';
         echo 'window.location.href = "selectplan.html"';
         echo '}';
         // echo 'alert("you have already paid!! ")';  
          echo '</script>'; 
      }     
?>  
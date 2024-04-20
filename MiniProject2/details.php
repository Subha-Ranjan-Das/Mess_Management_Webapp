<html>
    <head>
       <style>
           body{
               background:wheat;
           }
           table{
               height:400px;
               width:400px;
               text-align:justify;
                font-size:20px;
                padding-left:50px;
                background:#0005;
                margin-left:40em;
                border-radius:50px;
                color:aqua;
              
           }
           .user{
               color: black;
           }
           .btn{
               border-radius:20px;
               background:blue;
               width:150px;
               height:30px;
               color:whitesmoke;
           }

       </style>
</head>
<body>
<?php
include('config.php');
$sql = "SELECT * FROM register";
if ($result=mysqli_query($db,$sql)) {
    $rowcount=mysqli_num_rows($result);
   
}
?>

     

<table  >
        
         
         <th> 
        <form action = "fetch.php" method = "post">
        <span style="padding-left:100px;">DETAILS</span><br> <br>
        number of registration till now: <span><?php echo $rowcount ; ?></span><br><br><br><br><br>
           student detail: <input class="name" name = "user" id = "user"  type="text" placeholder="User ID"><br><br>
           
           <input type = "submit" class="btn" value = " Submit "/>
        </form>
    </th>
        
    </table>
  
     
</body>
</html>
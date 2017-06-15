<div>
<?php
    if(loggedin()){
   ?>     
    <a href="index_view.php">Home</a>
    <a href="messages.php">Messages</a>
    <a href="logout.php">logout</a>
 <?php       
    }else{    
?>
    <a href="index_view.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
<?php
       } 
?>
</div>
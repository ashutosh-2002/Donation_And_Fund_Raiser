<?php 
    if ($_POST['submit'] == 'Logout')
    {
        session_start(); 
        session_unset(); 
        session_destroy(); 

        header("location: admin.php"); 
        exit(); 
    }
?>

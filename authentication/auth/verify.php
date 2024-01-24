<?php
    session_start();
    if($_SESSION['name']==true){
        header("location:../class/index.php");
    }else{
        echo "<script>alert('login first')</script>";
    }
?>
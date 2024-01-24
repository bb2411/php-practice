<?php
    include './dbconn.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['password']);
    $query="insert into users values('$name','$email','$pass')";
    if($conn->query($query)==true){
        echo "you are now registerd,now you can <a href='index.html'>login</a>";
    }else{
        echo "there was some error:".$conn->error;
    }
?>
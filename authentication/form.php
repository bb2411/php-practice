<?php
   include 'tokengenrator_auth.php'; 
    include './dbconn.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=md5($_POST['pass']);
    $query="select * from users where email='$email'";
    $results=$conn->query($query);
    if($results->num_rows>0){
        $row=$results->fetch_assoc();
        if($row['pass']==$pass){
            setcookie("name",$data['name']);
            $data=array("name"=>$name,"email"=>$email,"stat"=>true);
            setcookie("token",encrypttoken($data),time() + 1800);
            header("Location:class/index.php");
        }else{
            echo "password was incorrect <a href='index.html'>try again</a>";
        }
    }else{
        echo "no user found <a href='index.html'>try again</a>";
    }
?>
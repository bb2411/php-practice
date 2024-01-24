<?php
    include 'tokengenrator_auth.php';
    if(isset($_COOKIE['token'])){
        $decryptedData = decryptData($_COOKIE['token'] );
        $data = json_decode($decryptedData,true);
        if($data['stat']==true){
        }else{
            echo "there is something want wrong please <a href='../index.html'>try again</a><script>
            alert('there is something error');
            window.location='../index.html';
        </script>";
        }
    }else{
        echo "<script>
            alert('you are not logged in');
            window.location='../index.html';
        </script>";
    }
?>
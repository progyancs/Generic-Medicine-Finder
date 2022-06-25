<?php
session_start();
        require 'database.php';
            $uname = $_POST['email'];
            $psw = $_POST['psw'];

            function validate($data){

                $data = trim($data);

                $data = stripslashes($data);

                //$data = htmlspecialchars($data);

                return $data;

            }
            
            $uname = validate($_POST['uname']);
            $psw = validate($_POST['psw']);

            $sql = "SELECT * FROM userdb WHERE email='$uname' AND pass='$psw'";

            $result = mysqli_query($conn, $sql);
            
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)>0){
                $_SESSION['active'] = 1;
                header("Location:dashboard.html");
                exit();
            }
            else{
                echo "<script> 
                    alert('Wrong Username or password entered ! Retry ');
                    window.location = \"login.php\";
                    </script>";
            }
            


function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}            



            mysqli_close($conn);

?>
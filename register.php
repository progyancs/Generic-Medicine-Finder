<?php

    require("database.php");

    $user_name=$_POST['uname'];
    $user_pass=$_POST['pass'];
    $user_mail=$_POST['email'];
    $user_phn = $_POST['number'];
    $user_pass_rep = $_POST['pas-repeat'];
    $query="select * from userdb where email = '$user_mail'";
    $obj=mysqli_query($conn,$query);
    if(mysqli_num_rows($obj)>0){
        echo "
        <script>
        alert(\"Mail id already registered ! \");
        window.location = \"signup.html\";
        </script>
        ";
    }
    else{

        if($user_pass==$user_pass_rep){

            $sql = "insert into userdb(name,email,phno,pass) values('$user_name','$user_mail','$user_phn','$user_pass')";
            if(mysqli_query($conn,$sql))
            {
                echo "
                <script>
                alert(\"Registration Seccesfull ! \");
                window.location = \"login.php\";
                </script>
                ";
            }
            else
            {
                echo "
                <script>
                alert(\"Registration Failed ! Retry\");
                window.location = \"login.php\";
                </script>
                ";
            }
        }
        else{
            echo "
            <script>
            alert(\"Please eneter same password in both fields ! \");
            window.location = \"signup.html\";
            </script>
            ";
        }
    }
    
    

    mysqli_close($conn);

?>
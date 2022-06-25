<?php
    session_start();
    include 'database.php'; 
    $medi = $_POST['item'];

    function validate($data){

        $data = trim($data);

        $data = stripslashes($data);

        return $data;

    }

    $medi = validate($_POST['item']);

    $sql = "SELECT * FROM med WHERE medName like '%$medi%' ";

    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_assoc($result);

   
   // echo "$compo";
    if(mysqli_num_rows($result)>0){
        $_SESSION["compo"]=$row["compo"];
        $_SESSION["manufac"]=$row["manufac"];
        $_SESSION["intro"]=$row["Intro"];
        $_SESSION["medName"]=$row["medName"];
        header("Location:infopage.php");
        exit();
    }

    else{
        echo "<script> 
        alert('This medicine not present at this moment');
        window.location = \"index.php\";
        </script>";
    }

    mysqli_close($conn);
 
?>
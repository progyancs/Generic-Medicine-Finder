<?php

    require("database.php");

    $med_name=$_POST['mname'];
    $med_man=$_POST['manufacturer'];
    $med_comp=$_POST['comp'];
    $med_intro= $_POST['introd'];

    $sql = "insert into med(medName,manufac,compo,Intro) values('$med_name','$med_man','$med_comp','$med_intro')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script> 
        alert('New Medicine Record created successfully');
        window.location = \"dashboard.html\";
        </script>";
    }
    else
    {
        echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

?>
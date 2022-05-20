<?php
    require ("connect.php");
    if(isset($_POST['Username'])){

        // SQL NEED EDITING, the ID updated is being hard coded rn mend after login session is created
        $sql = "UPDATE usersignup SET Fname = '".$_POST['Fname']."', Lname = '".$_POST['Lname']."', Username = '".$_POST['Username']."', Gender = '".$_POST['Gender']."', Nationality = '".$_POST['Nationality']."',DoB = '".$_POST['dateob']."',ContactNumber = '".$_POST['Contact_Number']."',Email = '".$_POST['Email']."',Password = '".$_POST['Password']."' WHERE ID = 1";
        $con -> query($sql);
        header("Location: editprofile.php");
    }
?>
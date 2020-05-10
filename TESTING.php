<?php
require "PDObject.php";



$selected = mysql_select_db("accounts", $conn);

/*Checking to see if the username exists already or not*/
/*Not sure if this should be changed into 'email' instead of 'user'*/
if(isset($_POST['user']){
    $user = $_POST['user'];

    $query = mysql_query("SELECT * FROM accounts WHERE Username='$email'");
    if(mysql_num_rows($query) > 0 ) { //check if there is already an entry for that username
        echo "This account already exists!";
    }else{ /*If this email username does exist, it will be added to the database */
        mysql_query("INSERT INTO accounts (email) VALUES ('$email', '$password', '$fname', '$lname', '$phone', '$birthday', '$gender', '$college', '$major')");
        header("location:login.php"); /*This will take the user back to the homepage after they make an account */
    }
}
mysql_close();
?>

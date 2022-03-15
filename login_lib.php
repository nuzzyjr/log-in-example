<?php

include_once "C:/xampp/htdocs/Projects/GibJohn/libraries/db.php";


function check_login($email,$password){

    
    $conn = get_conn();

    $email_search = "SELECT * FROM students WHERE email = '".$email."'";

    $result = mysqli_query($conn, $email_search);

    //email found in students table
    if (mysqli_num_rows($result) > 0)
    {
        $result = mysqli_query($conn, "SELECT pword FROM students WHERE email = '".$email."'");

        while($row = mysqli_fetch_object($result)){
            $pword = $row->pword;
         }

        if (password_verify($password, $pword ))
        {
            return "student";
        }
        else{
            return "Password Incorrect";
        }
        
    }
    //email not found in students table
    else
    {
        $email_search = "SELECT * FROM teachers WHERE email = '".$email."'";

        $result = mysqli_query($conn, $email_search);
        //email found in teachers table
        if (mysqli_num_rows($result) > 0)
        {
            $result = mysqli_query($conn, "SELECT pword FROM teachers WHERE email = '".$email."'");

            while($row = mysqli_fetch_object($result)){
                $pword = $row->pword;
            }

            if (password_verify($password, $pword ))
            {
                return "teacher";
            }
            else{
                return "Password Incorrect";
            }
            
        }
        //email not found in either table
        else
        {
            return "Email not found!";
        }
    }
}

?>


<?php

   function sign_up($conn, $email, $password, $fname, $sname, $account_type)
   {

       $password = password_hash($password, PASSWORD_BCRYPT);
       $token = md5(rand().time());

       if ($account_type == "student")
       {
            //does email already exist in DB?
            $email_search = "SELECT * FROM students WHERE email = '".$email."'";
            $result = mysqli_query($conn, $email_search);

            //check if email exists
            if (mysqli_num_rows($result) > 0)
            {
                return "Email Taken";
            }
            elseif (mysqli_num_rows($result) == 0)
            {
                $sql = "
                INSERT INTO students(
                email,
                fname,
                sname,
                pword,
                rewardPoints,
                token
                ) VALUES (
                
                '{$email}',
                '{$fname}',
                '{$sname}',
                '{$password}', 
                0,
                '{$token}'
                )
                ";

                //create mysql query 
                $sqlQuery = mysqli_query($conn, $sql);

                if (!$sqlQuery)
                {
                    die ("MySQL query failed!" . mysqli_error($conn));
                    return "Query Failed!";
                }

                return true;
            }

        }
       else
       {
            //does email already exist in DB?
            $email_search = "SELECT * FROM teachers WHERE email = '".$email."'";
            $result = mysqli_query($conn, $email_search);

            //check if email exists
            if (mysqli_num_rows($result) > 0)
            {
                return "Email Taken";
            }
            elseif (mysqli_num_rows($result) == 0)
            {
                $sql = "
                INSERT INTO teachers(
                email,
                fname,
                sname,
                pword,
                token
                ) VALUES (
                
                '{$email}',
                '{$fname}',
                '{$sname}',
                '{$password}', 
                '{$token}'
                )
                ";

                //create mysql query 
                $sqlQuery = mysqli_query($conn, $sql);

                if (!$sqlQuery)
                {
                    die ("MySQL query failed!" . mysqli_error($conn));
                    return "Query Failed!";
                }

                return true;
            }
       }
       
   }
?>
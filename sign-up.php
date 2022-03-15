<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!--Back button-->
    <button style="float:right;margin:15px;" onclick="location = href='index.php'" class="btn btn-danger">Back</button>

    <div style="width:33%; margin:auto;">
    <h1 style="padding-top:20px;">Sign up for an account!</h1>
    <form style="padding-top:10px;" action="sign-up-action.php" method="post">
        <!--Email-->
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" required/> <br/>
        <!--fname-->
        <label for="fname" class="form-label">First name</label>
        <input type="text" name="fname" class="form-control" required/> <br/>
        <!--sname-->
        <label for="sname" class="form-label">Second Name</label>
        <input type="text" name="sname" class="form-control" required/> <br/>
        <!--Password-->
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required /> <br/>
        <!-- Student/Teacher radio-->
        <p>I am a:</p>
        <p>
        Student<input type="radio" value="student" name="account_type" style="margin-left: 10px;" required/>
        Teacher<input type="radio" value="teacher" name="account_type" style="margin-left: 10px;"/>
        </p>
        <!--Already have an account-->
        <a style="font-size:14px;" href="login.php">Already have an account?</a>
        <!--Error-->
        <p style="margin:0px;padding:0px;padding-bottom:10px;color:red" ><?php if (isset($_SESSION['sign_up_err'])) {echo $_SESSION['sign_up_err']; unset($_SESSION['sign_up_err']); }?></p>
        <!--Submit Form-->
        <button type="submit" class="btn btn-primary">Register</button>
    
        

    </form>
    </div>
</body>
</html>
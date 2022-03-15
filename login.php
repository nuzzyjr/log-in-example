
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!--Back button-->
    <button style="float:right; margin:15px;" onclick="location = href='index.php'" class="btn btn-danger">Back</button>    

    <div style="width:33%; margin:auto;">
    <h1 style="padding-top:20px;">Please log in</h1>
    <form style="padding-top:10px;" action="login-action.php" method="post">
        <!--EMAIL-->
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" required/> <br/>
        <!--Password-->
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required/> <br/>
        <!--Remember me-->
        <div style="height:30px; line-height: 30px;">
        <label for="remember_me" class="form-label" style="padding-right: 10px;" >Stay logged in?</label>
        <input  type="checkbox" name="remember_me" value="Yes" />
        </div>
        <!--Forgot Password-->
        <a style="font-size:14px; padding-right:15px;" href="">Forgot your password?</a>
        <!--Don't have an account-->
        <a style="font-size:14px;" href="sign-up.php">Don't have an account?</a>
        <!--Error message-->
        <p style="margin:0px;padding:0px;padding-bottom:10px;color:red" ><?php if (isset($_SESSION['login_err'])){ echo $_SESSION['login_err']; unset($_SESSION['login_err']); }?></p>
        <button type="submit" class="btn btn-primary">Login</button>
        
    </form>
    </div>
</body>
</html>
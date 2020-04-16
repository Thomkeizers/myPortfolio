<?php
session_start();
include "includes/dbcon.php";
include "includes/navigation.html";

//If session is not set we set it now with a value of false.
if(!isset($_SESSION['userloggedin']))
{
    $_SESSION['userloggedin'] = false;
}

$emailErr = $passwordErr = "";
$email = $password = "";

//Form handling.
if(isset($_POST['submit'])) 
{
    if(empty($_POST['inlogemail']))
    {
        $emailErr = "email is required.";
    }
    else 
    {
        $email = $_POST['inlogemail'];
        $_SESSION['inlogemail'] = $email;  
    }

    if(empty($_POST['inlogpassword']))
    {
        $passwordErr = "password is required.";
    }
    else 
    {
        $password = $_POST['inlogpassword'];
        $_SESSION['inlogpassword'] = $password;  
    }  
    
    //If email and password field are not empty we allow a query to database.
    if(!empty($email) && !empty($password))
    {
        $inlogQuery = "SELECT * FROM users WHERE user_email = '$email'";
        $inlogQueryResult = mysqli_query($conn, $inlogQuery);

        //Query results transformed to array and assigned to $row.
        $row = mysqli_fetch_assoc($inlogQueryResult);

        //This is the password checking. We check if the filled in passwords matches the encrypted password in database. If true session evaluates to true.
        if (password_verify($password, $row['user_password'])) {

            $_SESSION['userloggedin'] = true;

            $_SESSION['user'] = $row;

            //Storing the login time in database.
            $sqlDate = "INSERT INTO `sidetails` VALUES ('', ". $row['user_id'].", NOW())";
            mysqli_query($conn, $sqlDate);

            //User is logged in, so he//she gets redirected to index.php
            header("Location: admin.php");
        } 
        else 
        {
            ?>
            <div style="text-align: center; color: white; margin-top: 20px; font-size: 30px;">
            <?php
            echo "Invalid email or password.";
            ?>
            </div>
            <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-body">
<div class="login-container">
<div class="register-top">
        <h1>Login</h1>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="inlog-form text-center">
    <div class="form-group">
            <label for="">email</label><br>
            <input type="text" name="inlogemail" class="form-control" value="<?php if(isset($_SESSION['inlogemail'])){echo $_SESSION['inlogemail'];}?>"><br>
            <span class="error"><?php echo "$emailErr";?></span><br>
        </div>
        <div class="form-group">
            <label for="">password</label><br>
            <input type="password" name="inlogpassword" class="form-control" value="<?php if(isset($_SESSION['inlogpassword'])){echo $_SESSION['inlogpassword'];}?>"><br>
            <span class="error"><?php echo "$passwordErr";?></span><br>
        </div>

        <div class="form-group">
            <button name="submit" class="btn btn-primary sign-up-button">Sign In!</button>
        </div>
    </form>
    <div class="register-bottom">
        No account yet? <a href="register.php">Register Here!</a>
    </div>
</div>
</body>
</html>
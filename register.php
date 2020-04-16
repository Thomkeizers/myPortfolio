<?php
//END VERSION FILE.

//Starting a session and setting the fielderror variables + database insert variables. 
    session_start();
    include "includes/dbcon.php";
    include "includes/navigation.html";


    $firstnameErr = $lastnameErr = $streetnameErr = $housenumberErr = $zipcodeErr_a = $zipcodeErr_b = $citynameErr = $emailErr = $passwordErr = $checkboxErr = "";
    $firstname = $lastname = $streetname = $housenumber = $zipcode_a = $zipcode_b = $cityname = $email = $password = $checkboxTicked = "";

//Field checking. Included error checking and session storing. 
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if(empty($_POST['firstname']))
        {
            $firstnameErr = "Firstname is required.";
        }
        else 
        {
            $firstname = $_POST['firstname'];
            $_SESSION['firstname'] = $firstname;
            
        }

        if(empty($_POST['lastname']))
        {
            $lastnameErr = "Lastname is required.";
        }
        else 
        {
            $lastname = $_POST['lastname'];
            $_SESSION['lastname'] = $lastname;
        }

        if(empty($_POST['streetname']))
        {
            $streetnameErr = "streetname is required.";
        }
        else 
        {
            $streetname = $_POST['streetname'];
            $_SESSION['streetname'] = $streetname;
        }

        if(empty($_POST['housenumber']))
        {
            $housenumberErr = "housenumber is required.";
        }
        else 
        {
            $housenumber = $_POST['housenumber'];
            $_SESSION['housenumber'] = $housenumber;
        }

        if(empty($_POST['zipcode_a']) || empty($_POST['zipcode_b']))
        {
            $zipcodeErr_a = "zipcode is required.";
            $zipcodeErr_b = "zipcode is required.";
        }
        else 
        {
            $zipcode_a = $_POST['zipcode_a'];
            $zipcode_b = $_POST['zipcode_b'];
            $_SESSION['zipcode_a'] = $zipcode_a;
            $_SESSION['zipcode_b'] = $zipcode_b;
        }

        if(empty($_POST['cityname']))
        {
            $citynameErr = "cityname is required.";
        }
        else 
        {
            $cityname = $_POST['cityname'];
            $_SESSION['cityname'] = $cityname;
        }

        if(empty($_POST['email']))
        {
            $emailErr = "email is required.";
        }
        else 
        {
            $email = $_POST['email'];
            $_SESSION['email'] = $email;
        }

        if(empty($_POST['password']))
        {
            $passwordErr = "password is required.";
            
        }
        else 
        {
            $hash_options = ['cost' => 11];
            $password = $_POST['password'];
            $password_hash   = password_hash($password, PASSWORD_BCRYPT, $hash_options);
            $_SESSION['password'] = $password;
        }

        if(!isset($_POST['checkbox']))
        {
            $checkboxErr = "You have to agree to our terms and policy.";
        }
        else
        {
            $_POST['checkbox'] = true;
        }
        
        
        //When all fields are filled correctly the data can be passed to the database. 
        if(!empty($firstname && $lastname && $streetname && $housenumber && $zipcode_a && $zipcode_b && $cityname && $email && $password_hash && (isset($_POST['checkbox']))))
        {
            $userInsertQuery = "INSERT INTO users (user_id, user_firstname, user_lastname, user_streetname, user_housenumber, user_zipcode_a, user_zipcode_b, user_cityname, user_email, user_password) VALUES('','$firstname', '$lastname', '$streetname', '$housenumber', '$zipcode_a', '$zipcode_b', '$cityname', '$email', '$password_hash')";
            $userInsertQueryResult = mysqli_query($conn, $userInsertQuery);

            header("Location: login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="inlog-body">
<div class="register-container mt-5">
    <div class="register-top">
        <h1>Register</h1>
    </div>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="inlog-form text-center">
        <div class="form-group">
            <label for="">Firstname</label><br>
            <input type="text" name="firstname" class="form-control" value="<?php if(isset($_SESSION['firstname'])){echo $_SESSION['firstname'];}?>"><br>
            <span class="error"><?php echo "$firstnameErr";?></span><br>
        </div>
        <div class="form-group">
            <label for="">Lastname</label><br>
            <input type="text" name="lastname" class="form-control" value="<?php if(isset($_SESSION['lastname'])){echo $_SESSION['lastname'];}?>"><br>
            <span class="error"><?php echo "$lastnameErr";?></span><br>
        </div>
        <div class="form-group">
            <label for="">Streetname</label><br>
            <input type="text" name="streetname" class="form-control" value="<?php if(isset($_SESSION['streetname'])){echo $_SESSION['streetname'];}?>"><br>
            <span class="error"><?php echo "$streetnameErr";?></span><br>
        </div>
        <div class="form-group">
            <label for="">Housenumber</label><br>
            <input type="text" name="housenumber" class="form-control" value="<?php if(isset($_SESSION['housenumber'])){echo $_SESSION['housenumber'];}?>"><br>
            <span class="error"><?php echo "$housenumberErr";?></span><br>
        </div>
        <div class="form-group">
            <label for="">Zipcode</label><br>
            <input type="text" name="zipcode_a" class="form-control zipcode-a" value="<?php if(isset($_SESSION['zipcode_a'])){echo $_SESSION['zipcode_a'];}?>"><input type="text" name="zipcode_b" class="form-control zipcode-b" value="<?php if(isset($_SESSION['zipcode_b'])){echo $_SESSION['zipcode_b'];}?>" ><br>
            <span class="error"><?php echo "$zipcodeErr_b";?></span><br>
        </div>
        <div class="form-group">
            <label for="">Cityname</label><br>
            <input type="text" name="cityname" class="form-control" value="<?php if(isset($_SESSION['cityname'])){echo $_SESSION['cityname'];}?>"><br>
            <span class="error"><?php echo "$citynameErr";?></span><br>
        </div>
        <div class="form-group">
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-control" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];}?>"><br>
            <span class="error"><?php echo "$emailErr";?></span><br>
        </div>
        <div class="form-group">
            <label for="">Password</label><br>
            <input type="password" name="password" class="form-control" value="<?php if(isset($_SESSION['password'])){echo $_SESSION['password'];}?>"><br>
            <span class="error"><?php echo "$passwordErr";?></span><br>
        </div>
        <div class="checkbox">
            <input type="checkbox" style="width: 40px; margin-bottom: 20px; text-align: center;" name="checkbox">I hereby agree to terms of service</input><br>
            <span class="error"><?php echo "$checkboxErr";?></span><br>
        </div>

        <div class="form-group">
            <button class="btn btn-primary sign-up-button">Sign Up!</button>
        </div>
        </form>
    <div class="register-bottom ">
        Already have an account? <a href="login.php">Sign in!</a>
    </div>
    </div>
</body>
</html>
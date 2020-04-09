<?php
    session_start();
    include "includes/dbcon.php";

    //Form handling with PHP validation.
    $nameError = "";
    $messageError = "";


    if(isset($_POST['mail']))
    {
        if(isset($_POST['male']))
        {
            $gender = "Male";
        }

        if(isset($_POST['female'])) {
            $gender = "Female";
        }

        $name = $_POST['name'];
        $message = $_POST['message'];


        if(empty($name))
        {
            $nameError = "Fill in name";
        }

        if(empty($message))
        {
            $messageError = "Fill in message";
        }

        if(empty($name) && empty($message))
        {
            $nameError = "Fill in name";
            $messageError = "Fill in message";
        }

        if(!empty($name) && !empty($message))
        {  
            $insertMailSql = "INSERT INTO mail VALUES('', '$gender', '$name', '$message')";
            $insertMailSqlResult = mysqli_query($conn, $insertMailSql);

            if($insertMailSqlResult)
            {
                echo "Your message has been succesfully send!";

            }
        }
        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="contact-body">
<?php 
        include "includes/navigation.html";
    ?>
    <div class="row">
        
            <div class="book">
                <div class="book__form">
                    <form action="" method="post" class="form">
                        <div class="u-margin-bottom-medium">
                            <h2 id="form-title" class="heading-secondary">Don't be a stranger</h2>
                        </div>

                        <div class="form__group">
                            <input name="male" placeholder="male" value="1" type="radio" class="radio">Male</input>
                            <input name="female" placeholder="female" value="2" type="radio" class="radio">Female</input>
                         </div>

                        <label for="" class="error"><?php if(isset($nameError)) { echo $nameError ; } ?></label>

                        <div class="form__group">
                            <input autocomplete="off" id="name" name="name" placeholder="Full Name" type="text" class="form__input">
                            <label for="name" class="form__label">Full name</label>
                         </div>

                         <label for="" class="error"><?php if(isset($nameError)) { echo $messageError ; } ?></label>

                        <div class="form__group">
                            <input autocomplete="off" id="email" name="message" placeholder="Message" type="text" class="form__input">
                            <label for="email" class="form__label">Message</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="mail" class="btn btn--green">Send message &rarr;</button>
                        </div>
                    </form>
                </div>
            </div>           
        
</div>  

        <div class="row">
            <div class="contacts">
                <h2 class="contacts__phone">Phone: 06-42955067</h2>

                
                <div class="iconalign">
                    <div class="iconfb">
                        <a href="https://www.facebook.com/t.keizers"><ion-icon class="iconfb__logo-facebook" name="logo-facebook"></ion-icon></a>
                    </div>
              
                    <div class="iconig">
                    <a href="https://www.instagram.com/thomkeizers/"><ion-icon class="iconig__logo-instagram" name="logo-instagram"></ion-icon></a>
                    </div>
               
                    <div class="icontw">
                    <a href="#"><ion-icon class="icontw__logo-twitter" name="logo-twitter" ></ion-icon></a>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

</body>
</html>
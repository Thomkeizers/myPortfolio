<?php
session_start();
include "includes/navigation.html";

echo "
<script type=\"text/javascript\">
document.getElementById('login').innerHTML = '05 Logout';

</script>
";

if(isset($_POST['create'])) 
{
    header('Location: create.php');
}
if(isset($_POST['update']))
{
    header("Location: update.php");
}
if(isset($_POST['delete']))
{
    header("Location: delete.php");
}

if(isset($_POST['logout']))
{
    session_destroy();
    header("Location: admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="admin-body">
    <div class="row ">
    <form action="" method="post" class="form">
        <div class="col-1-of-3 margin-top-ultimate">
            <div class="cms">
                <h3 class="cms__heading">Create a project</h3>
                <p class="cms__paragraph">Here you can create a project. You can add projects you made for other people to see. Make sure to fill in all the fields.</p>
            <div class="form-group">
                <button type="submit" name="create" class="btn btn--green cms__button">Create &rarr;</button>
            </div>
            </div>
            
        </div>

        <div class="col-1-of-3 margin-top-ultimate">
            <div class="cms">
                <h3 class="cms__heading">Update a project</h3>
                <p class="cms__paragraph">Here you can update a project. You can change different items along the way. Feel free to make a change in the projects. </p>
            <div class="form-group">
                <button type="submit" name="update" class="btn btn--green cms__button">Update &rarr;</button>
            </div>
            </div>
        </div>

        <div class="col-1-of-3 margin-top-ultimate">
            <div class="cms">
                <h3 class="cms__heading">Delete a project</h3>
                <p class="cms__paragraph">Here you can delete a project. Delete a project of your choosing. But be mindfull, once deleted you can't get it back!</p>
            <div class="form-group">
                <button type="submit" name="delete" class="btn btn--green cms__button">Delete &rarr;</button>
            </div>
            </div>
        </div>
    </form>
    </div>
</body>
</html>
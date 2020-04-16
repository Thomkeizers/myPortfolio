<?php
    include "dbcon.php";

    $getProject = $_GET['project'];

    $projectSql = "SELECT * FROM projects WHERE project_id = $getProject";
    $projectSqlResult = mysqli_query($conn, $projectSql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Detail</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="detail-body">
<?php
$projectArray = [];

while($project = mysqli_fetch_assoc($projectSqlResult))
{
    $projectArray[] = $project;
}

foreach($projectArray as $singleProject)
{ ?>
    <div class="composition center-horizontal margin-top-ultimate">
        <img src="<?php echo $singleProject['project_detail_img_one']; ?>" alt="Photo 1" class="composition__photo composition__photo--p1">
        <img src="<?php echo $singleProject['project_detail_img_two']; ?>" alt="Photo 2" class="composition__photo composition__photo--p2">
         <img src="<?php echo $singleProject['project_detail_img_three']; ?>" alt="Photo 3" class="composition__photo composition__photo--p3">
    </div>
    <div class="description center-horizontal margin-top-ultimate">
        <p><?php echo $singleProject['project_description']; ?></p>
    </div>
    <?php
}
?>

    <div class="return">
        <a href="project.php">Go Back</a>
    </div>
    
</body>
</html>
<?php
include "dbcon.php";

$projectSql = "SELECT * FROM projects";
$projectSqlResult = mysqli_query($conn, $projectSql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects overview</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="project-body">
    <div>
        <h2 class="heading-secondary center-horizontal margin-top-big">My Projects</h2>
    </div>

    <?php

    $projectArray = [];

    while($project = mysqli_fetch_assoc($projectSqlResult))
    {
        $projectArray[] = $project;
    }

    foreach($projectArray as $singleProject)
    { ?>
        <div class="project margin-bottom-big">
        <h3 class="project__heading heading-tertiary"><?php echo $singleProject['project_name']; ?></h3>
        <img class="project__img" src="<?php echo $singleProject['project_overview_img'] ?>" alt="">
        
        <form class="project__form" method="post">
            <a class="project__more" href="projectdetail.php?project=<?php echo $singleProject['project_id'] ?>">More details</a>
        </form>
    </div>
    <?php
    }

    ?>

    
</body>
</html>
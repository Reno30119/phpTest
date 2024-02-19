<?php 
    $title = "Reno的第一個網站";
    $bgColor = "#D5D794";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <style>
        body{
            background-color: <?php echo $bgColor; ?>;
        }
    </style>
</head>
<body>

    <form method="post" action="test.php">
        姓名 : <input type="text" name="name"/>
        年齡 : <input type="text" name="age"/>
        <input type="submit"/>
    </form>
    
</body>
</html>

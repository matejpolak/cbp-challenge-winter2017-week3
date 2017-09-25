<?php
    require 'lib/data-functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM | LIST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">
</head>
<body>
<div class="d-flex justify-content-around">
    <div class="mt-5 w-50">
        <h1 class="text-center text">Details of <?php echo $_GET['name']; ?></h1><br>
        <ul class="text-uppercase pr-5"><?php  
            foreach ($_GET as $key => $value) {
                if ($key=='id') {
                    continue;
                } else {
                echo '<li class="d-flex justify-content-between"><span>' . $key . ':</span> <span>' . $value . '</span></li><br>' ;
                }
            }
        ?></ul>
        <div class="d-flex justify-content-around ml-4">
            <a class="text-uppercase" href="index.php">Submit again</a><br>
            <a class="text-uppercase" href="list.php">See a list of students</a><br>
        </div>
    </div>
</div>
</body>
</html>
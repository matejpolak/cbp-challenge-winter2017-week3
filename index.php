<?php
require 'lib/data-functions.php';

insert_data($_POST);

if($_POST) {
    $errors = array();
    if (empty($_POST ["name"])){
        $errors[] = '<p class="text-danger ml-2">Missing name, please fill it in.</p>';
    }
    if (empty($_POST ["phone"])){
        $errors[] = '<p class="text-danger ml-2">Missing phone number, please fill it in.</p>'; 
    }
    if (empty($_POST ["email"])){
        $errors[] = '<p class="text-danger ml-2">Missing e-mail address, please fill it in.</p>'; 
    }
    if (empty($errors)) {
        //savedate();
        header('Location: thanks.php');
        exit();
    } else {
        foreach ($errors as $error) {
            echo $error . '<br>';

        }
    }
}
    $data = [];
    foreach($_POST as $key => $value) {
        $data[$key]=$value;
    }

    if (isset($data['name'])) {
        insert_data($data);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    
    <h1 class="text-uppercase mt-3 ml-3 mb-2">Students database</h1>
    <form action="index.php" method="post" class="ml-5 mr-5">
        <div class="form-group">
            <label for="name">*Name:</label>
            <input type="text" name="name" class="form-control" id="firstname" aria-describedby="emailHelp" value="" placeholder="Enter your name"><br>
        </div>
        <div class="form-group">
        <label for="phone">*Phone number:</label>
            <input type="tel" name="phone" class="form-control" id="phone" value="" placeholder="Enter phone number"><br>
        </div>
        <div class="form-group">
        <label for="email">*E-mail address:</label>
            <input type="email" name="email" class="form-control" id="email" value="" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-check">
            <label class="form-label">EU citizen?</label>
            <input type="checkbox" name="eu" class="form-check-input ml-2" checked><br>
        </div>
        <div class="form-group">
            Country:
            <select name="country" class="form-control">
                <option value="CZ">CZ</option>
                <option value="SK">SK</option>
                <option value="UK">UK</option>
                <option value="US">US</option>
                <option value="DE">DE</option>
                <option value="RU">RU</option>
                <option value="PL">PL</option>
                <option value="Other" selected>--</option>
            </select><br>
        </div>
        <div class="form-group">
            <label for="about"> *Tell us something more about yourself</label>
            <textarea class="form-control" id="about" name="about" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>       
    </form>


    <small class="ml-5 mb-5">* information is required, please fill it in.</small>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
<?php
include("includes/classes/Signup.class.php");
$signup = new Signup;

if($signup->setEmail("katt@email.com")){
    echo "korrekt email! ";
}else{
    echo "felaktig email";
};





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gruppövning moment 3</title>
</head>
<body>
    <h1>Katthjälpen</h1>
    
</body>
</html>
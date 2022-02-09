<?php
include("includes/classes/Signup.class.php");
$signup = new Signup;

#kolla om formuilä'r 'r postat

if (isset($_POST['submit-btn'])) {
    $email = $_POST["email"];

    if ($signup->setEmail($email)) {
        echo "DU är anmäld!";
        header("Location:index.php");
    }else{
        echo "Något gick fel";
    }

}







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
    <h2>Anmälan</h2>
    <form action="index.php" method="POST">
        <label for="name">Namn: </label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">E-post: </label><br>
        <input type="email" id="email" name="email"><br>
        <input type="submit" name="submit-btn">
    </form>

    <h2>Email-lista</h2>
    <ul>
        <?php
        $email_list = $signup->getList();
        foreach ($email_list as $email) {
            echo "<li>$email</li>";
        }
        ?>
    </ul>



</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);


    if (empty($firstname)) {
        exit();
        header("Location: ../Product.php");
    }

    echo "These are the data that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favoritepet;

    header("Location: ../Product.php");
}
else {
    header("Location: ../Product.php");  
}
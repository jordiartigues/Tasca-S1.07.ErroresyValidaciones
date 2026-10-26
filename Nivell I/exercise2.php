<?php
$name = "";
$lastName = "";
$age = "";

$errorName = "";
$errorLastName = "";
$errorAge = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $errorName = "Name is required";
    } else {
        $name = input_data($_POST["name"]);
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñ ]*$/", $name)) {
            $errorName = "Only letters are allowed in the name";
        }
    }

    // Validate last name
    if (empty($_POST["last_name"])) {
        $errorLastName = "Last name is required";
    } else {
        $lastName = input_data($_POST["last_name"]);
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñ ]*$/", $lastName)) {
            $errorLastName = "Only letters are allowed in the last name";
        }
    }

    // Validate age
    if (empty($_POST["age"])) {
        $errorAge = "Age is required";
    } else {
        $age = input_data($_POST["age"]);
        if (!preg_match("/^[0-9]+$/", $age)) {
            $errorAge = "Only numbers are allowed for age";
        }
    }

    if ($errorName == "" && $errorLastName == "" && $errorAge == "") {
        echo "Registered successfully!" . "<br>";
        echo "The information entered is:" . "<br>";
        echo "Name: " . $name . "<br>";
        echo "Last Name: " . $lastName . "<br>";
        echo "Age: " . $age . "<br>";
    } else {
        echo "Something wrong:  <br>";
    }

    if ($errorName !== "") {
        echo $errorName . "<br>";
    }
    if ($errorLastName !== "") {
        echo $errorLastName . "<br>";
    }
    if ($errorAge !== "") {
        echo $errorAge . "<br>";
    }
}

function input_data($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}

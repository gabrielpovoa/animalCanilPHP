<?php
require_once 'adding/AddAnimal.php';

// Check if the form has been submitted.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data.
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $avatar = $_FILES['avatar']; // Get the file input data

    // Create an instance of the FormHandler class and process the form.
    $formHandler = new ReceivingAnimal($name, $gender, $avatar);
    $formHandler->processForm();
}

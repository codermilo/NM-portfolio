<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(Database::class);

$errors = [];

// dd($_POST);


if (! Validator::string($_POST['name'], 1, 255)) {
    $errors['name'] = 'A valid name is required.';
}

if (! Validator::string($_POST['message'], 1, 1000)) {
    $errors['message'] = 'A message of no more than 1,000 characters is required.';
}

if (! Validator::phone($_POST['phone'])) {
    $errors['phone'] = 'Invalid UK phone number format.';
}

if (! Validator::email($_POST['email'])) {
    $errors['phone'] = 'Please enter a valid email address.';
}

if (! empty($errors)) {
    return view("index.view.php", [
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO enquiries(name, companyName, email, phone, message) VALUES(:name, :companyName, :email, :phone, :message)', [
    'name' => $_POST['name'],
    'companyName' => $_POST['companyName'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone'],
    'message' => $_POST['message']
]);

header('location: /contact');
die();

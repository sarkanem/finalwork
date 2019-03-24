<?php
include 'db.php';

$email = $_POST['email']; // has to match the form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$password = $_POST['password'];

$errors = [];

// check if required fields are filled
if (!$email) {
    $errors[] = 'Email address is not provided';
}
if (!$firstName) {
    $errors[] = 'First name is not provided';
}
if (!$lastName) {
    $errors[] = 'Last name is not provided';
}
if (!$password) {
    $errors[] = 'Password is not provided';
}

// check if email is not taken

$query = "SELECT id FROM users WHERE email = ?"; 
$sql = $db->prepare($query);
$sql->bind_param('s', $email);
$sql->execute();
$sql->bind_result($id);
$sql->fetch();

if ($id)
{
    $errors[] = 'Email is already used';
}

if (count($errors) > 0)
{
    // form is not valid
    $_SESSION['errors'] = $errors;
    header('Location: /finalwork/?page=form&errors=true');
   
} else {
    //register the user
    $sqlinsert = $db->prepare("INSERT INTO users SET email = ?, first_name = ?, last_name = ?, password = ?");
    $sqlinsert->bind_param('ssss', $email, $firstName, $lastName, $encryptedPassword);
    $encryptedPassword = md5($password);
    $sqlinsert->execute();

    header('Location: /finalwork/?page=login');
}
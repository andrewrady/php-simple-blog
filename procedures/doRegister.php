<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$password = request()->get('password');
$confirmPassword = request()->get('confirm_password');
$email = request()->get('email');


if ($password != $confirmPassword) {
	redirect('/register.php');
}

$user = findUserByEmail($email);
if(!empty($user)) {
	redirect('/register.php');
}


$hashed = password_hash($password, PASSWORD_DEFAULT);

$user = createUser($email, $hashed);

redirect("/");

<?php

require_once('conn.php');

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

$password = md5($_POST['password']);

$query = 'SELECT * FROM users WHERE email = :email AND password = :password';
$stmt = $conn->prepare($query);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

$stmt->execute();
$user = $stmt->fetch();

// verification //

if(!empty($user)){

	session_start();

	$_SESSION['email'] = $user['email'];
	$_SESSION['password'] = $user['password'];

	header('Location: ../');

} else {

	header('Location: ../pages/user.php');

}

?>
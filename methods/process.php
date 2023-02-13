<?php 

session_start();

include_once("conn.php");

$data = $_POST;

if(!empty($data)) {

	if($data["type"] === "create") {

	$name = $data["name"];
	$email = $data["email"];
	$password = $data["password"];

	$query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

	$stmt = $conn->prepare($query);

	$stmt->bindParam(":name", $name);
	$stmt->bindParam(":email", $email);
	$stmt->bindParam(":password", $password);

	$stmt->execute();

}

	}

header("Location:../");

?>
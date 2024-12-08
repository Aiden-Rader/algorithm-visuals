<?php
// db_connect.php

// Database configuration
$serverName = "your_server_name";
$connectionOptions = [
	"Database" => "ALGO",
	"Uid" => "your_username",
	"PWD" => "your_password",
	"Encrypt" => true,
	"TrustServerCertificate" => true,
];

try {
	// Establish the connection
	$conn = new PDO("sqlsrv:server=$serverName", $connectionOptions['Uid'], $connectionOptions['PWD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("USE " . $connectionOptions['Database']);
} catch (PDOException $e) {
	die("Error connecting to database: " . $e->getMessage());
}

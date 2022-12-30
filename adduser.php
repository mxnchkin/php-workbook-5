<?php
// Start the session
session_start();

// if they are not logged in, exit.
if ($_SESSION["status"] == 'loggedIn') {
	echo 'You are logged in <br><br>';
} else {
	exit('You need to be logged in before you can add a user.');
}

?>

<!DOCTYPE html>
<HTML>
<head>
	<title>Add User - v0.1</title>
</head>

<body>
	<h1>Add User - v0.1</h1>

<?php 
$userid   = $_GET['userid'];
$password = $_GET['password'];

// make sure they are logged in
if (!isset($_SESSION["status"]))
{
	exit('You need to log in before you can add more users');
} 

if ($_SESSION["status"] != 'loggedIn')
{
	exit('You need to log in before you can add more users');
} 

// Add userid and password to list of authorised users, which is held in the session
$_SESSION['users'] = $_SESSION['users'] . '#' . $userid . '~' . $password;

echo('<br>Here is the list of authorised users : ' . $_SESSION['users']);

?>

<form name='form1' id='form1' action="index.html" method="post">
	Home : <input type="submit"  value="Home">
</form>

</body>
</HTML>

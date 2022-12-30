<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<HTML>
<head>
	<title>List Users - v0.1</title>
</head>

<body>
	<h1>List Users - v0.1</h1>

<?php 

$DEFAULT_USERID   = 'steve';
$DEFAULT_PASSWORD = 'mypassword';

// make sure default user is present
if (!isset($_SESSION['users']))
{
	$_SESSION['users'] = $DEFAULT_USERID . '~' . $DEFAULT_PASSWORD;
	echo('session was not set - default userid has been added<br><br>');	
}

// get list of userids and passwords into an array
$users   = explode('#', $_SESSION['users']); 	// $users is now an array, each element is 'useridn~passwordn'

// go though each element in the array
echo('<table border="True">');
echo('<tr><th>Userid</th><th>Password</th></tr>');

foreach($users as $line) { 
	echo('<tr>');
	$fields = explode('~', $line);
	foreach($fields as $field) {
		echo('<td>');
		echo($field);
		echo('</td>');
	}
	echo('</tr>'); 
}
echo('</table>');

?>

<form name='form1' id='form1' action="index.html" method="post">
	Home : <input type="submit"  value="Home">
</form>

</body>
</HTML>

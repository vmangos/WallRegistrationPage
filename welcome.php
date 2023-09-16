<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
		.wrapper{ width:350px; height:620px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
<table>
    <tr><h2>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to my Vanilla WoW project.</h2></tr>
	<tr><p>You have successfully registered for this project. Below is a link to the current custom patch-3.mpq and an official 1.12.1 client.</p></tr>
		<form>
		<input type="button" class="clicker" onclick="location.href='enter the URL of your custom patch here (use google drive)';" value="Custom patch"/>
        <input type="button" class="clicker" onclick="location.href='https://drive.google.com/file/d/1TDoNNUXCtsgIUhLw96biPCqjv3AcLYkg/view';" value="1.12.1 Client" />
		</form>
	<tr><p>Be aware that this project is a fan server, and is not affiliated with the Blizzard.</p></tr>
	<tr><p>To connect, download the custom patch into the client "Data" folder. You should also delete your WDB folder in order to update your item cache.</p></tr>
	<tr><p>Afterwards, open your realmlist file in the main directory and change it to read the following:</p></tr>
	<tr><p><strong>set realmlist XXXXXXX</strong></p></tr>
	<form>
		<input type="button" class="clicker" onclick="location.href='Enter discord url here';" value="Discord"/>
		<input type="button" class="clicker" onclick="location.href='Enter patreon url here';" value="Patreon"/>
	</form>
	<tr><p>Come join the discord for all the updates and announcements.</p></tr>
	<tr><p>If you want to switch back to a default vanilla server, just remove the custom patch from the directory.</tr></tr>
		<form>
		<input type="button" class="clicker" onclick="location.href='logout.php';" value="Logout"/>
	</form>
</table>	
</div>
</body>
</html>
<?php
session_start();

if(!isset($_SESSION['user']))
{
header("Location: login.html");
}
?>

<h2>Post Failed Startup Idea</h2>

<form action="postidea.php" method="post">

Startup Title <br>
<input type="text" name="title" required><br><br>

Description <br>
<textarea name="description"></textarea><br><br>

Failure Reason <br>
<textarea name="reason"></textarea><br><br>

<input type="submit" value="Post Idea">

</form>

<br>

<a href="viewideas.php">View Ideas</a>
<a href="logout.php">Logout</a>
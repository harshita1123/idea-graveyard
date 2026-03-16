<?php

$idea=$_POST['idea'];
$reason=$_POST['reason'];

echo "<h2>AI Suggestion</h2>";

echo "Idea: ".$idea."<br><br>";

echo "Failure: ".$reason."<br><br>";

echo "Possible Fix:<br>";

echo "• Improve marketing<br>";
echo "• Validate idea with users<br>";
echo "• Launch MVP first<br>";

?>
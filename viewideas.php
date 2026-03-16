<?php
$data=json_decode(file_get_contents("data/ideas.json"),true);
?>

<!DOCTYPE html>
<html>

<head>

<title>Explore Ideas</title>

<style>

body{
font-family:Arial;
background:linear-gradient(120deg,#667eea,#764ba2);
margin:0;
padding:20px;
}

h1{
text-align:center;
color:white;
}

.card{

background:white;
padding:20px;
border-radius:10px;
margin-bottom:20px;
box-shadow:0 5px 15px rgba(0,0,0,0.2);

}

button{

padding:8px 15px;
border:none;
border-radius:5px;
background:#667eea;
color:white;

}

</style>

</head>

<body>

<h1>⚰️ Idea Graveyard</h1>

<?php

foreach($data as $index=>$idea)
{

echo "<div class='card'>";

echo "<h2>".$idea['title']."</h2>";

echo "<p>".$idea['description']."</p>";

echo "<p><b>Failure:</b> ".$idea['reason']."</p>";

echo "<p><b>Votes:</b> ".$idea['votes']."</p>";

/* upvote */

echo "<form action='upvote.php' method='post'>";

echo "<input type='hidden' name='id' value='".$index."'>";

echo "<button>👍 Upvote</button>";

echo "</form>";

echo "<br>";

/* comment */

echo "<form action='comment.php' method='post'>";

echo "<input type='hidden' name='id' value='".$index."'>";

echo "<input type='text' name='comment'>";

echo "<button>Comment</button>";

echo "</form>";

echo "<br>";

/* AI */

echo "<form action='ai.php' method='post'>";

echo "<input type='hidden' name='idea' value='".$idea['description']."'>";

echo "<input type='hidden' name='reason' value='".$idea['reason']."'>";

echo "<button>AI Suggest</button>";

echo "</form>";

echo "</div>";

}

?>

</body>
</html>
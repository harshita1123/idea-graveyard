<?php
session_start();

$title=$_POST['title'];
$description=$_POST['description'];
$reason=$_POST['reason'];

$file="data/ideas.json";

$data=json_decode(file_get_contents($file),true);

$newIdea=[

"title"=>$title,
"description"=>$description,
"reason"=>$reason,
"user"=>$_SESSION['user'],
"votes"=>0,
"comments"=>[]

];

$data[]=$newIdea;

file_put_contents($file,json_encode($data));

header("Location:viewideas.php");

?>
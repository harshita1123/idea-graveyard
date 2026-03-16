<?php

$id=$_POST['id'];
$comment=$_POST['comment'];

$file="data/ideas.json";

$data=json_decode(file_get_contents($file),true);

$data[$id]['comments'][]=$comment;

file_put_contents($file,json_encode($data));

header("Location:viewideas.php");

?>
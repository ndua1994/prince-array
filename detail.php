<?php

include('include/array_rec.php');


$id=$_GET['id'];

foreach($record as $rec){

if($rec['id']==$id)
{
	$heading=$rec['heading'];
	$description=$rec['description'];
	$image=$rec['image'];
}



}
	

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail</title>
</head>
<body>


<div class="content">
<img src="<?=$image?>">
<h1><?=$heading?></h1>
<p><?=$description?></p>	
</div>





</body>
</html>
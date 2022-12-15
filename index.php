<?php

include('include/array_rec.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>


<?php foreach($record as $rec){?>
<a href="detail.php?id=<?=$rec['id']?>">
<div class="content">
<img src="<?=$rec['image']?>">
<h1><?=$rec['heading']?></h1>	
</div>
</a>
<?php }?>




</body>
</html>
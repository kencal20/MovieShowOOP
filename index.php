<?php
include 'class/movie.class.php';

//View
$shwId = new Movies($Movie_id,$Title);


?>
<h1><?php echo $shwId->Movie_id;?></h1>
<?php
include_once('header.php');

?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'wom');
if(!$conn){
	die("faill".mysqli_connect_error());
}else{
	echo "y";
}

$i=1;
foreach ($_GET['chosen_magics'] as $key => $value) {

	echo $key." / ".$value."<br>";
	$magic[$i]=$value;
	$i++;
}
$count= count($magic);
if ($count<4) {

header('Location: pre-arena.php');
}


$read_query2 = "SELECT * FROM `magics` 
WHERE `magic_id`= $magic[1] || `magic_id`= $magic[2] || `magic_id`= $magic[3] || `magic_id`= $magic[4]";
$read_result2 = mysqli_query($conn, $read_query2);

	if (mysqli_num_rows($read_result2) > 0) {
	
		$res2 = mysqli_query($conn, $read_query2);
			
			
			if (mysqli_num_rows($res2) > 0){ 
		
	
		while($row2 = mysqli_fetch_assoc($read_result2)){
		
			// var_dump($row1);
			
			echo "<br>". $row2['magic_name'];

			

}
}
}




	
	

	




?>


<?php

include_once('footer.php')



?>
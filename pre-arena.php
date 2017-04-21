<?php
include_once('header.php');

?>
<script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'wom');
if(!$conn){
	die("faill".mysqli_connect_error());
}else{
	echo "y";
}

$user_id = 2;


$read_query 	= "SELECT *
FROM users
JOIN characters ON `users`.`characters_id` = `characters`.`char_id`
JOIN class ON `characters`.`class_id` = `class`.`class_id`
JOIN race ON `class`.`race_id` = `race`.`race_id`
WHERE `users`.`user_id` = $user_id
";


$read_result = mysqli_query($conn, $read_query);
	if (mysqli_num_rows($read_result) > 0) {
		
		$res = mysqli_query($conn, $read_query);
			
			
			if (mysqli_num_rows($res) > 0){ 
		
	
		while($row = mysqli_fetch_assoc($read_result)){
			$row1= mysqli_fetch_assoc($res);
			// var_dump($row1);
			echo "info : <br>";
			echo "User : ".$row['user_name']."<br>Character name :  ".$row['char_name']."<br>Race :
			 ".$row['race_name']."<br>Class : ".$row['class_name']."<br> Hero level :".$row['char_lv']."<br>";
			// var_dump($row);
			 $char_lvl = $row['char_lv'];
			 $char_class = $row['class_id'];
			


}
}
}
$read_query2 = "SELECT *
FROM magics
 JOIN magic_type ON `magic_type`.`type_id` = `magics`.`magic_type`
 JOIN race ON `race`.`race_id` = `magics`.`class_id` WHERE `magics`.`magic_req_lv` <=  $char_lvl AND `magics`.`class_id` = $char_class";
$read_result2 = mysqli_query($conn, $read_query2);

	if (mysqli_num_rows($read_result2) > 0) {
		echo "<form action='pre-arena.php' method='GET'>";
		echo "Choose magic for battle : <br>";
		$res2 = mysqli_query($conn, $read_query2);
			
			
			if (mysqli_num_rows($res2) > 0){ 
		
	
		while($row2 = mysqli_fetch_assoc($read_result2)){
			
			// var_dump($row1);
			echo "<input type='checkbox' name='chosen_magics' value='".$row2['magic_id']."'>".$row2['magic_name'];
			echo "Magic name : ".$row2['magic_name']."/Magic type : ".$row2['type']."/ For race : ".$row2['race_name']."<br>";
			// var_dump($row);
}
}
echo  "Dificulty :<br>";
echo '	<input type="radio" name="dificulty" value="easy" checked> Easy<br>
  		<input type="radio" name="dificulty" value="medium"> Medium<br>
  		<input type="radio" name="dificulty" value="hard"> Hard <br>';

echo "<input type='submit' name='submit' value='FIGHT'>";
echo "</form>";
}


?>

<script type="text/javascript">

$('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 4) {
        $(this).prop('checked', false);
    
    }
});
</script>

<?php
include_once('footer.php')



?>
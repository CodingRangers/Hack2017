
<?php
include_once('header.php');
session_start();
include_once('conn.php');
?>

<?php

$i=1;
foreach ($_GET['chosen_magics'] as $key => $value) {

	// echo $key." / ".$value."<br>";
	$magic[$i]=$value;
	$i++;
}
$count= count($magic);
if ($count<4) {
$_SESSION['error'] = "Chose 4 magics for battle!";
header('Location: pre-arena.php');
}else{
	$_SESSION['error'] = "";
}


$read_query2 = "SELECT * FROM `magics` 
WHERE `magic_id`= $magic[1] || `magic_id`= $magic[2] || `magic_id`= $magic[3] || `magic_id`= $magic[4]";
$read_result2 = mysqli_query($conn, $read_query2);

	if (mysqli_num_rows($read_result2) > 0) {
	
		$res2 = mysqli_query($conn, $read_query2);
			
			
			if (mysqli_num_rows($res2) > 0){ 
		
	
		while($row2 = mysqli_fetch_assoc($read_result2)){
		
			// var_dump($row1);
			
			// echo "<br>". $row2['magic_name'];

			

}
}
}




	
	

	




?>
<style type="text/css" media="screen">
#player_1 {
	position:absolute;
	background: url('img/sprites/human-knight.png') no-repeat -66px 0;
	width: 98px;
	height: 236px;
	margin-bottom: 2%;
	top:150px;

}
	
</style>
<div id="player_1">

</div>
<div id="hud">
	<img  src="img/hud.png" alt="asdasdasd" width="80%" height="auto" style="position:absolute;left:10%;bottom:0;">
</div>

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
    alert( "ready!" );
    $(".header").slideUp("slow");
   $(".w3_navigation").slideUp("slow");
  $("#hud").fadeIn("slow");
   $("#player_1").mouseover(function() {
    $(this ).css({'backgroundPosition':'-264px -9px','width':'153px'})

  }).mouseout(function(){
  	$(this ).css({'backgroundPosition':'-66px 0','width':'98px'})
  })

});

</script>

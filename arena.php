
<?php
include_once('header.php');
session_start();

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
echo "<div id='spells'>";
	if (mysqli_num_rows($read_result2) > 0) {
	
		$res2 = mysqli_query($conn, $read_query2);
			
			
			if (mysqli_num_rows($res2) > 0){ 
		
	
		while($row2 = mysqli_fetch_assoc($read_result2)){
		
			// var_dump($row1);
			
			echo "<img class='spell_".$row2['magic_id']."' src='".$row2['magic_avatar']."'>";


			

}
}
echo "</div>";
}



	
	

	




?>
<style type="text/css" media="screen">
#spells{
	width:400px;
}
#spells > img{
	margin-right:4%;
	margin-bottom:3%;
}
#spells > img:nth-of-type(4){
	margin-right:0!important;
}
#player_1 {
	position:absolute;
	background: url('img/sprites/human-knight.png') no-repeat -66px 0;
	width: 98px;
	height: 236px;
	margin-bottom: 2%;
	top:150px;

}
#spells{
/*	margin-top:90%;*/
position:absolute;
left:40%;
bottom:0;
z-index: 99999;

}
#enemy{
	position:absolute;
	background: url('img/sprites/creature-orc.png') no-repeat -11px -18px;
	width: 215px;
	height: 190px;
	margin-left: 80%;
	top:150px;
	
}
/*#container_life{
	border:red 2px solid;
	width:180px;
	height:180px;
	border-radius: 50%;
	position:absolute;
	left:20%;
	bottom:2%;
	display: block;
	position:relative;


}*/
.container_life {
	/*border:red 2px solid;*/
	width:56%;
	height:30%;
	/*border-radius: 50%;*/
	position:absolute;
	/*left:20%;*/
	bottom:2%;
	display: block;
	background: url('img/hud2.png') no-repeat ;
	 background-size: 40% 40%;
	top:0;
	}

.skillbar-bar {
	/*border:2px red solid;*/
	height:10px;
	width:190px;
	margin-top:63px;
	margin-left:13%;

	background:#6adcfa;
	border-radius:20px;
	/*opacity: 0.3;*/
}
.skill-bar-percent {
	position:absolute;
	right:10px;
	left:7%;
	top:10%;
	font-size:11px;
	height:35px;
	line-height:35px;
	color:#fff;
	/*color:rgba(0, 0, 0, 0.4);*/
}
/*.container_mana {
	/*border:red 2px solid;*/
/*	width:180px;
	height:180px;
	border-radius: 50%;
	position:absolute;
	left:65%;
	bottom:2%;
	display: block;
	}*/

.skillbar-bar-mana {
	/*border:2px red solid;*/
	height:100%;
	width:180px;
	background:#5277f1;
	border-radius:50%;
	opacity: 0.3;
/*	display:inline-block;*/
position: absolute;

}
.skill-bar-percent-mana {
	position:absolute;
	right:55%;
	left:35%;
	top:0;
	font-size:11px;
	height:35px;
	line-height:35px;
	color:#ffffff;
	color:rgba(0, 0, 0, 0.4);
	font-weight: bolder;
	font-size:20px;
	color:#fff;
}*/

	
</style>
<div id="player_1">

</div>
<div id="enemy">

</div>
<div id="hud">
	<img  src="img/hud.png" alt="asdasdasd"  style="position:absolute;left:35%;bottom:0;">
</div>
<!-- <div id="container_life">
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
</div> -->
<div class="container_life clearfix ">
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
	
</div> <!-- End Skill Bar -->
<!-- <img src="img/hud2.png" width="20%" height="20%" alt="faill"> -->
<!-- <div class="container_life clearfix ">
	<div class="skillbar-bar" style="background: #2ecc71;"></div>
	<div class="skill-bar-percent">100%</div>
	
</div> --> <!-- End Skill Bar -->
<!-- <div class="container_mana clearfix ">
	<div class="skillbar-bar-mana" style="background: #5277f1;"></div>
	<div class="skill-bar-percent-mana">100%</div>
	
</div> -->

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
  }).click(function() {
  	$(".skillbar-bar").css('width','180px');
  	
  })
  $("#enemy").mouseover(function() {
    $(this ).css({'backgroundPosition':'-506px -18px','width':'170px'})

  }).mouseout(function(){
  	$(this ).css({'backgroundPosition':'-11px -18px','width':'215px','height':'200px'})
  }).click(function() {
  	
  })

});

</script>

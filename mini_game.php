<?php
	include("header.php");
		include("quest.php");
?>
<?php
 

if (!empty($_POST['answer'])) {

	if ($_POST['answer'] ==  $_POST['correct_answer']) {
		
		$_SESSION['count']=$_SESSION['count']+20;
		$_SESSION['money']=$_SESSION['money']+400;
		?><div class="answer"><b>Верен Отговор!!!<br> Получаваш 20 хвърляния и 400 монети ;)</b></div><?php
	}else{
		$_POST['answer'];
		$_SESSION['money']=$_SESSION['money']-50; 
		?><div class="answer"><b>Грешен отговор!!!<br> Губиш 50 монети ;(</b></div><?php
	}
	unset($_POST);
	 $_SESSION['answer_check']=3;
} 
elseif ($_SESSION['answer_check']==2) {
?><div class="answer"><b>Няма посочен отговор ;(</b></div><?php
	 $_SESSION['answer_check']=3;
}



















$_SESSION['answer_check']=2;
$message="Дали направи правилният избор ?";
$quest_rand = rand(1,6);
$quest_temp = rand(1,3);
switch ($quest_temp) {
	case '1':
	$quest_temp1=1;
	$quest_temp2=2;
	$quest_temp3=3;
		break;
	case '2':
	$quest_temp1=3;
	$quest_temp2=2;
	$quest_temp3=1;
		break;
	case '3':
	$quest_temp1=2;
	$quest_temp2=3;
	$quest_temp3=1;
		break;
}
$correct_answer = $qusts[$quest_rand][3];
?>
<div class="quest">
<p><?php echo   $qusts[$quest_rand][0];    ?>  </p>
<form method="post" action="">
<input type="hidden" value="<?php echo $qusts[$quest_rand][3] ?>" name="correct_answer">
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp1]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp1]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp2]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp2]; ?><br>
  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp3]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp3]; ?><br><br>
  <input type="submit" name="submit" value="answer" onclick="alert('<?php echo $message;  ?> ')">
</div>
<?php

	
		
?>











	
	<?php

 	include("footer.php");
	?>



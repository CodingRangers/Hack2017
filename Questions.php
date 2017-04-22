<?php
	include("header.php");
	include("quest.php");
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
		$q = "SELECT `user_id` FROM `users` WHERE `user_name` = '$username' ";
		$res = mysqli_query($conn,$q);
		/*echo "<pre>";
		var_dump($res);
		echo "</pre>";*/
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$user_id = $row['user_id'];
		}
		$q = "SELECT `char_xp`,`char_lv` FROM `characters` WHERE `user_id` = $user_id";
		$res = mysqli_query($conn,$q);
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$_SESSION['xp']  = $row['char_xp'];
			$_SESSION['lv']  = $row['char_lv'];
		}
		$q = "SELECT `class_id` FROM `characters` WHERE `user_id` = $user_id";
		$res = mysqli_query($conn,$q);
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$class_id  = $row['class_id'];
		}
		$q = "SELECT `class_avatar` FROM `class` WHERE `class_id` = $class_id";
		$res = mysqli_query($conn,$q);
		while ($row = mysqli_fetch_assoc($res)) 
		{
			$class_avatar  = $row['class_avatar'];
		}
		echo '
			<div class="profile_box avatar" id="question_avatar">
				<img src="' . $class_avatar . '" alt="' . $row['class_name'] . '">
			</div>
			';
		?>
		<div id=wrapper_qu>
		<?php
		if (!empty($_POST['answer'])) 
		{
			if ($_POST['answer'] ==  $_POST['correct_answer']) 
			{
				
				$_SESSION['xp']+=4;
				?><div class="answer"><span class=big_answer>Correct answer<br>You have won 4xp:)</span></div><?php
			}
			else
			{
				$_SESSION['xp']-=2;
				?><div class="answer"><span class=big_answer>Wrong answer!<br>You have lost 2xp</span></div><?php
			}
			unset($_POST);
			 $_SESSION['answer_check']=3;
		} 
		elseif ($_SESSION['answer_check']==2) 
		{
		?>
		<div class="answer">No answer :( ... You have lost 2xp!</div>
			<?php
			$_SESSION['xp']-=2;
			 $_SESSION['answer_check']=3;
		}
		$_SESSION['answer_check']=2;
		$message="Is this the right choice?";
		$quest_rand = rand(1,6);
		$quest_temp = rand(1,3);
		switch ($quest_temp) 
		{
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
		<p>
		<?php echo   $qusts[$quest_rand][0];    ?>  </p>
		<form method="post" action="">
		<input type="hidden" value="<?php echo $qusts[$quest_rand][3] ?>" name="correct_answer">
		  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp1]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp1]; ?><br>
		  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp2]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp2]; ?><br>
		  <input type="radio" name="answer" value="<?php echo $qusts[$quest_rand][$quest_temp3]; ?>"> <?php echo  $qusts[$quest_rand][$quest_temp3]; ?><br><br>
		  <input type="submit" id=answer name="submit" value="Answer" onclick="alert('<?php echo $message;  ?> ')">
		</div>
		</div>
		<?php	
			$char_xp = $_SESSION['xp'];
			$char_lv = $_SESSION['lv'];
			if(eligable_for_level($char_xp,$char_lv+1))
				{$char_lv+=1;}
			$q = "UPDATE `characters` SET `char_xp`= $char_xp , `char_lv` = $char_lv WHERE `user_id`='$user_id'";
			mysqli_query($conn,$q);
			?>
			<div>
			<?php
			echo "<h2> You have ". $_SESSION['xp'] . "xp!</h2>";
			echo "<h2> You are ". $char_lv . "level!</h2>";
			?>
			</div>
			<?php
	}
			include("footer.php");
		?>
<?php
include_once('header.php');
// get user id
$username = $_SESSION['username'];
$qry = "SELECT user_id FROM users WHERE user_name = '$username'";
$result = mysqli_query($conn, $qry);
if (mysqli_num_rows($result) != 0) {
	$row = mysqli_fetch_array($result);
	$_SESSION['user_id'] = $row['user_id'];
}
// end get user id	
?>
<div class="container profile">
	<h3>Profile</h3>
	<?php
	$user_id = $_SESSION['user_id'];
	$read_query = "SELECT * FROM `users`
	JOIN characters ON users.user_id = characters.user_id
	JOIN class on characters.class_id = class.class_id
	JOIN race ON class.race_id = race.race_id
	WHERE users.user_id = $user_id ";
	$read_result = mysqli_query($conn, $read_query);
	if (mysqli_num_rows($read_result) != 0) {
		while ($row = mysqli_fetch_assoc($read_result)) {
			echo '
			<div class="profile_box avatar">
				<img src="' . $row['class_avatar'] . '" alt="' . $row['class_name'] . '">
			</div>
			<div class="profile_box my_info">

				<div class="my_row"><strong>name: </strong>' . $row['char_name'] . '</div>
				<div class="my_row"><strong>lvl: </strong>' . $row['char_lv'] . '</div>
				<div class="my_row"><strong>race: </strong>' . $row['race_name'] . '</div>
				<div class="my_row"><strong>class: </strong>' . $row['class_name'] . '</div>
				<div class="my_row"><h4>Acquired skills</h4></div>
				';

				//Show MAGICS
				$read_query1 = "SELECT * FROM `magics` 
				JOIN class ON magics.class_id = class.class_id
				WHERE class.class_id = $row[class_id]";
				$read_result1 = mysqli_query($conn, $read_query1);
				if (mysqli_num_rows($read_result1) != 0) {
					while ($row1 = mysqli_fetch_assoc($read_result1)) {
						echo '
						<div class="my_row"><img src="' . $row1['magic_avatar'] . '" alt="' . $row1['magic_name'] . '"><span>' . $row1['magic_name'] . '</span></div>
					';

				}
				
			}
			// End MAGICS
			echo "</div>";

		}
	}

	?>
	<div class="profile_box my_stats">
		<div class="my_row"><h4>Stats</h4></div>
		<div class="my_row"><span>Games Played: </span>value</div>
		<div class="my_row"><span>Games Won: </span>value</div>
		<div class="my_row"><span>Games Cost: </span>value</div>

	</div>
</div>


<?php
include_once('footer.php')

?>